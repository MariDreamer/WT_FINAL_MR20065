<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReplypostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('replyposts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('rp_id')->unique();            
            $table->foreignId('vp_id');
            $table->foreignId('usernamne');
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
        Schema::dropIfExists('replyposts');
    }
}