<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRawatInapsTable extends Migration
{
    public function up()
    {
        Schema::create('rawat_inaps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kamar_id')->constrained();
            $table->foreignId('pasien_id')->constrained();
            $table->dateTime('tanggal_masuk');
            $table->dateTime('tanggal_keluar')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rawat_inaps');
    }
}
