<?php namespace App\Models;
/**
 * @copyright Copyright (c) 2023 Notsoweb (https://notsoweb.com) - All rights reserved.
 */

use App\Http\Traits\ModelExtend;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Clientes
 * 
 * @author Moisés de Jesús Cortés Castellanos <ing.moisesdejesuscortesc@notsoweb.com>
 * 
 * @version 1.0.0
 */
class Client extends Model
{
    use HasFactory,
        ModelExtend;

    /**
     * Atributos llenables masivamente
     */
    protected $fillable = [
        'name',
        'description',
        'image_path'
    ];
}
