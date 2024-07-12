<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Penyedia;
use app\http\controller\post;

class PenyediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $penyedias=DB::table('penyedias')->get();
         return view('penyedia', [
             'penyedias' => $penyedias  
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

    public function display_penyedia(Request $request)
    {
        $ta = date('Y');
        $arrContextOptions = [
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
            ],
        ];

        $url = 'https://dce.lkpp.go.id/isb-2/api/5bf4355b-1463-407d-9a72-554d020187fd/json/10190/RUP-PaketPenyedia-Terumumkan/tipe/4:12/parameter/2023:D159';

        $konten = file_get_contents($url, false, stream_context_create($arrContextOptions));
        $jsonData = json_decode($konten, true);
        $finalarray = [];
        DB::table('penyedias')->delete();
        foreach ($jsonData as $key) {
            // insert data json to table database
            $query = DB::table('penyedias')->insert([
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
                'kd_metode_pengadaan' => $key['kd_metode_pengadaan'],
                'metode_pengadaan' => $key['metode_pengadaan'],
                'kd_jenis_pengadaan' => $key['kd_jenis_pengadaan'],
                'jenis_pengadaan' => $key['jenis_pengadaan'],
                'status_pradipa' => $key['status_pradipa'],
                'status_pdn' => $key['status_pdn'],
                'status_ukm' => $key['status_ukm'],
                'alasan_non_ukm' => $key['alasan_non_ukm'],
                'status_konsolidasi' => $key['status_konsolidasi'],
                'tipe_paket' => $key['tipe_paket'],
                'kd_rup_swakelola' => $key['kd_rup_swakelola'],
                'kd_rup_lokal' => $key['kd_rup_lokal'],
                'volume_pekerjaan' => $key['volume_pekerjaan'],
                'urarian_pekerjaan' => $key['urarian_pekerjaan'],
                'spesifikasi_pekerjaan' => $key['spesifikasi_pekerjaan'],
                'tgl_awal_pemilihan' => $key['tgl_awal_pemilihan'],
                'tgl_akhir_pemilihan' => $key['tgl_akhir_pemilihan'],
                'tgl_awal_kontrak' => $key ['tgl_awal_kontrak'],
                'tgl_akhir_kontrak' => $key ['tgl_akhir_kontrak'],
                'tgl_awal_pemanfaatan' => $key ['tgl_awal_pemanfaatan'],
                'tgl_akhir_pemanfaatan' => $key ['tgl_akhir_pemanfaatan'],
                'tgl_buat_paket' => $key ['tgl_buat_paket'],
                'tgl_pengumuman_paket' => $key ['tgl_pengumuman_paket'],
                'nip_ppk' => $key ['nip_ppk'],
                'nama_ppk' => $key ['nama_ppk'],
                'username_ppk' => $key ['username_ppk'],
                'status_aktif_rup' => $key ['status_aktif_rup'],
                'status_delete_rup' => $key ['status_delete_rup'],
                'status_umumkan_rup' => $key ['status_umumkan_rup']
            ]);
            
        }
        

        if ($query) {
            echo 'Import berhasil!';
        } else {
            echo 'Import gagal!';
        }

        return redirect('penyedia.index');

    }
}
