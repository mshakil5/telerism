<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'is_type',
        'password',
        'is_admin',
        'address',
        'country',
        'city',
        'postal_code',
        'phone',
        'status',
        'about',
        'facebook',
        'twitter',
        'google',
        'linkedin',
        'updated_by',
        'created_by',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function role()
    // {
    //     return $this->belongsTo('App\Models\Role');
    // }

    public function staff()
    {
      return $this->hasOne('App\Models\Staff');
    }
}
