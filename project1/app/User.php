<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{

    use Notifiable;

    protected $fillable = [
        'username','password',
    ];

    protected $hidden = [
        'password'
    ];
}


