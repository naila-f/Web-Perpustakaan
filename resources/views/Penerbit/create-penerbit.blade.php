
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
            <h1 class="m-0">Data Penerbit</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="hal-admin">Beranda</a></li>
              <li class="breadcrumb-item active">Penerbit</li>
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
          <h3> Tambah Data Penerbit </h3>
          </div>
          <div class="card-body">
            <form action="{{ route('simpan-penerbit') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="inputid_penerbit" class="col-sm-2 col-form-label">Id Penerbit</label>
                    <input type="id" id="id_penerbit" name="id_penerbit" class="form-control @error ('id_penerbit') is-invalid @enderror" placeholder="id_penerbit">
                    @error('id_penerbit')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputnama" class="col-sm-2 col-form-label">Nama Majalah</label>
                    <input type="text" id="nama" name="nama" class="form-control @error ('nama') is-invalid @enderror" placeholder="nama">
                    @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputalamat" class="col-sm-2 col-form-label">Alamat</label>
                    <input type="text" id="alamat" name="alamat" class="form-control @error ('alamat') is-invalid @enderror" placeholder="alamat">
                    @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputno_hp" class="col-sm-2 col-form-label">No Hp</label>
                    <input type="text" id="no_hp" name="no_hp" class="form-control @error ('no_hp') is-invalid @enderror" placeholder="no_hp">
                    @error('no_hp')
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
