<?php namespace App\Http\Controllers\App;
/**
 * @copyright Copyright (c) 2023 Notsoweb (https://notsoweb.com) - All rights reserved.
 */

use Illuminate\Http\Request;
use Notsoweb\Core\Http\Controllers\VueController;

/**
 * Descripción
 * 
 * @author Moisés de Jesús Cortés Castellanos <ing.moisesdejesuscortesc@notsoweb.com>
 * 
 * @version 1.0.0
 */
class DonationController extends VueController
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->vueRoot('app.donation');
    }

    /**
     * Inicio
     */
    public function index()
    {
        return $this->vuew('index');
    }
}
