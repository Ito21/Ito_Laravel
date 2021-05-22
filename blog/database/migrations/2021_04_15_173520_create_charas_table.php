<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 20);
            $table->tinyInteger('hp');
            $table->tinyInteger('atk');
            $table->tinyInteger('spd');
            $table->tinyInteger('def');
            $table->tinyInteger('res');
            $table->smallInteger('status');
            $table->tinyInteger('type_1');
            $table->tinyInteger('type_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('charas');
    }
}
