<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLevelKamarsTable extends Migration
{
    public function up()
    {
        Schema::create('level_kamars', function (Blueprint $table) {
            $table->id();
            $table->string('nama_level');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('level_kamars');
    }
}
