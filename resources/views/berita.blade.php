@extends('layouts.footer2')
@extends('layouts.header2')

@section('footer2')
@section('header2')


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Berita</h2>
          <ol>
            <li><a href="home">Home</a></li>
            <li>Berita</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

  <!-- ======= Hero Section ======= -->

  <main id="main">

 <!-- ======= Blog Section ======= -->
 <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry">

              <div class="entry-img">
                <img src="images/berita1.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="berita1">Bantuan Fasilitas TIK untuk pengembangan pendidikan di 1.195 SMA</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="berita1"><time datetime="2021-05-11">5 Nov, 2021</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="berita1">- Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <div class="read-more">
                  <a href="berita1">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
            <article class="entry">

            <div class="entry-img">
              <img src="images/berita2.jpg" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a href="berita2">Pembaruan Aplikasi Erapor SMA Tahun 2021</a>
            </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="berita1"><time datetime="2021-10-26">26 Okt, 2021</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="berita1">- Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <div class="read-more">
                  <a href="berita2">Read More</a>
                </div>
              </div>

          </article><!-- End blog entry -->
            </div>
         </section><!-- End Blog Section -->

  </main><!-- End #main -->
  
  @endsection
@endsection