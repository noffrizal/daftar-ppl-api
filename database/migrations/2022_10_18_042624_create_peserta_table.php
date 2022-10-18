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
        Schema::create('peserta', function (Blueprint $table) {
            $table->id('nim');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->unsignedBigInteger('prov');
            $table->unsignedBigInteger('kab');
            $table->unsignedBigInteger('kec');
            $table->unsignedBigInteger('desa');
            $table->string('no_hp');
            $table->unsignedBigInteger('id_fak');
            $table->unsignedBigInteger('id_prodi');
            $table->integer('semester');
            $table->integer('unit');
            $table->string('status');
            $table->unsignedBigInteger('lokasi1');
            $table->unsignedBigInteger('lokasi2');
            $table->string('pilihan_lainnya');
            $table->string('foto');
            $table->string('ukt');
            $table->string('transkrip');
            $table->string('surat_ppl');
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
        Schema::dropIfExists('peserta');
    }
};
