<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SwakelolaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $swakelolas=DB::table('swakelolas')->get();
         return view('swakelola', [
             'swakelolas' => $swakelolas  
         ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function display_swakelola(Request $request)
    {
        $ta = date('Y');
        $arrContextOptions = [
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
            ],
        ];

        $url = 'https://dce.lkpp.go.id/isb-2/api/fd7a6453-4473-483b-beac-e653420cf271/json/10154/RUP-PaketSwakelola-Terumumkan/tipe/4:12/parameter/2023:D159';

        $konten = file_get_contents($url, false, stream_context_create($arrContextOptions));
        $jsonData = json_decode($konten, true);
        $finalarray = [];
        DB::table('swakelolas')->delete();
        foreach ($jsonData as $key) {
            // insert data json to table database
            $query = DB::table('swakelolas')->insert([
                'tahun_anggaran' => $key['tahun_anggaran'],
                'kd_klpd' => $key['kd_klpd'],
                'nama_klpd' => $key['nama_klpd'] ,
                'jenis_klpd' =>$key['jenis_klpd'],
                'kd_satker' => $key['kd_satker'], 
                'kd_satker_str' => $key['kd_satker_str'],
                'nama_satker' => $key['nama_satker'],
                'kd_rup' => $key['kd_rup'],
                'nama_paket' => $key['nama_paket'],
                'pagu' => $key['pagu'],
                'tipe_swakelola' => $key['tipe_swakelola'],
                'volume_pekerjaan' => $key['volume_pekerjaan'],
                'uraian_pekerjaan' => $key['uraian_pekerjaan'],
                'kd_klpd_penyelenggara' => $key['kd_klpd_penyelenggara'],
                'nama_klpd_penyelenggara' => $key['nama_klpd_penyelenggara'],
                'nama_satker_penyelenggara' => $key['nama_satker_penyelenggara'],
                'tgl_awal_pelaksanaan_kontrak' => $key['tgl_awal_pelaksanaan_kontrak'],
                'tgl_akhir_pelaksanaan_kontrak' => $key['tgl_akhir_pelaksanaan_kontrak'],
                'tgl_buat_paket' => $key['tgl_buat_paket'],
                'tgl_pengumuman_paket' => $key['tgl_pengumuman_paket'],
                'nip_ppk' => $key['nip_ppk'],
                'nama_ppk' => $key['nama_ppk'],
                'username_ppk' => $key['username_ppk'],
                'kd_rup_lokal' => $key['kd_rup_lokal'],
                'status_aktif_rup' => $key['status_aktif_rup'],
                'status_delete_rup' => $key['status_delete_rup'],
                'status_umumkan_rup' => $key['status_umumkan_rup']
            ]);
            
        }
        

        if ($query) {
            echo 'Import berhasil!';
        } else {
            echo 'Import gagal!';
        }

        return redirect('swakelola.index');

    }
}
