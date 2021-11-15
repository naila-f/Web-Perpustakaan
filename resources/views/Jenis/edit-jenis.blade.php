
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
            <h1 class="m-0">Data Jenis</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="beranda">Beranda</a></li>
              <li class="breadcrumb-item active">Jenis</li>
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
          <h3> Edit Data Jenis </h3>
          </div>
          <div class="card-body">
            <form action="{{ url('update-jenis', $jen->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="inputkodejenis" class="col-sm-2 col-form-label">Kode Jenis</label>
                    <input type="text" id="kode_jenis" name="kode_jenis" class="form-control @error ('kode_jenis') is-invalid @enderror" placeholder="Kode Jenis" value="{{ $jen->kode_jenis }}">
                    @error('kode_jenis')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputnamajenis" class="col-sm-2 col-form-label">Jenis</label>
                    <input type="text" id="nama_jenis" name="nama_jenis" class="form-control @error ('nama_jenis') is-invalid @enderror" placeholder="Jenis" value="{{ $jen->nama_jenis }}">
                    @error('nama_jenis')
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
