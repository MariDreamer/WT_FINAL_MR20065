<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoicepostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voiceposts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('vp_id')->unique();
            $table->foreignId('usernamne');
            $table->foreignId('t_name');
            $table->foreignId('st_name');
            $table->string('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voiceposts');
    }
}
