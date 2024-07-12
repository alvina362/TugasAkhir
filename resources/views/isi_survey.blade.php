@extends ('main')

@section ('navbar')

<style>
</style>

<body style="background-image: url(img/bg_session.png);">

<div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px; ">
                <h6 class="section-title bg-white text-center px-3" style="color: #8C0C14;" >Survey Kepuasan Masyarakat</h6> 
            </div>
        </div>
</div>

<div class="container mt-5">
    <div class="card shadow p-3">
        <form id="surveyForm">
            <div class="mb-3">
                <p>1. Bagaimana pendapat saudara tentang keterbukaan persyaratan dalam pengadaan barang dan jasa?</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="openness" id="openness1" value="Kurang Baik">
                    <label class="form-check-label" for="openness1">Kurang Baik</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="openness" id="openness2" value="Cukup Baik">
                    <label class="form-check-label" for="openness2">Cukup Baik</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="openness" id="openness3" value="Baik">
                    <label class="form-check-label" for="openness3">Baik</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="openness" id="openness4" value="Sangat Baik">
                    <label class="form-check-label" for="openness4">Sangat Baik</label>
                </div>
            </div>
            
            <div class="mb-3">
                <p>2. Bagaimana pendapat saudara tentang kecepatan pelayanan pengadaan barang dan jasa?</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="speed" id="speed1" value="Kurang Baik">
                    <label class="form-check-label" for="speed1">Kurang Baik</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="speed" id="speed2" value="Cukup Baik">
                    <label class="form-check-label" for="speed2">Cukup Baik</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="speed" id="speed3" value="Baik">
                    <label class="form-check-label" for="speed3">Baik</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="speed" id="speed4" value="Sangat Baik">
                    <label class="form-check-label" for="speed4">Sangat Baik</label>
                </div>
            </div>
            
            <div class="mb-3">
                <p>3. Bagaimana pendapat saudara tentang profesionalisme petugas pengadaan barang dan jasa?</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="professionalism" id="professionalism1" value="Kurang Baik">
                    <label class="form-check-label" for="professionalism1">Kurang Baik</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="professionalism" id="professionalism2" value="Cukup Baik">
                    <label class="form-check-label" for="professionalism2">Cukup Baik</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="professionalism" id="professionalism3" value="Baik">
                    <label class="form-check-label" for="professionalism3">Baik</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="professionalism" id="professionalism4" value="Sangat Baik">
                    <label class="form-check-label" for="professionalism4">Sangat Baik</label>
                </div>
            </div>
            
            <div class="mb-3">
                <p>4. Bagaimana pendapat saudara tentang transparansi proses pengadaan barang dan jasa?</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="transparency" id="transparency1" value="Kurang Baik">
                    <label class="form-check-label" for="transparency1">Kurang Baik</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="transparency" id="transparency2" value="Cukup Baik">
                    <label class="form-check-label" for="transparency2">Cukup Baik</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="transparency" id="transparency3" value="Baik">
                    <label class="form-check-label" for="transparency3">Baik</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="transparency" id="transparency4" value="Sangat Baik">
                    <label class="form-check-label" for="transparency4">Sangat Baik</label>
                </div>
            </div>
            
            <div class="mb-3">
                <p>5. Bagaimana pendapat saudara tentang kemudahan akses informasi pengadaan barang dan jasa?</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="access" id="access1" value="Kurang Baik">
                    <label class="form-check-label" for="access1">Kurang Baik</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="access" id="access2" value="Cukup Baik">
                    <label class="form-check-label" for="access2">Cukup Baik</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="access" id="access3" value="Baik">
                    <label class="form-check-label" for="access3">Baik</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="access" id="access4" value="Sangat Baik">
                    <label class="form-check-label" for="access4">Sangat Baik</label>
                </div>
            </div>
            
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="button" class="btn btn-primary" id="submitSurvey" style="background-color: #8C0C14; border:none">Submit</button>
            </div>
        </form>
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
        document.getElementById('submitSurvey').addEventListener('click', function() {
            // Periksa apakah semua pertanyaan telah dijawab
            var isCompleted = true;
            var questions = ['openness', 'speed', 'professionalism', 'transparency', 'access'];

            for (var i = 0; i < questions.length; i++) {
                if (!document.querySelector('input[name="' + questions[i] + '"]:checked')) {
                    isCompleted = false;
                    break;
                }
            }

            // Tampilkan pesan berdasarkan validasi
            if (!isCompleted) {
                Swal.fire({
                    title: 'Error!',
                    text: 'Anda harus menjawab semua pertanyaan!',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            } else {
                // Jika validasi berhasil
                Swal.fire({
                    title: 'Terima Kasih!',
                    text: 'Jawaban Anda telah disimpan.',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
            }
        });
    </script>

</body>

@endsection