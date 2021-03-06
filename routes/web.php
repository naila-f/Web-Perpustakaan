<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\KamusController;
use App\Http\Controllers\ModulController;
use App\Http\Controllers\NovelController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\MajalahController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\DaftarhadirController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\TipeController;

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
    Route::get('/buku_10', function () {
        return view('buku_10', ["title" => "Buku Kelas 11"]);
    });
    Route::get('/berita', function () {
        return view('berita', ["title" => "Berita"]);
    });
    Route::get('/berita1', function () {
        return view('berita1', ["title" => "Berita"]);
    });
    Route::get('/berita2', function () {
        return view('berita2', ["title" => "Berita"]);
    });
    Route::get('/kontak', function () {
        return view('kontak', ["title" => "Kontak"]);
    });
});


Route::get('/login-admin', [LoginAdminController::class, 'halamanlogin'])->name('login-admin');
Route::get('/registrasi-admin', [LoginAdminController::class, 'halamanregistrasi'])->name('registrasi');
Route::post('/postlogin', [LoginAdminController::class, 'postlogin'])->name('postlogin');

Route::get('/registrasi', [LoginAdminController::class, 'registrasi'])->name('registrasi');
Route::post('/simpanregistrasi', [LoginAdminController::class, 'simpanregistrasi'])->name('simpanregistrasi');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/hal-admin', [BerandaController::class, 'index'])->name('hal-admin');
    Route::get('/logout-admin', [LoginAdminController::class, 'logout'])->name('logout-admin');
    Route::get('/kontak-admin', [BerandaController::class, 'kontak_admin'])->name('kontak-admin');

    Route::get('/index-pegawai', [PegawaiController::class, 'index'])->name('index-pegawai');
Route::get('/create', [PegawaiController::class, 'create'])->name('tambah-pegawai');
Route::post('/simpan', [PegawaiController::class, 'store'])->name('simpan-pegawai');
Route::get('/edit-pegawai/{id}', [PegawaiController::class, 'edit'])->name('edit-pegawai');
Route::post('/update-pegawai/{id}', [PegawaiController::class, 'update'])->name('update-pegawai');
Route::get('/delete-pegawai/{id}', [PegawaiController::class, 'destroy'])->name('delete-pegawai');
Route::get('/cetak-pegawai', [PegawaiController::class, 'cetakPegawai'])->name('cetak-pegawai');

Route::get('/index-siswa', [SiswaController::class, 'index'])->name('index-siswa');
Route::get('/create-siswa', [SiswaController::class, 'create'])->name('tambah-siswa');
Route::post('/simpan-siswa', [SiswaController::class, 'store'])->name('simpan-siswa');
Route::get('/edit-siswa/{id}', [SiswaController::class, 'edit'])->name('edit-siswa');
Route::post('/update-siswa/{id}', [SiswaController::class, 'update'])->name('update-siswa');
Route::get('/delete-siswa/{id}', [SiswaController::class, 'destroy'])->name('delete-siswa');
Route::get('/cetak-siswa', [SiswaController::class, 'cetakSiswa'])->name('cetak-siswa');

Route::get('/index-survey', [SurveyController::class, 'index'])->name('index-survey');
Route::get('/create-survey', [SurveyController::class, 'create'])->name('tambah-survey');
Route::post('/simpan-survey', [SurveyController::class, 'store'])->name('simpan-survey');
Route::get('/edit-survey/{id}', [SurveyController::class, 'edit'])->name('edit-survey');
Route::post('/update-survey/{id}', [SurveyController::class, 'update'])->name('update-survey');
Route::get('/delete-survey/{id}', [SurveyController::class, 'destroy'])->name('delete-survey');
Route::get('/cetak-survey', [SurveyController::class, 'cetakSurvey'])->name('cetak-survey');

Route::get('/index-daftarhadir', [DaftarhadirController::class, 'index'])->name('index-daftarhadir');
Route::get('/create-daftarhadir', [DaftarhadirController::class, 'create'])->name('tambah-daftarhadir');
Route::post('/simpan-daftarhadir', [DaftarhadirController::class, 'store'])->name('simpan-daftarhadir');
Route::get('/edit-daftarhadir/{id}', [DaftarhadirController::class, 'edit'])->name('edit-daftarhadir');
Route::post('/update-daftarhadir/{id}', [DaftarhadirController::class, 'update'])->name('update-daftarhadir');
Route::get('/delete-daftarhadir/{id}', [DaftarhadirController::class, 'destroy'])->name('delete-daftarhadir');
Route::get('/cetak-daftarhadir', [DaftarhadirController::class, 'cetakDaftarhadir'])->name('cetak-daftarhadir');

Route::get('/index-majalah', [MajalahController::class, 'index'])->name('index-majalah');
Route::get('/create-majalah', [MajalahController::class, 'create'])->name('tambah-majalah');
Route::post('/simpan-majalah', [MajalahController::class, 'store'])->name('simpan-majalah');
Route::get('/edit-majalah/{id}', [MajalahController::class, 'edit'])->name('edit-majalah');
Route::post('/update-majalah/{id}', [MajalahController::class, 'update'])->name('update-majalah');
Route::get('/delete-majalah/{id}', [MajalahController::class, 'destroy'])->name('delete-majalah');
Route::get('/cetak-majalah', [MajalahController::class, 'cetakMajalah'])->name('cetak-majalah');

Route::get('/index-penulis', [PenulisController::class, 'index'])->name('index-penulis');
Route::get('/create-penulis', [PenulisController::class, 'create'])->name('tambah-penulis');
Route::post('/simpan-penulis', [PenulisController::class, 'store'])->name('simpan-penulis');
Route::get('/edit-penulis/{id}', [PenulisController::class, 'edit'])->name('edit-penulis');
Route::post('/update-penulis/{id}', [PenulisController::class, 'update'])->name('update-penulis');
Route::get('/delete-penulis/{id}', [PenulisController::class, 'destroy'])->name('delete-penulis');
Route::get('/cetak-penulis', [PenulisController::class, 'cetakPenulis'])->name('cetak-penulis');

Route::get('/index-penerbit', [PenerbitController::class, 'index'])->name('index-penerbit');
Route::get('/create-penerbit', [PenerbitController::class, 'create'])->name('tambah-penerbit');
Route::post('/simpan-penerbit', [PenerbitController::class, 'store'])->name('simpan-penerbit');
Route::get('/edit-penerbit/{id}', [PenerbitController::class, 'edit'])->name('edit-penerbit');
Route::post('/update-penerbit/{id}', [PenerbitController::class, 'update'])->name('update-penerbit');
Route::get('/delete-penerbit/{id}', [PenerbitController::class, 'destroy'])->name('delete-penerbit');
Route::get('/cetak-penerbit', [PenerbitController::class, 'cetakPenerbit'])->name('cetak-penerbit');

Route::get('/index-novel', [NovelController::class, 'index'])->name('index-novel');
Route::get('/create-novel', [NovelController::class, 'create'])->name('tambah-novel');
Route::post('/simpan-novel', [NovelController::class, 'store'])->name('simpan-novel');
Route::get('/edit-novel/{id}', [NovelController::class, 'edit'])->name('edit-novel');
Route::post('/update-novel/{id}', [NovelController::class, 'update'])->name('update-novel');
Route::get('/delete-novel/{id}', [NovelController::class, 'destroy'])->name('delete-novel');
Route::get('/cetak-novel', [NovelController::class, 'cetakNovel'])->name('cetak-novel');

Route::get('/index-modul', [ModulController::class, 'index'])->name('index-modul');
Route::get('/create-modul', [ModulController::class, 'create'])->name('tambah-modul');
Route::post('/simpan-modul', [ModulController::class, 'store'])->name('simpan-modul');
Route::get('/edit-modul/{id}', [ModulController::class, 'edit'])->name('edit-modul');
Route::post('/update-modul/{id}', [ModulController::class, 'update'])->name('update-modul');
Route::get('/delete-modul/{id}', [ModulController::class, 'destroy'])->name('delete-modul');
Route::get('/cetak-modul', [ModulController::class, 'cetakModul'])->name('cetak-modul');

Route::get('/index-kategori', [KategoriController::class, 'index'])->name('index-kategori');
Route::get('/create-kategori', [KategoriController::class, 'create'])->name('tambah-kategori');
Route::post('/simpan-kategori', [KategoriController::class, 'store'])->name('simpan-kategori');
Route::get('/edit-kategori/{id}', [KategoriController::class, 'edit'])->name('edit-kategori');
Route::post('/update-kategori/{id}', [KategoriController::class, 'update'])->name('update-kategori');
Route::get('/delete-kategori/{id}', [KategoriController::class, 'destroy'])->name('delete-kategori');
Route::get('/cetak-kategori', [KategoriController::class, 'cetakKategori'])->name('cetak-kategori');

Route::get('/index-jenis', [JenisController::class, 'index'])->name('index-jenis');
Route::get('/create-jenis', [JenisController::class, 'create'])->name('tambah-jenis');
Route::post('/simpan-jenis', [JenisController::class, 'store'])->name('simpan-jenis');
Route::get('/edit-jenis/{id}', [JenisController::class, 'edit'])->name('edit-jenis');
Route::post('/update-jenis/{id}', [JenisController::class, 'update'])->name('update-jenis');
Route::get('/delete-jenis/{id}', [JenisController::class, 'destroy'])->name('delete-jenis');
Route::get('/cetak-jenis', [JenisController::class, 'cetakJenis'])->name('cetak-jenis');

Route::get('/index-kamus', [KamusController::class, 'index'])->name('index-kamus');
Route::get('/create-kamus', [KamusController::class, 'create'])->name('tambah-kamus');
Route::post('/simpan-kamus', [KamusController::class, 'store'])->name('simpan-kamus');
Route::get('/edit-kamus/{id}', [KamusController::class, 'edit'])->name('edit-kamus');
Route::post('/update-kamus/{id}', [KamusController::class, 'update'])->name('update-kamus');
Route::get('/delete-kamus/{id}', [KamusController::class, 'destroy'])->name('delete-kamus');
Route::get('/cetak-kamus', [KamusController::class, 'cetakKamus'])->name('cetak-kamus');

Route::get('/index-berita', [BeritaController::class, 'index'])->name('index-berita');
Route::get('/create-berita', [BeritaController::class, 'create'])->name('tambah-berita');
Route::post('/simpan-berita', [BeritaController::class, 'store'])->name('simpan-berita');
Route::get('/edit-berita/{id}', [BeritaController::class, 'edit'])->name('edit-berita');
Route::post('/update-berita/{id}', [BeritaController::class, 'update'])->name('update-berita');
Route::get('/delete-berita/{id}', [BeritaController::class, 'destroy'])->name('delete-berita');
Route::get('/cetak-berita', [BeritaController::class, 'cetakBerita'])->name('cetak-berita');

Route::get('/index-buku', [BukuController::class, 'index'])->name('index-buku');
Route::get('/create-buku', [BukuController::class, 'create'])->name('tambah-buku');
Route::post('/simpan-buku', [BukuController::class, 'store'])->name('simpan-buku');
Route::get('/edit-buku/{id}', [BukuController::class, 'edit'])->name('edit-buku');
Route::post('/update-buku/{id}', [BukuController::class, 'update'])->name('update-buku');
Route::get('/delete-buku/{id}', [BukuController::class, 'destroy'])->name('delete-buku');
Route::get('/cetak-buku', [BukuController::class, 'cetakBuku'])->name('cetak-buku');

Route::get('/index-tipe', [TipeController::class, 'index'])->name('index-tipe');
Route::get('/create-tipe', [TipeController::class, 'create'])->name('tambah-tipe');
Route::post('/simpan-tipe', [TipeController::class, 'store'])->name('simpan-tipe');
Route::get('/edit-tipe/{id}', [TipeController::class, 'edit'])->name('edit-tipe');
Route::post('/update-tipe/{id}', [TipeController::class, 'update'])->name('update-tipe');
Route::get('/delete-tipe/{id}', [TipeController::class, 'destroy'])->name('delete-tipe');
Route::get('/cetak-tipe', [TipeController::class, 'cetakTipe'])->name('cetak-tipe');
});






