<?php

require "Kernel.php";

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('posts', function ($table) {
    $table->increments('id');
    $table->string('title');
    $table->text('body')->unique();
    $table->integer('hit')->default(0);
    $table->rememberToken();
    $table->timestamps();
});
