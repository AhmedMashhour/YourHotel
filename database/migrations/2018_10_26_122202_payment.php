<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Payment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->integer('id') ;
            $table->string('titel',191);
            $table->string('firstName',191);
            $table->string('lastName',191);
            $table->string('roomType',191);
            $table->string('typeOfBed',191);
            $table->integer('numberOfRoom');
            $table->date('wantedAt')->nullable();
            $table->date('leftAt')->nullable();
            $table->double('ttot');
            $table->double('fintot');
            $table->double('mepr');
            $table->string('meal',191);
            $table->string('btot',191);
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
        Schema::dropIfExists('payment');
    }
}
