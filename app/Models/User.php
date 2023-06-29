<?php

namespace App\Models;

use App\Http\Traits\ModelExtend;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;
    use ModelExtend;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'paternal',
        'maternal',
        'phone',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'full_name',
        'full_last_name',
        'profile_photo_url',
    ];

    /**
     * Un usuario a realizado muchas acciones
     */
    public function logs()
    {
        return $this->hasMany(HistoryLog::class);
    }

    /**
     * Retorna el nombre completo del usuario
     */
    public function getFullNameAttribute()
    {
        return "{$this->name} {$this->paternal} {$this->maternal}";
    }

     /**
     * Retorna el apellido completo del usuario
     */
    public function getFullLastNameAttribute()
    {
        return "{$this->paternal} {$this->maternal}";
    }

    /**
     * Retorna el nombre completo del usuario
     */
    public function getShortNameAttribute()
    {
        return "{$this->name} {$this->paternal}";
    }
}
