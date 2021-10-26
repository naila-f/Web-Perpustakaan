<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Perpustakaan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assetss/img/favicon.png" rel="icon">
  <link href="assetss/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assetss/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assetss/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assetss/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assetss/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assetss/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assetss/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assetss/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assetss/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">PERPUSTAKAAN</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
        <li><a href="home" class="">Home</a></li>
          <li class="dropdown"><a href="#"><span>Koleksi</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Buku</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Kelas 10</a></li>
                  <li><a href="#">Kelas 11</a></li>
                  <li><a href="#">Kelas 12</a></li>
                </ul>
              </li>
              <li><a href="kamus">Kamus</a></li>
              <li><a href="majalah">Majalah</a></li>
              <li class="dropdown"><a href="#"><span>Modul</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="mk_10">Kelas 10</a></li>
                  <li><a href="mk_11">Kelas 11</a></li>
                  <li><a href="#">Kelas 12</a></li>
                </ul>
              <li><a href="novel">Novel</a></li>
            </ul>
          </li>

          <li><a href="services.html">Pencarian</a></li>
          <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="pengurus">Pengurus</a></li>
              <li><a href="visidanmisi">Visi dan Misi</a></li>
            </ul>
          </li>
          <li><a href="galeri">Galeri</a></li>
          <li><a href="blog.html">Survey</a></li>
          <li><a href="contact.html">Kontak Kami</a></li>
          <li><a href="{{ route('logout') }}"  class="getstarted">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->
  @yield('header2')
