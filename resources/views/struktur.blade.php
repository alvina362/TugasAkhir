@extends('main') 

@section('navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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

    

    <div class="container py-4">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px; ">
                <h6 class="section-title bg-white text-center px-3" style="color: #8C0C14;" >Struktur Organisasi</h6> 
            </div>
        </div>
    </div>
    
    <div class="center">
        <!-- <iframe class="text-center" src="dokumen/tupoksi.pdf" width="800" height="600"></iframe> -->
        <img class="img-fluid" src="img/struktur.png" alt="struktur" width="900">
    </div>

</body>
</html>
@endsection