@extends('main')

@section ('navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    .container {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        flex: 1 0 100%;
    }
    /*.row {
        border: 2px solid #8C0C14 ;
        
    }*/
</style>

<body style="background-image: url(img/bg_session.png);">

<div class="container py-5">
        <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px; ">
                <h6 class="section-title bg-white text-center px-3" style="color: #8C0C14;" > Detail Berita</h6>
            </div>
        </div>
    </div>

<div class="container p-1">
    
</div>

<div class="container">
    <div class="card px-5 py-5 shadow-lg">
    <div class="row">
        <center class="pb-5"><img src="/img/Gambar 2.jpeg" alt="img" style="width: 300px;" ></center> 
        <h2 class="cente" style="text-align: justify;">Himbauan Penyesuaian Status Kualifikasi Usaha di SIKAP dan Katalog Elektronik</h2>
        <p style="text-align: justify; color: black;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ullam debitis quasi libero saepe. Iusto a quibusdam ad, ipsam id odio magni provident ducimus aspernatur iure. Quas enim delectus laborum? Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium beatae, magnam nemo id fugit et sed hic optio obcaecati asperiores dolore ut corporis suscipit, doloribus totam? Laudantium eum repudiandae atque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto velit ex dolorem iure quae accusantium necessitatibus? Pariatur voluptatem tempore veniam odit doloribus eaque minima. Beatae doloremque ea recusandae voluptates labore? Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, corrupti rem. Optio sunt molestias veniam obcaecati eveniet omnis, dolore repellat reiciendis debitis cumque soluta voluptas eaque. Saepe nemo commodi fugiat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur nesciunt esse tempora saepe temporibus dolorum nostrum possimus ab veritatis ullam aliquid ipsam eligendi, praesentium quia voluptatum quisquam dolor dicta? Quisquam?</p>

    </div>
    </div>
</div>

    

</body>
</html>
@endsection