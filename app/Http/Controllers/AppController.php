<?php namespace App\Http\Controllers;
/**
 * @copyright Copyright (c) 2023 Notsoweb (https://notsoweb.com) - All rights reserved.
 */

use Notsoweb\Core\Http\Controllers\VueController;

/**
 *  Página web publica
 * 
 * @author Moisés de Jesús Cortés Castellanos <ing.moisesdejesuscortesc@notsoweb.com>
 * 
 * @version 1.0.0
 */
class AppController extends VueController
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->vueRoot('app');   
    }

    /**
     * Página web de inicio
     */
    public function index()
    {
        return $this->vuew('index');
    }

    /**
     * Contacto
     */
    public function contact()
    {
        return $this->vuew('contact');
    }
}
