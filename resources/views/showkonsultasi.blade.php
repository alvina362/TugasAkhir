@extends('main')
@section('navbar')

<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detail</title>
    </head>

    <style>
        .div {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            flex: 1 0 100%;
        }
    </style>


    <body style="background-image: url(img/bg_session.png);">

        <div class="container-fluid py-4">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px; ">
                    <h6 class="section-title bg-white text-center px-3" style="color: #8C0C14;"> Detail Konsultasi</h6>
                </div>
            </div>
        </div>

        <div class="container-fluid pb-5">
            <div class="card border-0 px-5 py-5 mx-5 shadow">
                <div class="row">
                    <div class="col">
                        <small>Subjek : </small>
                        <h3 class="center" style="text-align: justify;"></h3>
                    </div>
                    <div class="col">
                        <div class="d-grid justify-content-md-end">
                            <span class="badge rounded-pill bg-primary text-light"> Terkirim</span>
                        </div> 
                    </div>
                </div>

                <hr>
                <div class="row">
                    <p style="text-align: justify; color: black;">Bagaimana cara mendaftar e-katalog? </p>
                    <p><i class="fas fa-paperclip"></i>
                            <a href="#" target="_blank"
                                style="color: #8C0C14"><small></small></a>
                    </p>
                </div>
                    <div class="d-grid gap-2 justify-content-md-end">
                        <a href="#" class="btn btn-primary px-3"
                            type="button" style="background-color: #8C0C14; border:none">Buat Balasan</a>
                    </div>
            </div>
                    <div class="card border-0 p-5 mx-5 my-3 shadow">
                        <div class="row mb-2">
                            <div class="col my-auto">
                                <h3>Pesan Balasan</h3>
                            </div>
                            <div class="col">
                                <div class="d-grid justify-content-md-end">
                                    <h6>Dibalas oleh : <b>Admin</b></h6>
                                    <small><i>Pada 2024-06-25</i></small>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <p style="text-align: justify; color: black;"></p>
                        </div>
                    </div>
        </div>
    </body>

    </html>

@endsection