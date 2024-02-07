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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nis',8)->unique();
            $table->string('name');
            $table->enum('kelas',[
                '10RPL1', '10RPL2', '11RPL1', '11RPL2', '12RPL1', '12RPL2',
                '10TKJ1', '10TKJ2', '11TKJ1', '11TKJ2', '12TKJ1', '12TKJ2',
                '10BDP1', '10BDP2', '10BDP3', '10BDP4', '10BDP5', '11BDP1', '11BDP2', '11BDP3', '11BDP4', '11BDP5', '12BDP1', '12BDP2', '12BDP3', '12BDP4', '12BDP5',
                '10DG1','10DG2','11DG1','11DG2','12DG1','12DG2',
                '10TL1','11TL1','12TL1',
                '10TB1','11TB1','12TB1',
                '10TBSM1','10TBSM2','11TBSM1','11TBSM2','12TBSM1','12TBSM2',
                '10TPM1','10TPM2','11TPM1','11TPM2','12TPM1','12TPM2',
                '10OTKP1', '10OTKP2', '10OTKP3', '10OTKP4','11OTKP1', '11OTKP2', '11OTKP3', '11OTKP4','12OTKP1', '12OTKP2', '12OTKP3', '12OTKP4',
                '10AKL1','10AKL2','10AKL3', '11AKL1','11AKL2','11AKL3', '12AKL1','12AKL2','12AKL3'
            ]);
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
        Schema::dropIfExists('siswa');

    }
};
