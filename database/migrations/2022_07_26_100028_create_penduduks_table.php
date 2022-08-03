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
        Schema::create('penduduks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('no_kk')->nullable();
            $table->string('validasi')->nullable();
            $table->string('nik')->nullable();
            $table->string('nama')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('umur')->nullable();
            $table->string('hub_keluarga')->nullable();
            $table->string('status_kawin')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('agama')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('status_pendidikan')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('dusun')->nullable();
            $table->date('tgl_nikah')->nullable();
            $table->string('no_buku_nikah')->nullable();
            $table->string('kua')->nullable();
            $table->string('akte_lahir')->nullable();
            $table->date('tgl_kematian')->nullable();
            $table->time('pukul_kematian')->nullable();
            $table->string('ket_kematian')->nullable();
            $table->string('no_bpjs')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('telepon')->nullable();
            $table->string('no_ijazah')->nullable();
            $table->string('nik_ayah')->nullable();
            $table->string('nik_ibu')->nullable();
            $table->date('tgl_cerai')->nullable();
            $table->string('no_akta_cerai')->nullable();
            $table->string('gol_darah')->nullable();
            $table->string('penyandang_cacat')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penduduks');
    }
};
