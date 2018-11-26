<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    protected $table='room';
    protected $fillable=[
       'id',
       'type',
       'bedding',
       'place',
       'cusid',


    ];
}
