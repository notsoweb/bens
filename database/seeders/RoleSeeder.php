<?php namespace Database\Seeders;
/**
 * @copyright Copyright (c) 2022 Notsoweb (https://notsoweb.com) - All rights reserved.
 */

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

/**
 * Roles y permisos iniciales
 * 
 * @author Moisés de Jesús Cortés Castellanos <ing.moisesdejesuscortesc@notsoweb.com>
 * @version 1.0.0
 */
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::withoutEvents(function () {
            // Permisos para gestionar roles del sistema
            [
                $rolesIndex,
                $rolesCreate,
                $rolesEdit,
                $rolesDestroy
            ] = $this->onCRUD('roles', 'Roles');

            // Permisos para acceder al historial del sistema
            $historiesIndex = $this->onIndex('histories', 'Historal global');

            // Permisos para usuarios
            [
                $usersIndex,
                $usersCreate,
                $usersEdit,
                $usersDestroy
            ] = $this->onCRUD('users', 'Usuarios:');

            $usersConfig = $this->onPermission('users.config', 'Usuarios: Configuraciones adicionales');

            /**
             * Roles con asignación de permisos
             */

            // Desarrollador
            Role::create([
                'name' => 'developer',
                'description' => 'Desarrollador del sistema, desbloquea opciones ocultas.'
            ])->givePermissionTo(Permission::all());

            // Role de administrador
            Role::create([
                'name' => 'admin',
                'description' => 'Administrador del sistema'
            ])->givePermissionTo(
                $historiesIndex,
                $usersIndex,
                $usersCreate,
                $usersEdit,
                $usersDestroy
            );

             // Role de supervisor (solo lectura)
             Role::create([
                'name' => 'supervisor',
                'description' => 'Supervisor: Solo lectura'
            ])->givePermissionTo(
                $historiesIndex,
                $rolesIndex,
                $usersIndex,
            );
        });
    }
    
    /**
     * Permite crear un permiso albitrario
     * 
     * @param string $code Código del permiso que será usado para programar
     * @param string $description Descripción del permiso
     * 
     * @return Permission
     */
    private function onPermission($code, $description) : Permission
    {
        return Permission::create([
            'name' => $code,
            'description' => $description,
        ]);
    }
    
    /**
     * Permiso para acceder a un area
     * 
     * @param string $code Código del permiso que será usado para programar
     * @param string $departament Área o departamento que se usa en la descripción
     * 
     * @return Permission
     */
    private function onIndex($code, $department) : Permission
    {
        return Permission::create([
            'name' => "{$code}.index",
            'description' => "$department: Mostrar datos",
        ]);
    }
    
    /**
     * Permiso para crear un registro
     * 
     * @param string $code Código del permiso que será usado para programar
     * @param string $departament Área o departamento que se usa en la descripción
     * 
     * @return Permission
     */
    private function onCreate($code, $department) : Permission
    {
        return Permission::create([
            'name' => "{$code}.create",
            'description' => "$department: Crear registros",
        ]);
    }
    
    /**
     * Permiso para editar un registro
     * 
     * @param string $code Código del permiso que será usado para programar
     * @param string $departament Área o departamento que se usa en la descripción
     * 
     * @return Permission
     */
    private function onEdit($code, $department) : Permission
    {
        return Permission::create([
            'name' => "{$code}.edit",
            'description' => "$department: Actualizar registro",
        ]);
    }
    
    /**
     * Permiso para eliminar un registro
     * 
     * @param string $code Código del permiso que será usado para programar
     * @param string $departament Área o departamento que se usa en la descripción
     * 
     * @return Permission
     */
    private function onDestroy($code, $department) : Permission
    {
        return Permission::create([
            'name' => "{$code}.destroy",
            'description' => "$department: Eliminar registro",
        ]);
    }
    
     /**
      * Permiso para eliminar un registro
      * 
      * @param string $code Código del permiso que será usado para programar
      * @param string $departament Área o departamento que se usa en la descripción
      * 
      * @return Permission
      */
     private function onInbox($code, $department) : Permission
     {
         return Permission::create([
             'name' => "{$code}.inbox",
             'description' => "$department: Bandeja",
         ]);
     }
    
    /**
     * CRUD de permisos
     * 
     * @param string $code Código del permiso que será usado para programar
     * @param string $departament Área o departamento que se usa en la descripción
     * 
     * @return array
     */
    public function onCRUD($code, $department) : array
    {
        return [
            $this->onIndex($code, $department),
            $this->onCreate($code, $department),
            $this->onEdit($code, $department),
            $this->onDestroy($code, $department)
        ];
    }
}
