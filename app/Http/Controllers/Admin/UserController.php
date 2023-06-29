<?php namespace App\Http\Controllers\Admin;
/**
 * @copyright Copyright (c) 2023 Notsoweb (https://notsoweb.com) - All rights reserved.
 */

use App\Http\Requests\StoreUser;
use App\Http\Requests\UpdateUser;
use App\Http\Traits\UseFetch;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Notsoweb\Core\Http\Controllers\VueController;
use Notsoweb\Core\Http\Traits\Controllers\WithPermission;
use Spatie\Permission\Models\Role;

/**
 * Controla los usuarios del sistema
 * 
 * @author Moisés de Jesús Cortés Castellanos <ing.moisesdejesuscortesc@notsoweb.com>
 * @version 1.0.0
 */
class UserController extends VueController
{
    use UseFetch,
        WithPermission;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->vueRoot('admin.user');
        $this->withDefaultPermissions('users');
    }

    /**
     * Muestra los usuarios del sistema
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $q = request()->get('q');

        return $this->vuew('index', [
            'users' => User::whereNotIn('id', [1,2])
                ->where('name', 'LIKE', "%{$q}%")
                ->select([
                    'id',
                    'name',
                    'paternal',
                    'maternal',
                    'email',
                    'phone'
                ])
                ->paginate(config('app.pagination')),
            ]);
    }

    /**
     * Formulario para crear un usuario
     */
    public function create()
    {
        return $this->vuew('create');
    }

    /**
     * Almacena un nuevo usuario
     */
    public function store(StoreUser $request)
    {
        $data = $request->all();
        // Cifro la contraseña recibida
        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);

        return $this->index();
    }

    /**
     * Configuraciones del usuario
     * 
     * @param User $user Modelo del usuario
     */
    public function settings(User $user)
    {
        return $this->vuew('settings', [
            'user' => $user,
            'userRoles' => $user->roles,
            'roles'=> Role::orderBy('name', 'ASC')
                ->get(),
        ]);
    }

    /**
     * Actualiza la información de un usuario
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param User $user Modelo del usuario
     */
    public function update(UpdateUser $request, $user) : void
    {
        $data = $request->all();

        $model = User::find($user);
        $model->update($data);
    }

    /**
     * Actualiza la contraseña de un usuario
     * 
     * @param Request $request
     * @return void
     */
    public function updatePassword(Request $request) : void
    {
        $data = $this->validate($request, [
            'password' => ['required', 'string', 'min:8'],
            'user_id' => ['required'],
        ]);
        
        $user = User::find($data['user_id']);   
        $user->update([
            'password' => Hash::make($data['password'])
        ]);
    }

    /**
     * Sincroniza los roles de los usuarios para otorgar permisos
     * 
     * @param Request $request
     * @return void
     */
    public function syncRoles(Request $request) : void
    {
        $data = $this->validate($request, [
            'roles' => ['required'],
            'user_id' => ['required'],
        ]);

        $roles = [];

        foreach ($data['roles'] as $role) {
            $roles[] = $role['id'];
        }

        $user = User::find($data['user_id']);
        $user->syncRoles($roles);
    }

    /**
     * Retorna las ultimas notificaciones del usuario
     * 
     * @return JsonResponse
     */
    public function getNotifications() : JsonResponse
    {
        try {
            $notifications = auth()
                ->user()
                ->notifications()
                ->limit(7)
                ->latest()
                ->get();

            return $this->successFetch([
                'notifications' => $notifications
            ]);
        } catch (\Throwable $th) {
            $this->reportError($th, __METHOD__);
            return $this->errorFetch(__('The user does not have notifications'));
        }
    }

    /**
     * Elimina un usuario del sistema con todos sus registros vinculados
     * 
     * @param integer $user ID del usuario
     */
    public function destroy($user) : void
    {
        try {
            $user = User::find($user);
            $user->delete();

            
        } catch (\Throwable $th) {
            Log::channel('users')
                ->error($th->getMessage());
        }
    }

    /**
     * Crea log de los errores ocurridos en este controlador
     * 
     * @param object $th Contiene todos los detalles del error
     * @param string $method Función del controlador sobre la que ocurrio el error
     * @return void
     */
    private function reportError($th, $method) : void
    {
        Log::channel('users')->error("Method: $method");
        Log::channel('users')->error($th->getMessage());
    }
}
