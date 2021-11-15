
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
@include('Template.head')
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('Template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kontak</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="hal-admin">Beranda</a></li>
              <li class="breadcrumb-item active">Kontak</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  Kontak Kami
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                        <div class="col-lg-4">
                            <div class="info">
                              <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Lokasi:</h4>
                                <p>Jl. Gubernur Suryo No. 15
                                    Surabaya, Jawa Timur</p>
                              </div>

                              <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p> infoperpus@example.com</p>
                              </div>

                              <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>(031) 555 7774</p>
                              </div>

                            </div>

                          </div>
                    </div>
                    <div class="col-5 text-center">
                      <img src="Gambar/1.jpg" alt="user-avatar" class="img-circle img-fluid">
                      <strong> <p> Anda dapat menghubungi kami untuk informasi lebih lanjut mengenai Perpustakaan ini.</p> </strong>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <!-- /.card-body -->
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  @include('Template.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

@include('Template.script')
</body>
</html>
