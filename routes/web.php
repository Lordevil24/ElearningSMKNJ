<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\Admin\DataGuruController;
use App\Http\Controllers\Admin\DataKelasController;
use App\Http\Controllers\Admin\DataSiswaController;

use App\Http\Controllers\Guru\DashboardGuruController;
use App\Http\Controllers\Admin\AdminDashboardController;

Route::get('/tunggu_konfirmasi', function () {
    return Inertia::render('TungguKonfirmasi');
})->name('tunggu-konfirmasi');


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
    Route::get('/all-user', [AdminDashboardController::class, 'index'])->name('user');
    Route::get('/all-user/{id}', [AdminDashboardController::class, 'edit'])->name('user.edit');
    Route::put('/all-user/{id}', [AdminDashboardController::class, 'update'])->name('user.update');
    Route::delete('/all-user/{id}', [AdminDashboardController::class, 'destroy'])->name('user.destroy');


    Route::get('/guru', [DataGuruController::class, 'index'])->name('guru');
    Route::get('/guru/{id}', [DataGuruController::class, 'edit'])->name('guru.edit');
    Route::put('/guru/{id}', [DataGuruController::class, 'update'])->name('guru.update');
    Route::delete('/guru/{id}', [DataGuruController::class, 'destroy'])->name('guru.destroy');


    Route::get('/siswa', [DataSiswaController::class, 'index'])->name('siswa');
    Route::get('/siswa/{id}', [DataSiswaController::class, 'edit'])->name('siswa.edit');
    Route::put('/siswa/{id}', [DataSiswaController::class, 'update'])->name('siswa.update');
    Route::delete('/siswa/{id}', [DataSiswaController::class, 'destroy'])->name('siswa.destroy');


    Route::get('/kelas', [DataKelasController::class, 'index'])->name('kelas');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
