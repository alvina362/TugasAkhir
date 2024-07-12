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
        Schema::create('tenders', function (Blueprint $table) {
            $table->id();
            $table->year('tahun_anggaran');
            $table->string('kd_klpd');
            $table->string('nama_klpd');
            $table->string('jenis_klpd');
            $table->string('kd_satker');
            $table->string('kd_satker_str');
            $table->string('nama_satker')->nullable();
            $table->integer('kd_lpse');
            $table->string('nama_lpse');
            $table->integer('kd_tender');
            $table->integer('kd_pkt_dce');
            $table->string('kd_rup');
            $table->string('nama_paket');
            $table->float('pagu');
            $table->float('hps');
            $table->string('sumber_dana');
            $table->string('mak');
            $table->string('kualifikasi_paket');
            $table->string('jenis_pengadaan');
            $table->string('mtd_pemilihan');
            $table->string('mtd_evaluasi');
            $table->string('mtd_kualifikasi');
            $table->string('kontrak_pembayaran');
            $table->string('status_tender');
            $table->dateTime('tgl_pengumuman_tender');
            $table->dateTime('tgl_penetapan_pemenang');
            $table->string('url_lpse');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenders');
    }
};
