<?php namespace App\Models;
/**
 * @copyright Copyright (c) 2023 Notsoweb (https://notsoweb.com) - All rights reserved.
 */

use App\Http\Traits\ModelExtend;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Banners
 * 
 * @author Moisés de Jesús Cortés Castellanos <ing.moisesdejesuscortesc@notsoweb.com>
 * 
 * @version 1.0.0
 */
class Banner extends Model
{
    use HasFactory,
        ModelExtend;

    /**
     * Atributos llenables masivamente
     */
    protected $fillable = [
        'name',
        'image_path'
    ];
}
