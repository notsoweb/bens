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
     * Instalaciones eléctricas
     */
    public function index()
    {
        return $this->vuew('index');
    }

    /**
     * Proyectos
     */
    public function projects()
    {
        return $this->vuew('projects');
    }

    /**
     * Gestoría
     */
    public function management()
    {
        return $this->vuew('management');
    }

    /**
     * Asesorías
     */
    public function legal()
    {
        return $this->vuew('legal');
    }

    /**
     * UVIE
     */
    public function uvie()
    {
        return $this->vuew('uvie');
    }

    /**
     * Pruebas de mantenimiento
     */
    public function maintenance()
    {
        return $this->vuew('maintenance');
    }

    /**
     * Ahorro de energía
     */
    public function savings()
    {
        return $this->vuew('savings');
    }
}
