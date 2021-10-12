@extends('layouts.footer2')
@extends('layouts.header2')

@section('footer2')
@section('header2')

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assetss/img/slide/3.png)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Selamat Datang di<span> Perpustakaan</span></h2>
              <p class="animate__animated animate__fadeInUp">Berbagai macam koleksi seperti buku, kamus, majalah, novel hingga modul tersedia di Perpustakaan ini</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <br><br>
            
            <h2>PERPUSTAKAAN</h2>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
             Perpustakaan ini merupakan sebuah media online dengan berbagai macam koleksi diantaranya ada buku, majalah, novel, kamus hingga modul tersedia di web perpustakaan ini.
             Tujuan dari website ini adalah untuk membantu para siswa khususnya untuk SMA agar dapat memperoleh referensi sumber belajar. 
             Perpustakaan ini juga dapat membangun budaya literasi yang sudah mulai berkurang.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <h3>Koleksi</h3>
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <h3>Perpustakaan</h3>
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="bi bi-book"></i>
              <h4><a href="#">Buku</a></h4>
              <p>Berisi kumpulan buku mata pelajaran mulai dari kelas 10 hingga kelas 12</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-book">
              </i>
              <h4><a href="#">Kamus</a></h4>
              <p>Berisi berbagai jenis kamus yang dapat membantu para siswa untuk belajar</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-book"></i>
              <h4><a href="#">Majalah</a></h4>
              <p>Berisi Kumpulan majalah dengan berbagai edisi dan kategori yang ada seperti politik,kesehatan dan lain-lainnya</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-book"></i>
              <h4><a href="#">Modul</a></h4>
              <p>Berisi kumpulan modul mulai dari kelas 10 hingga kelas 12</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-book"></i>
              <h4><a href="#">Novel</a></h4>
              <p>Berisi kumpulan novel dari berbagai genre</p>
            </div>
          </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->
  </main><!-- End #main -->

  

@endsection
@endsection