@extends('main')

@section('navbar')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

    <title>UKPBJ Banyuwangi</title>

    <style>
    </style>
  </head>

  <body style="background-image: url(img/bg_session.png);">

        <!-- Carousel Start -->
        <div class="container-fluid p-0  mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                    <img class="img-fluid" src="img/Banner 1.png" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2">
                    <img class="img-fluid" src="img/Banner 2.png" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3">
                    <img class="img-fluid" src="img/Banner 3.png" alt="Image">
                </button>
            </div>

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img class="w-100" src="img/Banner 1.png" alt="Image">
                </div>

                <div class="carousel-item">
                    <img class="w-100" src="img/Banner 2.png" alt="Image">
                </div>

                <div class="carousel-item">
                    <img class="w-100" src="img/Banner 3.png" alt="Image">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Data Paket Pengadaan Barang Dan Jasa Start -->
    <div class="container py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px; ">
                <h6 class="section-title bg-white text-center px-3" style="color: #8C0C14;" >Data Paket Pengadaan Barang Dan Jasa</h6>
            </div>
            <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="/tender">
                        <img class="img-fluid rounded mb-4" src="img/1.png" alt="">
                        <h4> Tender </h4>
                    </a>

                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="/NonTender">
                        <img class="img-fluid rounded mb-4" src="img/2.png" alt="">
                        <h4>Non Tender</h4>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="/purchasing">
                        <img class="img-fluid rounded mb-4" src="img/3.png" alt="">
                        <h4 class="mb-0">E - Purchasing</h4>
                      </a>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="img/4.png" alt="">
                        <h4 class="mb-0">Pencatatan</h4>
                      </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->

     <!-- Pengumuman Start -->
     <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center px-3" style="color: #8C0C14;" >Pengumuman</h6>
            </div>
            
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item bg-light rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="img/icon-pengumuman.png" alt="">
                        <div class="ms-4">

                            <a href="/DetailPengumuman">
                                <h5 class="mb-1">Client Name</h5>
                            </a>
                            
                            <span>Himbauan Penyesuaian Status Kualifikasi 
                                    Usaha di SIKAP dan Katalog Elektronik</span>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item bg-light rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="img/icon-pengumuman.png" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Himbauan Penyesuaian Status Kualifikasi 
                                Usaha di SIKAP dan Katalog Elektronik</span>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item bg-light rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="img/icon-pengumuman.png" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Himbauan Penyesuaian Status Kualifikasi 
                                Usaha di SIKAP dan Katalog Elektronik</span>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item bg-light rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="img/icon-pengumuman.png" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Himbauan Penyesuaian Status Kualifikasi 
                                Usaha di SIKAP dan Katalog Elektronik</span>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Pengumuman End -->

        <!-- Berita Start -->
        <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center px-3" style="color: #8C0C14" >Berita</h6>
            </div>

            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="project-item border rounded p-4" data-dot="01">
                    <div class="position-relative mb-4">
                            <img class="img-fluid rounded" src="img/Gambar 2.jpeg" alt="">
                            <a href="/DetailBerita"></a>
                    </div>
                        <h6>Kunjungan Kerja Kabupaten Bondowoso</h6>
                    <span>Pada tanggal 17 maret 2023 Bagian Pengadaan Barang dan Jasa setda Kab.Banyuwangi menerima kunjungan dari Kabupaten Wonosobo </span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="02">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="img/Gambar 2.jpeg" alt="">
                        <a href="img/project-2.jpg" data-lightbox="project"></i></a>
                    </div>
                    <h6>Kunjungan Kerja Kabupaten Jember</h6>
                    <span>Pada tanggal 17 april 2022 Bagian Pengadaan Barang dan Jasa setda Kab.Banyuwangi menerima kunjungan dari Kabupaten Blitar</span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="03">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="img/Gambar 2.jpeg" alt="">
                        <a href="img/project-2.jpg" data-lightbox="project"></i></a>
                    </div>
                    <h6>Kunjungan Kerja Kabupaten Malang </h6>
                    <span>Pada tanggal 17 Januari 2023 Bagian Pengadaan Barang dan Jasa setda Kab.Banyuwangi menerima kunjungan dari Kabupaten Malang</span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="04">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="img/Gambar 2.jpeg" alt="">
                        <a href="img/project-4.jpg" data-lightbox="project"></i></a>
                    </div>
                    <h6>Kunjungan Kerja Kabupaten Bojonegoro</h6>
                    <span>Pada tanggal 17 oktober 2023 Bagian Pengadaan Barang dan Jasa setda Kab.Banyuwangi menerima kunjungan dari Kabupaten Bojonegoro</span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="05">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="img/Gambar 2.jpeg" alt="">
                        <a href="img/project-5.jpg" data-lightbox="project"></i></a>
                    </div>
                    <h6>Kunjungan Kerja Kabupaten Lumajang</h6>
                    <span>Pada tanggal 17 september 2023 Bagian Pengadaan Barang dan Jasa setda Kab.Banyuwangi menerima kunjungan dari Kabupaten Lumajang</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Berita End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="js/app.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="js/main.js"></script>
    
  </body>
</html>
@endsection