<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class Users extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public $timestamps = false;
    
    public function Gender()
    {
        return $this->belongsTo('App\Models\Gender','gender_id','id');
    }

    public function Kala()
    {
        return $this->belongsToMany(Kala::class, 'basket');
    }

    public function Comment()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function Address()
    {
        return $this->hasMany('App\Models\Address');
    }
    
    public function Roles()
    {
        return $this->belongsToMany(Roles::class, 'Roles_User');
    }
    



}
