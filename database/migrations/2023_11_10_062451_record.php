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
        Schema::create('record', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_obat');
            $table->unsignedBigInteger('id_siswa');
            $table->string('keluhan');
            $table->string('keterangan');
            $table->string('dosis');
            $table->enum('status',['sembuh','belum diperiksa']);
            $table->timestamps();
        
        $table->foreign('id_obat')->references('id')->on('obat');
        $table->foreign('id_siswa')->references('id')->on('siswa');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('record');

    }
};
