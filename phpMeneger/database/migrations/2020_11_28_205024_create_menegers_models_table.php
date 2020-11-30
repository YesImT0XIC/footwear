<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenegersModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menegers_models', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('html');
            $table->boolean('css');
            $table->boolean('php');
            $table->boolean('javascript');
            $table->boolean('aspnet');
            $table->integer('htmlCount');
            $table->integer('cssCount');
            $table->integer('phpCount');
            $table->integer('javascriptCount');
            $table->integer('aspnetCount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menegers_models');
    }
}
