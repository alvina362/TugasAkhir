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
<body style="background-image: url(img/bg_session.png);">
    <div class="container py-5">
        <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px; ">
                <h6 class="section-title bg-white text-center px-3" style="color: #8C0C14;" > E - Purchasing</h6>
            </div>
        </div>
    </div>

    <div class="container">
            <div class="row mb-4">

                <div class="col">
                    <div class="card shadow p-3 text-center" style="border: none">
                        <a href="/materi">
                            <h4>Jumlah Paket</h4>
                            <p class="text-dark">85 Paket</p>
                        </a>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow p-3 text-center" style="border: none">
                        <a href="/sdp">
                            <h4>Total Pagu</h4>
                            <p class="text-dark">52.941.071.360</p>
                        </a>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow p-3 text-center" style="border: none">
                        <a href="/sdp">
                            <h4>Total HPS</h4>
                            <p class="text-dark">52.459.828.421</p>
                        </a> 
                    </div>
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
                            <th>Nama Satuan Kerja</th>
                            <th>Nama Paket</th>
                            <th>Jumlah Jenis Produk</th>
                            <th>Total Harga</th>
                        </tr>
                    </thead>
                    <tbody class="table">
                        <tr >
                            <td>1</td>
                            <td>SETWAN</td>
                            <td>Belanja Alat/Bahan untuk Kegiatan Kantor- Suvenir/Cendera Mata</td>
                            <td>1</td>
                            <td>51.750.000</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>DPUTARU</td>
                            <td>Pengadaan Aspal Pemeliharaan Rutin Jalan Tahap I</td>
                            <td>1</td>
                            <td>709.080.000</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>DPUTARU</td>
                            <td>Pengadaan Material Pemeliharaan Rutin Jalan (Hotmix)</td>
                            <td>1</td>
                            <td>233.750.000</td>
                   
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>DPUTARU</td>
                            <td>Pengadaan Aspal Pemeliharaan Rutin Jalan Tahap I</td>
                            <td>1</td>
                            <td>709.080.000</td>
                        
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>DPUTARU </td>
                            <td>Pengadaan Material Pemeliharaan Rutin Jalan (Hotmix)</td>
                            <td>1</td>
                            <td>233.750.000</td>
                 
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