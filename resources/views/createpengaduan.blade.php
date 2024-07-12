@extends('main')
@section('navbar')

<body style="background-image: url(img/bg_session.png);">
    


<div class="container pt-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px; ">
                    <h6 class="section-title bg-white text-center px-3" style="color: #8C0C14;"> Pusat Pengaduan</h6>
                </div>
            </div>
        </div>

<div class="container p-5">

    <div class="card shadow p-3 ">
        <div class="row">
            
        <form>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Judul</label>
                <div class="col-md-10">
                    <input id="subjek" type="text" class="form-control" name="subjek" placeholder="Masukkan Judul Pengaduan">
                </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Isi Pengaduan</label>
                <div class="col-md-10">
                    <textarea id="isi" type="text" class="form-control textarea" name="isi" placeholder="Apa yang ingin anda adukan?"></textarea>
                </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Attachment</label>
                <div class="col-md-10">
                    <input id="attachment" type="file" class="form-control" name="attachment">
                </div>
        </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button id="submitBtn" type="submit" class="btn btn-md btn-primary" style="background-color: #8C0C14; border:none">adukan</button>
                <button type="cancel" class="btn btn-md btn-warning">Cancel</button>
            </div>
    </form>

        </div>
    </div>
</div>

<!-- Menyertakan SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <!-- Menyertakan jQuery (opsional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Menyertakan Bootstrap JS (opsional) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        document.getElementById('submitBtn').addEventListener('click', function() {
            // Ambil nilai dari form
            var subjek = document.getElementById('subjek').value;
            var isi = document.getElementById('isi').value;
            var attachment = document.getElementById('attachment').value;

            // Validasi form
            if (!subjek || !isi || !attachment) {
                Swal.fire({
                    title: 'Error!',
                    text: 'Semua field harus diisi!',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            } else {
                // Jika validasi berhasil
                Swal.fire({
                    title: 'Berhasil!',
                    text: 'Pengaduan berhasil dikirim',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
            }
        });
    </script>

</body>

@endsection