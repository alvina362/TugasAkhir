@extends ('main')

@section ('navbar')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--Bootstrap icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


</head>

<style>
    .table {
        text-decoration-color: black;
    }
</style>
<body style="background-image: url(img/bg_session.png); ">

    <div class="container py-5">
        <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px; ">
                <h6 class="section-title bg-white text-center px-3" style="color: #8C0C14;" > RUP Penyedia</h6>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card px-5 py-5 shadow-lg ">
            <div class="row">
                <table id="example" class="table" style="width:100%">
                    <thead class="table">
                        <tr>
                            <th>No</th>
                            <th>Kode RUP</th>
                            <th>Nama Paket</th>
                            <th>Satuan Kerja</th>
                            <th>Pagu RUP</th>
                            <th>Metode Pemilhan</th>
                            <th>Status Umumkan</th>
                        </tr>
                    </thead>
                    <tbody class="table">

                        @php
                            $no = 1;
                        @endphp

                        @foreach ($penyedias as $item)
                        <tr >
                            <td>{{  $no++     }}</td>
                            <td>{{  $item->kd_rup    }}</td>
                            <td>{{  $item->nama_paket    }}</td>
                            <td>{{  $item->kd_satker     }}</td>
                            <td>{{  $item->pagu }}</td>
                            <td>{{  $item->metode_pengadaan   }}</td>
                            <td>{{  $item->status_umumkan_rup    }}</td>
                        </tr>
                        @endforeach

                        <!-- <tr>
                            <td>2</td>
                            <td>DPUTARU</td>
                            <td>Pengadaan Aspal Pemeliharaan Rutin Jalan Tahap I</td>
                            <td>1</td>
                            <td>709.080.000</td>
                            <td>51.750.000</td>
                            <td>51.750.000</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>DPUTARU</td>
                            <td>Pengadaan Material Pemeliharaan Rutin Jalan (Hotmix)</td>
                            <td>1</td>
                            <td>233.750.000</td>
                            <td>51.750.000</td>
                            <td>51.750.000</td>
                   
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>DPUTARU</td>
                            <td>Pengadaan Aspal Pemeliharaan Rutin Jalan Tahap I</td>
                            <td>1</td>
                            <td>709.080.000</td>
                            <td>51.750.000</td>
                            <td>51.750.000</td>
                        
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>DPUTARU </td>
                            <td>Pengadaan Material Pemeliharaan Rutin Jalan (Hotmix)</td>
                            <td>1</td>
                            <td>233.750.000</td>
                            <td>51.750.000</td>
                            <td>51.750.000</td>
                 
                        </tr> -->

                    </tbody>
                </table>
            </div>
        </div>    
    </div>

    <div class="container py-5">
        <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px; ">
                <h6 class="section-title bg-white text-center px-3" style="color: #8C0C14;" > Rekap RUP Penyedia Per Satker</h6>
            </div>
        </div>
    </div>

    <div class="container ">
        <div class="card px-5 py-5 shadow-lg ">
            <div class="row">
                <table id="example1" class="table" style="width:100%">
                    <thead class="table">
                        <tr>
                            <th>Satker</th>
                            <th>Tayang(Paket)</th>
                            <th>Draf(Paket)</th>
                        </tr>
                    </thead>
                    <tbody class="table">
                        <tr >
                            <td>SETWAN</td>
                            <td>Belanja Alat/Bahan untuk Kegiatan Kantor- Suvenir/Cendera Mata</td>
                            <td>1</td>
                        </tr>

                        <tr>
                            
                            <td>DPUTARU</td>
                            <td>Pengadaan Aspal Pemeliharaan Rutin Jalan Tahap I</td>
                            <td>1</td>
                            
                        </tr>

                        <tr>
                           
                            <td>DPUTARU</td>
                            <td>Pengadaan Material Pemeliharaan Rutin Jalan (Hotmix)</td>
                            <td>1</td>
                            
                   
                        </tr>

                        <tr>
                            
                            <td>DPUTARU</td>
                            <td>Pengadaan Aspal Pemeliharaan Rutin Jalan Tahap I</td>
                            <td>1</td>
                            
                        
                        </tr>

                        <tr>
                            
                            <td>DPUTARU </td>
                            <td>Pengadaan Material Pemeliharaan Rutin Jalan (Hotmix)</td>
                            <td>1</td>
                 
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>    
    </div>


    <!--script src="https://code.jquery.com/jquery-3.4.1.min.js"></script-->
    <!--script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script-->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="js/app.js"></script>
    <!--script src="lib/wow/wow.min.js"></script-->
    <!--script src="js/main.js"></script-->
</body>  
</html>
@endsection