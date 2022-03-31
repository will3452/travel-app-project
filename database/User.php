<?php

require "../bootstrap.php";


use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('users', function ($table) {
    $table->increments('id');
    $table->string('first_name');
    $table->string('middle_name');
    $table->string('last_name');
    $table->string('phone');
    $table->string('email')->unique();
    $table->string('password');
    $table->string('type');
    $table->string('manager_type')->nullable();
    $table->string('image')->nullable();
    $table->string('status')->nullable();
    $table->timestamp('subscribed_at')->nullable();
    $table->rememberToken();
    $table->timestamps();
});
