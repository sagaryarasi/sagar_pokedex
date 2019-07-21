<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCapturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('captures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_name');
            $table->string('user_mail');
            $table->string('poke_name');
            $table->string('poke_types');
            $table->string('poke_height');
            $table->string('poke_weight');
            $table->string('poke_abilities');
            $table->string('poke_egg_groups');
            $table->string('poke_stats');
            $table->string('poke_genus');
            $table->string('poke_description');
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
        Schema::dropIfExists('captures');
    }
}
