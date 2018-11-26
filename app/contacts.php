<?php

namespace App;
use Illuminate\Notifications\Notifiable;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class contacts extends Model
{
    use Notifiable;
    protected $table='contact';
    protected $fillable=[
       'id',
       'fullName',
       'phone',
       'email',
       'cdata'

    ];

}
