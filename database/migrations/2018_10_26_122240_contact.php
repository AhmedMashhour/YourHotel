<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { Schema::create('contact', function (Blueprint $table) {
        $table->increments('id');
        $table->string('fullName',191)->nullable();
        $table->integer('phone')->nullable();
        $table->string('email',191)->nullable();
        $table->date('cdata');
        $table->string('approval',191);
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
    Schema::dropIfExists('contact');
}
}
