
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Buku</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="beranda">Beranda</a></li>
              <li class="breadcrumb-item active">Buku</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class=" card card-info card-outline">
          <div class="card-header">
          <h3> Tambah Data Buku </h3>
          </div>
          <div class="card-body">
            <form action="{{ route('simpan-buku') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="inputkodebuku" class="col-sm-2 col-form-label">Kode Buku</label>
                    <input type="text" id="kode_buku" name="kode_buku" class="form-control @error ('kode_buku') is-invalid @enderror" placeholder="Kode Buku">
                    @error('kode_buku')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputjudul" class="col-sm-2 col-form-label">Judul</label>
                    <input type="text" id="judul" name="judul" class="form-control @error ('judul') is-invalid @enderror" placeholder="Judul">
                    @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputtahunterbit" class="col-sm-2 col-form-label">Tahun Terbit</label>
                    <input type="text" id="tahun_terbit" name="tahun_terbit" class="form-control @error ('tahun_terbit') is-invalid @enderror" placeholder="Tahun Terbit">
                    @error('tahun_terbit')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputpenulis" class="col-sm-2 col-form-label">Penulis</label>
                    <input type="text" id="penulis" name="penulis" class="form-control @error ('penulis') is-invalid @enderror" placeholder="Penulis">
                    @error('penulis')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputpenerbit" class="col-sm-2 col-form-label">Penerbit</label>
                    <input type="text" id="penerbit" name="penerbit" class="form-control @error ('penerbit') is-invalid @enderror" placeholder="Penerbit">
                    @error('penerbit')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
          </div>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Main Footer -->
  @include('Template.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

@include('Template.script')
</body>
</html>
