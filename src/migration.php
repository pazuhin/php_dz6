<?php
require_once 'config.php';

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('categories', function (Blueprint $table) {
    $table->increments('id');
    $table->integer('parent_id')->unsigned()->nullable();
    $table->string('name', 100);
});

Capsule::schema()->create('products', function (Blueprint $table) {
    $table->increments('id');
    $table->integer('parent_id')->unsigned()->nullable();
    $table->string('name', 100);
});

Capsule::schema()->create('products', function (Blueprint $table) {
    $table->increments('id');
    $table->string('name', 100);
    $table->decimal('price', 15, 2);
    $table->integer('quantity')->unsigned()->default(0);
});