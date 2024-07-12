@extends('main')
@section('navbar')

<body style="background-image: url(img/bg_session.png);">
    

<div class="container">
            <div class="container pt-5">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px; ">
                    <h6 class="section-title bg-white text-center px-3" style="color: #8C0C14;">Konsultasi</h6>
                </div>
            </div>
        </div>

        <div class="container-fluid p-5">
            <div class="card table-responsive shadow p-5" style="border: none">
                <div class="row">
                    <div class="col-lg-3">
                        <a href="/createkonsultasi" type="button" class="btn btn-primary mb-3"
                            style="background-color: #8C0C14; border:none;">Buat Konsultasi Baru</a>
                    </div>
                    <div class="col-lg-9 d-grid gap-2 d-md-flex justify-content-md-end">
                        <p>User</p>
                        <a href="#" target="_blank">
                            <img src="/img/profil.png" class="circle mx-auto"
                                style="width: 30px; height:30px; border-radius: 50%; object-fit: cover"></a>
                    </div>
                    <table class="table" style="width:100%;">
                        <thead class="table">
                            <tr>
                                <th>No</th>
                                <th>Subjek</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table">
                                        <tr>
                                            <td>1</td>
                                            <td>E-katalog</td>
                                            <td>2024-06-24</td>
                                            <td>
                                                <span class="badge rounded-pill bg-primary text-light">terkirim</span>
                                            </td>
                                            <td>
                                            <a href="#" class="btn btn-sm btn-warning text-dark">Edit</a>
                                            <a href="#" class="btn btn-sm btn-danger text-dark" >Hapus</a>
                                            </td>
                                        </tr>
                                    </tbody>
                    </table>
                </div>
            </div>
        </div>

</body>
@endsection