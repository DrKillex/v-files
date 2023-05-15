<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('original_title', 150);
            $table->string('title', 150)->nullable();
            $table->text('description');
            $table->string('developer', 50);
            $table->string('publisher', 50);
            $table->boolean('released')->default(true);
            $table->date('release');
            $table->float('price', 6,2)->unsigned();
            $table->tinyInteger('required_space')->unsigned();
            $table->text('genres');
            $table->boolean('singleplayer');
            $table->boolean('multiplayer');
            $table->boolean('local_multiplayer');
            $table->boolean('cross_play');
            $table->string('audio_language', 5);
            $table->string('interface_language', 5);
            $table->tinyInteger('dx_version')->unsigned();
            $table->tinyInteger('vote')->unsigned();
            $table->tinyInteger('pegi')->unsigned();
            $table->tinyInteger('ram')->unsigned();
            $table->tinyInteger('discount_value')->unsigned()->nullable();
            $table->string('realese_version', 100);
            $table->text('thumb');
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
        Schema::dropIfExists('games');
    }
};
