<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RoomBook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roomBook', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titel',191);
            $table->string('firstName',191);
            $table->string('lastName',191);
            $table->string('email',191);
            $table->string('national',191);
            $table->string('country',191);
            $table->string('phone',191);
            $table->string('roomType',191);
            $table->string('bed',191);
            $table->integer('numberOfRoom');
            $table->string('Meal',191);
            $table->date('wantedAt')->nullable();
            $table->date('leftAt')->nullable();
            $table->string('stat',191);
            $table->integer('numberOfDays');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roomBook');
    }
}
