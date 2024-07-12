@extends ('main')

@section ('navbar')
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
    <div class="container py-5">
        <div class="center">
            <iframe class="text-center" src="dokumen/berita.pdf" width="1000" height="800"></iframe>
        </div>
    </div>
    
</body>
</html>
@endsection
