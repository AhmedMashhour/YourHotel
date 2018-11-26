<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Newsletterlog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { Schema::create('newsletterlog', function (Blueprint $table) {
        $table->increments('id');
        $table->string('titel',191);
        $table->string('subject',191);
        $table->string('news',191);
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('newsletterlog');
}
}
