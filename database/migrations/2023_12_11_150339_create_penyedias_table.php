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
        Schema::create('penyedias', function (Blueprint $table) {
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
            $table->string('kd_metode_pengadaan');
            $table->string('metode_pengadaan');
            $table->integer('kd_jenis_pengadaan');
            $table->string('jenis_pengadaan');
            $table->string('status_pradipa');
            $table->string('status_pdn');
            $table->string('status_ukm');
            $table->string('alasan_non_ukm');
            $table->string('status_konsolidasi');
            $table->string('tipe_paket');
            $table->string('kd_rup_swakelola');
            $table->string('kd_rup_lokal');
            $table->string('volume_pekerjaan');
            $table->string('urarian_pekerjaan');
            $table->string('spesifikasi_pekerjaan');
            $table->dateTime('tgl_awal_pemilihan');
            $table->dateTime('tgl_akhir_pemilihan');
            $table->dateTime('tgl_awal_kontrak');
            $table->dateTime('tgl_akhir_kontrak');
            $table->dateTime('tgl_awal_pemanfaatan');
            $table->dateTime('tgl_akhir_pemanfaatan');
            $table->dateTime('tgl_buat_paket');
            $table->dateTime('tgl_pengumuman_paket');
            $table->string('nip_ppk');
            $table->string('nama_ppk');
            $table->string('username_ppk');
            $table->string('status_aktif_rup');
            $table->string('status_delete_rup');
            $table->string('status_umumkan_rup');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyedias');
    }
};
