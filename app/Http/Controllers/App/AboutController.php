<?php namespace App\Http\Controllers\App;
/**
 * @copyright Copyright (c) 2023 Notsoweb (https://notsoweb.com) - All rights reserved.
 */

use Notsoweb\Core\Http\Controllers\VueController;

/**
 * La información de acerca de nosotros
 * 
 * @author Moisés de Jesús Cortés Castellanos <ing.moisesdejesuscortesc@notsoweb.com>
 * 
 * @version 1.0.0
 */
class AboutController extends VueController
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->vueRoot('app.about');
    }

    /**
     * Nosotros: Presentación
     */
    public function index()
    {
        return $this->vuew('index');
    }

    /**
     * Nosotros: Historia
     */
    public function history()
    {
        return $this->vuew('history');
    }

    /**
     * Nosotros: Misión
     */
    public function mission()
    {
        return $this->vuew('mission');
    }

    /**
     * Nosotros: Valores
     */
    public function values()
    {
        return $this->vuew('values');
    }

    /**
     * Nosotros: Entrevistas
     */
    public function review()
    {
        return $this->vuew('review');
    }
}
