@extends ('main')

@section ('navbar')


<style>
        .center {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            flex: 1 0 100%;
        }
</style>

<body style="background-image: url(img/bg_session.png);">

<div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px; ">
                <h6 class="section-title bg-white text-center px-3" style="color: #8C0C14;" >Konsultasi</h6> 
                
            </div>
        </div>
</div>

<div class="container-fluid py-5">
            <div class="card shadow py-5 my-3 mx-5" style="border: none">
                <div class="row px-5">
                    <div class="col-lg-6 pr-auto">
                        <img class="img-fluid" src="img/konsultasi.png" alt="konsultasi" width="500px"
                            style="float: right;">
                    </div>
                    <div class="col-lg-6 my-auto px-2">
                        <h2>Ada yang bisa kami bantu ?</h2>
                        <a href="/buatkonsultasi" class="btn btn-primary"
                            style="background-color: #8C0C14; border:none" type="button">Konsultasikan Sekarang !</a>
                    </div>
                </div>
            </div>
        </div>



</body>

@endsection