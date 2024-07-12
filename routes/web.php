<?php

use App\Http\Controllers\PenyediaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SwakelolaController;
use App\Http\Controllers\TenderController;
use App\Http\Controllers\DashboardController;
//use App\Models\Penyedia;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view ('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashvboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/profil', function () {
    return view('profil');
    
});

Route::get('/admin', function () {
    return view('admin');
    
});

Route::get('/struktur', function () {
    return view('struktur');
    
});

Route::get('/tupoksi', function () {
    return view('tupoksi');
    
});

Route::get('/pengumuman', function () {
    return view('pengumuman');
    
});

Route::get('/berita', function () {
    return view('berita');
    
});

Route::get('/DetailPengumuman', function () {
    return view('DetailPengumuman');
    
});

Route::get('/DetailBerita', function () {
    return view('DetailBerita');
});

Route::get('/tender_insert', [TenderController::class, 'display_tender'])->name('tender.insert');
Route::get('/tender', [TenderController::class, 'index'])->name('tender.index');

// Route::get('/tenders', function () {
//     return view('tenders');
    
// });

Route::get('/tenders insert', [TenderController::class, 'display_tenders'])->name('tenders.insert');
Route::get('/tenders', [TenderController::class, 'index'])->name('tenders.index');


// Route::get('/tender', function () {
//     return view('tender');
    
// });

Route::get('/NonTender', function () {
    return view('NonTender');
    
});

Route::get('/purchasing', function () {
    return view('purchasing');
    
});

// Route::get('/penyedia', function () {
//     return view('penyedia');
    
// });

Route::get('/penyedia_insert', [PenyediaController::class, 'display_penyedia'])->name('penyedia.insert');
Route::get('/penyedia', [PenyediaController::class, 'index'])->name('penyedia.index');

// Route::get('/penyedia', function () {
//     return view('penyedia');
// }) ;

Route::get('/produkhukum', function () {
    return view('produkhukum');
    
});

Route::get('/kontak', function () {
    return view('kontak');  
    
});

Route::get('/DetailProdukhukum', function () {
    return view('DetailProdukhukum');  
    
});

Route::get('/coba', function () {
    return view('coba');  
    
});

Route::get('/materi', function () {
    return view('materi');  
    
});

Route::get('/sdp', function () {
    return view('sdp');   
    
});

Route::get('/swakelola_insert', [SwakelolaController::class, 'display_swakelola'])->name('swakelola.insert');
Route::get('/swakelola', [SwakelolaController::class, 'index'])->name('swakelola.index');

// Route::get('/swakelola', function () {
//     return view('swakelola');  
    
// });

Route::get('/pengaduan', function () {
    return view('pengaduan');  
    
});

Route::get('/galeri', function () {
    return view('galeri');  
    
});

Route::get('/konsultasi', function () {
    return view('konsultasi');  
    
});

Route::get('/buatkonsultasi', function () {
    return view('buatkonsultasi');  
    
});

Route::get('/createkonsultasi', function () {
    return view('createkonsultasi');  
    
});

Route::get('/showkonsultasi', function () {
    return view('showkonsultasi');  
    
});

Route::get('/tabelpengaduan', function () {
    return view('tabelpengaduan');  
    
});

Route::get('/createpengaduan', function () {
    return view('createpengaduan');  
    
});

Route::get('/detailpengaduan', function () {
    return view('detailpengaduan');  
    
});



Route::get('/survey', function () {
    return view('survey');  
    
});

Route::get('/isi_survey', function () {
    return view('isi_survey');  
    
});

Route::get('/admin', function () {
    return view('admin.main');  
    
});

//Route::get('/admin_survey', 'SurveyController@index');

//Route::get('/admin_survey', 'App\Http\Controllers\SurveyController@index');

//Route::get('dashboard', [DashboardController::class, 'dashboard']);