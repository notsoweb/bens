<?php namespace App\Http\Controllers\Dashboard;
/**
 * @copyright Copyright (c) 2023 Notsoweb (https://notsoweb.com) - All rights reserved.
 */

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Notsoweb\Core\Http\Controllers\VueController;

/**
 * Administrar clientes
 * 
 * @author Moisés de Jesús Cortés Castellanos <ing.moisesdejesuscortesc@notsoweb.com>
 * 
 * @version 1.0.0
 */
class ClientController extends VueController
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->vueRoot('admin.clients');    
    }

    /**
     * Lista de clientes
     */
    public function index()
    {
        return $this->vuew('index', [
            'clients' => Client::paginate(config('app.pagination'))
        ]);
    }
}
