<?php

require_once '../../vendor/autoload.php';
require_once '../kernel.php';

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('posts', function ($table) {
    $table->increments('id');
    $table->string('title');
    $table->text('body');
    $table->integer('hit')->default(0);
    $table->integer('user_id')->unsigned();
    $table->timestamps();
    $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
});
