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
            $table->foreignId('prov')->constrained('provinces');
            $table->foreignId('kab')->constrained('regencies');
            $table->foreignId('kec')->constrained('districts');
            $table->foreignId('desa')->constrained('villages');
            $table->string('no_hp');
            $table->foreignId('id_fak')->constrained('fakultas');
            $table->foreignId('id_prodi')->constrained('prodi');
            $table->integer('semester');
            $table->integer('unit');
            $table->string('status');
            $table->foreignId('lokasi1')->constrained('lokasi');
            $table->foreignId('lokasi2')->constrained('lokasi');
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
