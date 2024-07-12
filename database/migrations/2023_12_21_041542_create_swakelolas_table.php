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
        Schema::create('swakelolas', function (Blueprint $table) {
            $table->id();
            $table->year('tahun_anggaran');
            $table->string('kd_klpd');
            $table->string('nama_klpd');
            $table->string('jenis_klpd');
            $table->string('kd_satker');
            $table->string('kd_satker_str');
            $table->string('nama_satker')->nullable();
            $table->integer('kd_rup');
            $table->string('nama_paket');
            $table->float('pagu');
            $table->char('tipe_swakelola');
            $table->string('volume_pekerjaan');
            $table->text('uraian_pekerjaan');
            $table->integer('kd_klpd_penyelenggara')->nullable();
            $table->string('nama_klpd_penyelenggara')->nullable();
            $table->string('nama_satker_penyelenggara')->nullable();
            $table->dateTime('tgl_awal_pelaksanaan_kontrak');
            $table->dateTime('tgl_akhir_pelaksanaan_kontrak');
            $table->dateTime('tgl_buat_paket');
            $table->dateTime('tgl_pengumuman_paket');
            $table->string('nip_ppk')->nullable();
            $table->string('nama_ppk')->nullable();
            $table->string('username_ppk')->nullable();
            $table->integer('kd_rup_lokal')->nullable();
            $table->boolean('status_aktif_rup');
            $table->boolean('status_delete_rup');
            $table->string('status_umumkan_rup');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('swakelolas');
    }
};
