<?php namespace App\Http\Controllers;
/**
 * @copyright Copyright (c) 2023 Notsoweb (https://notsoweb.com) - All rights reserved.
 */

use Illuminate\Http\Request;
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
     * Nosotros: Inicio
     */
    public function aboutUs()
    {
        $this->vueRoot('app.about-us');
        return $this->vuew('index');
    }

    /**
     * Nosotros: Presentación
     */
    public function aboutUsPresentation()
    {
        $this->vueRoot('app.about-us');
        return $this->vuew('presentation');
    }

    /**
     * Nosotros: Historia
     */
    public function aboutUsHistory()
    {
        return $this->vuew('about-us.history');
    }

    /**
     * Nosotros: Misión
     */
    public function aboutUsMission()
    {
        $this->vueRoot('app.about-us');
        return $this->vuew('mission');
    }

    /**
     * Nosotros: Valores
     */
    public function aboutUsValues()
    {
        return $this->vuew('about-us.values');
    }

    /**
     * Nosotros: Entrevistas
     */
    public function aboutUsReview()
    {
        return $this->vuew('about-us.review');
    }

    /**
     * Contacto
     */
    public function contact()
    {
        return $this->vuew('contact');
    }
}
