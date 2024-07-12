<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
    use HasFactory;
    public $table= 'tenders';
    protected $fillable = [
        'tahun_anggaran',
        'kd_klpd',
        'nama_klpd',
        'jenis_klpd',
        'kd_satker',
        'kd_satker_str',
        'nama_satker',
        'kd_lpse',
        'nama_lpse',
        'kd_tender',
        'kd_pkt_dce',
        'kd_rup',
        'nama_paket',
        'pagu',
        'hps',
        'sumber_dana',
        'mak',
        'kualifikasi_paket',
        'jenis_pengadaan',
        'mtd_pemilihan',
        'mtd_evaluasi',
        'mtd_kualifikasi',
        'kontrak_pembayaran',
        'status_tender',
        'tgl_pengumuman_tender',
        'tgl_penetapan_pemenang',
        'url_lpse'
    ];
};

class Tenders extends Model
{
    use HasFactory;
    public $table= 'tenders';
    protected $fillable = [
        'tahun_anggaran',
        'kd_klpd',
        'nama_klpd',
        'jenis_klpd',
        'kd_satker',
        'nama_satker',
        'kd_lpse',
        'kd_tender',
        'kd_paket',
        'kd_rup_paket',
        'pagu',
        'hps',
        'nilai_penawaran',
        'nilai_terkoreksi',
        'nilai_negosiasi',
        'nilai_kontrak',
        'tgl_pengumuman_tender',
        'tgl_penetapan_pemenang',
        'kd_penyedia',
        'nama_penyedia',
        'npwp_penyedia', 
        'nilai_pdn_kontrak',
        'nilai_umk_kontrak'
    ];
};
  