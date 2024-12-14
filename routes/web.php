<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Guru\DashboardGuruController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('SelamatDatang', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
})->name('home');

Route::get('/contact-us', function () {
    return Inertia::render('ContactUs');
})->name('contact-us');

Route::get('/our-majors', function () {
    return Inertia::render('OurMajor');
})->name('majors');

Route::get('/our-Teachers', function () {
    return Inertia::render('siswa/TeacherSmk'); 
})->name('teachers');

Route::get('/our-ekstra', function () {
    return Inertia::render('siswa/EkstrakulikulerSmk');
})->name('ekstra');

Route::get('/our-materi', function () {
    return Inertia::render('siswa/PembelajaranSmk');
})->name('materi');

Route::get('/our-class', function () {
    return Inertia::render('siswa/ClassStudent');
})->name('class');

Route::get('/our-diksusi', function () {
    return Inertia::render('siswa/FormDiskusi');
})->name('diksusi');

// Guru
// Route::middleware(['auth', 'role:guru'])->prefix('teacher')->name('teacher.')->group(function () {
//     Route::get('/', [DashboardGuruController::class, 'index'])->name('dashboard');
// });

Route::get('/Profil', function () {
    return Inertia::render('guru/ProfilGuru');
})->name('profile');

Route::get('/Mengajar', function () {
    return Inertia::render('guru/JadwalMengajar');
})->name('jadwal');

Route::get('/Materi', function () {
    return Inertia::render('guru/MateriPembelajaran');
})->name('materi');

Route::get('/InputSoal', function () {
    return Inertia::render('guru/InputUjian');
})->name('soal');


// Admin
Route::middleware(['auth', 'role:admin'])->prefix('master')->name('master.')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');
});

route::get('/DataUser', function () {
    return Inertia::render('admin/DataUser');
})->name('user');

Route::get('/DataGuru', function () {
   return Inertia::render('admin/DataGuru'); 
})->name('guru');

Route::get('/DataSiswa', function () {
    return Inertia::render('admin/DataSiswa');
})->name('siswa');

Route::get('/DataKelas', function () {
    return Inertia::render('admin/DataKelas');
})->name('kelas');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
