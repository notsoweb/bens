<?php namespace App\Http\Controllers\App;
/**
 * @copyright Copyright (c) 2023 Notsoweb (https://notsoweb.com) - All rights reserved.
 */

use Notsoweb\Core\Http\Controllers\VueController;

/**
 * Servicios
 * 
 * @author Moisés de Jesús Cortés Castellanos <ing.moisesdejesuscortesc@notsoweb.com>
 * 
 * @version 1.0.0
 */
class ServiceController extends VueController
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->vueRoot('app.services');
    }

    /**
     * Lista de servicios
     */
    public function index()
    {
        return $this->vuew('index');
    }
}
