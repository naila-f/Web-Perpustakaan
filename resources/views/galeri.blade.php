@extends('layouts.footer2')
@extends('layouts.header2')

@section('footer2')
@section('header2')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Galeri</h2>
            <ol>
                <li><a href="index.html">Beranda</a></li>
                <li>Galeri</li>
            </ol>
        </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">Semua</li>
                    <li data-filter=".filter-app">Ruang Perpustakaan</li>
                    <li data-filter=".filter-card">Ruang Belajar</li>
                    <li data-filter=".filter-web">Ruang Komputer</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
                    <img src="images/galeri/ruang_perpus1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>App 1</h4>
                        <p>App</p>
                    <div class="portfolio-links">
                        <a href="images/galeri/ruang_perpus1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
                <img src="images/galeriruang_komputer1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                    <div class="portfolio-links">
                        <a href="images/galeri/ruang_komputer1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
                <img src="images/galeri/ruang_perpus3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                        <h4>App 2</h4>
                        <p>App</p>
                    <div class="portfolio-links">
                        <a href="images/galeri/ruang_perpus3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
                    <img src="images/galeri/ruang_belajar1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>Card 2</h4>
                    <p>Card</p>
                <div class="portfolio-links">
                    <a href="images/galeri/ruang_belajar1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
                    <img src="images/galeri/ruang_komputer2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>Web 2</h4>
                    <p>Web</p>
                <div class="portfolio-links">
                    <a href="images/galeri/ruang_komputer2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
                    <img src="images/galeri/ruang_perpus2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                        <h4>App 3</h4>
                        <p>App</p>
                    <div class="portfolio-links">
                        <a href="images/galeri/ruang_perpus2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
                    <img src="images/galeri/ruang_belajar2.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                        <h4>Card 1</h4>
                        <p>Card</p>
                    <div class="portfolio-links">
                        <a href="images/galeri/ruang_belajar2.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
                    <img src="images/galeri/ruang_belajar3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                        <h4>Card 3</h4>
                        <p>Card</p>
                    <div class="portfolio-links">
                        <a href="images/galeri/ruang_belajar3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
                    <img src="images/galeri/ruang_komputer3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                    <div class="portfolio-links">
                        <a href="images/galeri/ruang_komputer3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>
        </div>

        </div>

    </div>
    </section><!-- End Portfolio Section -->

        @endsection
    @endsection