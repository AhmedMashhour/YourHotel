<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $table='payment';
    protected $fillable=[
       'id',
       'firstName',
       'titel',
       'lastName',
       'typeOfBed',
       'numberOfRoom',
       'wantedAt',
       'leftAt',
       'ttot',
       'fintot',
       'mepr',
       'meal',
       'btot',
       'numberOfDays',
       'roomType'

    ];
}
