
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
            <h1 class="m-0">Data Daftar Hadir</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="hal-admin">Beranda</a></li>
              <li class="breadcrumb-item active">Daftar Hadir</li>
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
          <h3> Edit Data Daftar Hadir </h3>
          </div>
          <div class="card-body">
            <form action="{{ url('update-daftarhadir', $daf->id_hadir)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="inputid_hadir" class="col-sm-2 col-form-label">Id Hadir</label>
                    <input type="id" id="id_hadir" name="id_hadir" class="form-control @error ('id_hadir') is-invalid @enderror" placeholder="id_hadir" value="{{ $daf->id_hadir }}">
                    @error('id_hadir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputkeperluan" class="col-sm-2 col-form-label">Keperluan</label>
                    <input type="text" id="keperluan" name="keperluan" class="form-control @error ('keperluan') is-invalid @enderror" placeholder="keperluan" value="{{ $daf->keperluan }}">
                    @error('keperluan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
            @enderror
                </div>
                <div class="form-group">
                    <label for="inputtanggal_kehadiran" class="col-sm-2 col-form-label">Tanggal Kehadiran</label>
                    <input type="date" id="tanggal_kehadiran" name="tanggal_kehadiran" class="form-control @error ('tanggal_kehadiran') is-invalid @enderror" placeholder="tanggal_kehadiran" value="{{ $daf->tanggal_kehadiran }}">
                    @error('tanggal_kehadiran')
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
