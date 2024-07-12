@extends ('main')

@section('navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-image: url(img/bg_session.png);">

<div class="container py-5">
        <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px; ">
                <h6 class="section-title bg-white text-center px-3" style="color: #8C0C14;" >Kontak</h6>
            </div>
        </div>
    </div>

<div class="container py-2">
        <div class="row g-5">
            <!-- <h1 class="col-lg-6 col-md-12 py-2 ">Hubungi Kami</h1>   -->
            <div class="col-lg-6 col-md-12 py-2">
                <h1 class="py-3">Hubungi kami </h1>

                <form>

                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputPassword">
                    </div>
                </div>

                <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">No Telp</label>
                    <div class="col-sm-10">
                        <input type="telepon" class="form-control" id="inputPassword">
                    </div>
                </div>

                <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Pesan</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary me-md-2" type="button">Kirim</button>
  
                </div>

                </form>

            </div>


            <div class="col-lg-6 col-md-12 py-2" style="text-align: justify; color:black;" >
                <img src="img/UKPBJ Logo.png" alt="ukpbj" width="250">
                <p> Bagian Pengadaan Barang dan Jasa <br/> Sekretariat Daerah Kabupaten Banyuwangi <br />
                <br />
                Jalan Jenderal A. Yani No. 100 Banyuwangi 68411 <br />
                Call Center : ( 0333 ) 425001 - 425011 Faks (0333) 428500 <br />
                Email : ukpbj.banyuwangi@gmail.com <br /> </p>
           
            </div> 
            
        </div>
        <hr />

        <div class="row g-5">
        <iframe src="https://www.google.com/maps/embed?pb=
            !1m18!1m12!1m3!1d3948.803383814441!2d114.36512447392842!3d-8.
            22251808252653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!
            1s0x2dd145328fce924d%3A0xcfcff0a1438f2ac9!2sJl.%20Jenderal%20Ahmad%20Yani%2C%20Taman%20Baru%2C%20Kec.
            %20Banyuwangi%2C%20Kabupaten%20Banyuwangi%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!
            4v1696921924984!5m2!1sid!2sid" 
            height="400" style="border:0;" allowfullscreen="" loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
</div>


    
</body>
</html>
@endsection