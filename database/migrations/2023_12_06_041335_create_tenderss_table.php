<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tenderss', function (Blueprint $table) {
            $table->id();
            $table->year('tahun_anggaran');
            $table->string('kd_klpd');
            $table->string('nama_klpd');
            $table->string('jenis_klpd');
            $table->string('kd_satker');
            $table->string('nama_satker');
            $table->integer('kd_lpse');
            $table->string('kd_tender');
            $table->integer('kd_paket');
            $table->string('kd_rup_paket');
            $table->float('pagu');
            $table->float('hps');
            $table->integer('nilai_penawaran');
            $table->integer('nilai_terkoreksi');
            $table->integer('nilai_negosiasi');
            $table->integer('nilai_kontrak');
            $table->dateTime('tgl_pengumuman_tender');
            $table->dateTime('tgl_penetapan_pemenang');
            $table->string('kd_penyedia');
            $table->string('nama_penyedia');
            $table->integer('npwp_penyedia');
            $table->integer('nilai_pdn_kontrak');
            $table->integer('nilai_umk_kontrak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenderss');
    }
};
