
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
            <h1 class="m-0">Data Modul</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="beranda">Beranda</a></li>
              <li class="breadcrumb-item active">Modul</li>
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
          <h3> Edit Data Modul </h3>
          </div>
          <div class="card-body">
            <form action="{{ url('update-berita', $ber->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="inputjudul" class="col-sm-2 col-form-label">Judul</label>
                    <input type="text" id="judul" name="judul" class="form-control @error ('judul') is-invalid @enderror" placeholder="Judul" value="{{ $ber->judul }}">
                    @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputauthor" class="col-sm-2 col-form-label">Author</label>
                    <input type="text" id="author" name="author" class="form-control @error ('author') is-invalid @enderror" placeholder="Author" value="{{ $ber->author }}">
                    @error('author')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputresume" class="col-sm-2 col-form-label">Ringkasan Berita</label>
                    <input type="text" id="resume" name="resume" class="form-control @error ('resume') is-invalid @enderror" placeholder="Ringkasan Berita" value="{{ $ber->resume }}">
                    @error('resume')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputpublish" class="col-sm-2 col-form-label">Publish</label>
                    <input type="text" id="publised_at" name="publised_at" class="form-control @error ('publised_at') is-invalid @enderror" placeholder="Publish" value="{{ $ber->publised_at }}">
                    @error('publised_at')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Ubah Data</button>
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
