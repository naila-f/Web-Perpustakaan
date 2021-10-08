<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Perpustakaan | {{$title}}</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800|Old+Standard+TT' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


<!-- bootstrap -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

<!-- uniform -->
<link type="text/css" rel="stylesheet" href="assets/uniform/css/uniform.default.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="assets/wow/animate.css" />


<!-- gallery -->
<link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">


<!-- favicon -->
<link rel="shortcut icon" href="images/1.jpg" type="image/x-icon">
<link rel="icon" href="images/1.jpg" type="image/x-icon">

<link rel="stylesheet" href="assets/style.css">

</head>

<body id="home">


<!-- top
  <form class="navbar-form navbar-left newsletter" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter Your Email Id Here">
        </div>
        <button type="submit" class="btn btn-inverse">Subscribe</button>
    </form>
 top -->

<!-- header -->
<nav class="navbar  navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="login"><img src="images/PERPUSTAKAAN.png" alt=""></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav">
        <li><a href="login">Login</a></li>

      </ul>
    </div><!-- Wnavbar-collapse -->
  </div><!-- container-fluid -->
</nav>
<!-- header -->


<!-- banner -->
<div class="banner">
    <img src="images/7.png"  class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1  class="animated fadeInDown"><strong> <center> WELCOME TO THE LIBRARY </center></strong></h1>
                {{-- <p style="text-indent: 80px; font-family: 'Times New Roman;'"><strong><center> WELCOME TO THE LIBRARY </center></strong></p> --}}
            </div>
            <a href="#information" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>
        </div>
    </div>
</div>
<!-- banner-->


<footer class="spacer">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <h4>Perpustakaan</h4>
                <p> Sebuah koleksi buku, modul, novel, kamus, majalah dan sebagainya.
                    Perpustakaan juga sebagai kumpulan informasi yang bersifat ilmu pengetahuan, hiburan dan lainnya.
                    Perpustakaan merupakan upaya untuk memelihara dan meningkatkan efisiensi dan efektivitas proses belajar mengajar.
                    Tujuannya yaitu untuk membantu masyarakat dalam segala umur dengan memberikan kesempatan dengan dorongan melalui
                    jasa pelayanan perpustakaan agar mereka tanggap dalam kemajuan pada berbagai lapangan ilmu pengetahuan, kehidupan sosial dan politik. </p>
            </div>

             <div class="col-sm-3">
                {{-- <h4>Quick Links</h4>
                <ul class="list-unstyled">
                    <li><a href="rooms-tariff.php">Rooms & Tariff</a></li>
                    <li><a href="introduction.php">Introduction</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="tour.php">Tour Packages</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul> --}}
            </div>
             <div class="col-sm-4 subscribe">
                {{-- <h4>Subscription</h4> --}}
                <div class="input-group">
                {{-- <input type="text" class="form-control" placeholder="Enter email id here"> --}}
                <span class="input-group-btn">
                {{-- <button class="btn btn-default" type="button">Get Notify</button> --}}
                </span>
                </div> <br> <br>
                <div class="social">
                <a href="#"><i class="fa fa-facebook-square" data-toggle="tooltip" data-placement="top" data-original-title="facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"  data-toggle="tooltip" data-placement="top" data-original-title="instragram"></i></a>
                <a href="#"><i class="fa fa-twitter-square" data-toggle="tooltip" data-placement="top" data-original-title="twitter"></i></a>
                <a href="#"><i class="fa fa-pinterest-square" data-toggle="tooltip" data-placement="top" data-original-title="pinterest"></i></a>
                <a href="#"><i class="fa fa-tumblr-square" data-toggle="tooltip" data-placement="top" data-original-title="tumblr"></i></a>
                <a href="#"><i class="fa fa-youtube-square" data-toggle="tooltip" data-placement="top" data-original-title="youtube"></i></a>
                </div>
            </div>
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->

<!--/.footer-bottom-->
</footer>

<div class="text-center copyright">Web Perpustakaan By | Kelompok 4 | PTI 2019 </a></div>

<a href="#home" class="toTop scroll"><i class="fa fa-angle-up"></i></a>




<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
<!-- The container for the modal slides -->
<div class="slides"></div>
<!-- Controls for the borderless lightbox -->
<h3 class="title">title</h3>
<a class="prev">‹</a>
<a class="next">›</a>
<a class="close">×</a>
<!-- The modal dialog, which will be used to wrap the lightbox content -->
</div>





<script src="assets/jquery.js"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>

<!-- uniform -->
<script src="assets/uniform/js/jquery.uniform.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>

<!-- jquery mobile -->
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>


<!-- custom script -->
<script src="assets/script.js"></script>


</body>
</html>






