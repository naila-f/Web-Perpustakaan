
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
            <h1 class="m-0">Data Majalah</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="hal-admin">Beranda</a></li>
              <li class="breadcrumb-item active">Majalah</li>
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
          <h3> Edit Data Majalah </h3>
          </div>
          <div class="card-body">
            <form action="{{ url('update-majalah', $maj->id_majalah)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="inputid_majalah" class="col-sm-2 col-form-label">Id Majalah</label>
                    <input type="id" id="id_majalah" name="id_majalah" class="form-control @error ('id_majalah') is-invalid @enderror" placeholder="id_majalah" value="{{ $maj->id_majalah }}">
                    @error('id_majalah')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
            @enderror
                </div>
                <div class="form-group">
                    <label for="inputnama" class="col-sm-2 col-form-label">Nama Majalah</label>
                    <input type="text" id="nama" name="nama" class="form-control @error ('nama') is-invalid @enderror" placeholder="nama" value="{{ $maj->nama }}">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
            @enderror
                </div>
                <div class="form-group">
                    <label for="inputtahun_terbit" class="col-sm-2 col-form-label">Tahun Terbit</label>
                    <input type="text" id="tahun_terbit" name="tahun_terbit" class="form-control @error ('tahun_terbit') is-invalid @enderror" placeholder="tahun_terbit" value="{{ $maj->tahun_terbit }}">
                    @error('tahun_terbit')
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
