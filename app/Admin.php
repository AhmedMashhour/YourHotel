<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use Notifiable;
 protected $table='admins';
 protected $fillable=[
    'name',
    'id',
    'email',
    'password'

 ];
protected $hidden=[
    'remember_token'

];



}
