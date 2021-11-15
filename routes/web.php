<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DaftarhadirController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\MajalahController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\NovelController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/index', function () {
    return view('index', ["title" => "Index"]);
});

Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::group(['middleware' => 'auth'], function () {

    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

});

Route::get('/majalah', function () {
    return view('majalah', ["title" => "Majalah"]);
});

Route::get('/novel', function () {
    return view('novel', ["title" => "Novel"]);
});

Route::get('/pengurus', function () {
    return view('pengurus', ["title" => "Pengurus"]);
});

Route::get('/visidanmisi', function () {
    return view('visi-misi', ["title" => "Visi dan Misi"]);
});
Route::get('/kamus', function () {
    return view('kamus', ["title" => "Kamus"]);
});
Route::get('/galeri', function () {
    return view('galeri', ["title" => "Galeri"]);
});
Route::get('/mk_10', function () {
    return view('mk_10', ["title" => "Modul Kelas 10"]);
});
Route::get('/mk_11', function () {
    return view('mk_11', ["title" => "Modul Kelas 11"]);
});
Route::get('/mk_12', function () {
    return view('mk_12', ["title" => "Modul Kelas 12"]);
});
Route::get('/buku_12', function () {
    return view('buku_12', ["title" => "Buku Kelas 12"]);
});
Route::get('/buku_11', function () {
    return view('buku_11', ["title" => "Buku Kelas 11"]);
});
Route::get('/kontak', function () {
    return view('kontak', ["title" => "Kontak"]);
});


Route::get('/hal-admin', [BerandaController::class, 'index'])->name('hal-admin');

    // Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');
Route::get('/kontak-admin', [BerandaController::class, 'kontak_admin'])->name('kontak');

Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai');
Route::get('/create', [PegawaiController::class, 'create'])->name('tambah-pegawai');
Route::post('/simpan', [PegawaiController::class, 'store'])->name('simpan-pegawai');
Route::get('/edit-pegawai/{id}', [PegawaiController::class, 'edit'])->name('edit-pegawai');
Route::post('/update-pegawai/{id}', [PegawaiController::class, 'update'])->name('update-pegawai');
Route::get('/delete-pegawai/{id}', [PegawaiController::class, 'destroy'])->name('delete-pegawai');
Route::get('/cetak-pegawai', [PegawaiController::class, 'cetakPegawai'])->name('cetak-pegawai');

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');
Route::get('/create-siswa', [SiswaController::class, 'create'])->name('tambah-siswa');
Route::post('/simpan-siswa', [SiswaController::class, 'store'])->name('simpan-siswa');
Route::get('/edit-siswa/{id}', [SiswaController::class, 'edit'])->name('edit-siswa');
Route::post('/update-siswa/{id}', [SiswaController::class, 'update'])->name('update-siswa');
Route::get('/delete-siswa/{id}', [SiswaController::class, 'destroy'])->name('delete-siswa');
Route::get('/cetak-siswa', [SiswaController::class, 'cetakSiswa'])->name('cetak-siswa');

Route::get('/survey', [SurveyController::class, 'index'])->name('survey');
Route::get('/create-survey', [SurveyController::class, 'create'])->name('tambah-survey');
Route::post('/simpan-survey', [SurveyController::class, 'store'])->name('simpan-survey');
Route::get('/edit-survey/{id}', [SurveyController::class, 'edit'])->name('edit-survey');
Route::post('/update-survey/{id}', [SurveyController::class, 'update'])->name('update-survey');
Route::get('/delete-survey/{id}', [SurveyController::class, 'destroy'])->name('delete-survey');
Route::get('/cetak-survey', [SurveyController::class, 'cetakSurvey'])->name('cetak-survey');

Route::get('/daftarhadir', [DaftarhadirController::class, 'index'])->name('daftarhadir');
Route::get('/create-daftarhadir', [DaftarhadirController::class, 'create'])->name('tambah-daftarhadir');
Route::post('/simpan-daftarhadir', [DaftarhadirController::class, 'store'])->name('simpan-daftarhadir');
Route::get('/edit-daftarhadir/{id}', [DaftarhadirController::class, 'edit'])->name('edit-daftarhadir');
Route::post('/update-daftarhadir/{id}', [DaftarhadirController::class, 'update'])->name('update-daftarhadir');
Route::get('/delete-daftarhadir/{id}', [DaftarhadirController::class, 'destroy'])->name('delete-daftarhadir');
Route::get('/cetak-daftarhadir', [DaftarhadirController::class, 'cetakDaftarhadir'])->name('cetak-daftarhadir');

Route::get('/majalah', [MajalahController::class, 'index'])->name('majalah');
Route::get('/create-majalah', [MajalahController::class, 'create'])->name('tambah-majalah');
Route::post('/simpan-majalah', [MajalahController::class, 'store'])->name('simpan-majalah');
Route::get('/edit-majalah/{id}', [MajalahController::class, 'edit'])->name('edit-majalah');
Route::post('/update-majalah/{id}', [MajalahController::class, 'update'])->name('update-majalah');
Route::get('/delete-majalah/{id}', [MajalahController::class, 'destroy'])->name('delete-majalah');
Route::get('/cetak-majalah', [MajalahController::class, 'cetakMajalah'])->name('cetak-majalah');

Route::get('/penulis', [PenulisController::class, 'index'])->name('penulis');
Route::get('/create-penulis', [PenulisController::class, 'create'])->name('tambah-penulis');
Route::post('/simpan-penulis', [PenulisController::class, 'store'])->name('simpan-penulis');
Route::get('/edit-penulis/{id}', [PenulisController::class, 'edit'])->name('edit-penulis');
Route::post('/update-penulis/{id}', [PenulisController::class, 'update'])->name('update-penulis');
Route::get('/delete-penulis/{id}', [PenulisController::class, 'destroy'])->name('delete-penulis');
Route::get('/cetak-penulis', [PenulisController::class, 'cetakPenulis'])->name('cetak-penulis');

Route::get('/penerbit', [PenerbitController::class, 'index'])->name('penerbit');
Route::get('/create-penerbit', [PenerbitController::class, 'create'])->name('tambah-penerbit');
Route::post('/simpan-penerbit', [PenerbitController::class, 'store'])->name('simpan-penerbit');
Route::get('/edit-penerbit/{id}', [PenerbitController::class, 'edit'])->name('edit-penerbit');
Route::post('/update-penerbit/{id}', [PenerbitController::class, 'update'])->name('update-penerbit');
Route::get('/delete-penerbit/{id}', [PenerbitController::class, 'destroy'])->name('delete-penerbit');
Route::get('/cetak-penerbit', [PenerbitController::class, 'cetakPenerbit'])->name('cetak-penerbit');

Route::get('/novel', [NovelController::class, 'index'])->name('novel');
Route::get('/create-novel', [NovelController::class, 'create'])->name('tambah-novel');
Route::post('/simpan-novel', [NovelController::class, 'store'])->name('simpan-novel');
Route::get('/edit-novel/{id}', [NovelController::class, 'edit'])->name('edit-novel');
Route::post('/update-novel/{id}', [NovelController::class, 'update'])->name('update-novel');
Route::get('/delete-novel/{id}', [NovelController::class, 'destroy'])->name('delete-novel');
Route::get('/cetak-novel', [NovelController::class, 'cetakNovel'])->name('cetak-novel');

// Route::get('/login-admin', [LoginAdminController::class, 'halamanlogin'])->name('login');
// Route::get('/registrasi-admin', [LoginAdminController::class, 'halamanregistrasi'])->name('registrasi');
// Route::post('/postlogin', [LoginAdminController::class, 'postlogin'])->name('postlogin');
// Route::get('/logout', [LoginAdminController::class, 'logout'])->name('logout');
// Route::get('/registrasi', [LoginAdminController::class, 'registrasi'])->name('registrasi');
// Route::post('/simpanregistrasi', [LoginAdminController::class, 'simpanregistrasi'])->name('simpanregistrasi');

// Route::group(['middleware' => ['auth','ceklevel:user']], function() {
// // Route::get('home', [BerandaController::class, 'index'])->name('home');

// });

// Route::get('/home_user', [BerandaController::class, 'home_user'])->name('home_user');
