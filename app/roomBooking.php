<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class roomBooking extends Model
{
    use Notifiable;
    protected $table='roombook';
    protected $fillable=[
       'id',
       'titel',
       'firstName',
       'lastName',
       'email',
       'national',
       'country',
       'phone',
       'roomType',
       'bed',
       'numberOfRoom',
       'Meal',
       'wantedAt',
       'leftAt',
       'numberOfDays',
       'stat'

    ];

}
