
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
            <h1 class="m-0">Data Pegawai</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="hal-admin">Beranda</a></li>
              <li class="breadcrumb-item active">Pegawai</li>
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
          <h3> Edit Data Pegawai </h3>
          </div>
          <div class="card-body">
            <form action="{{ url('update-pegawai', $peg->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="inputnip" class="col-sm-2 col-form-label">NIP</label>
                    <input type="text" id="nip" name="nip" class="form-control @error ('nip') is-invalid @enderror" placeholder="nip" value="{{ $peg->nip }}">
                    @error('nip')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control @error ('nama') is-invalid @enderror" placeholder="nama" value="{{ $peg->nama }}">
                    @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputjabatan" class="col-sm-2 col-form-label">Jabatan</label>
                    <input type="text" id="jabatan" name="jabatan" class="form-control @error ('jabatan') is-invalid @enderror" placeholder="jabatan" value="{{ $peg->jabatan }}">
                    @error('jabatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputjenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <input type="text" id="jabatan" name="jenis_kelamin" class="form-control @error ('jenis_kelamin') is-invalid @enderror" placeholder="jenis_kelamin" value="{{ $peg->jenis_kelamin }}">
                    @error('jenis_kelamin')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputalamat" class="col-sm-2 col-form-label">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control @error ('alamat') is-invalid @enderror" placeholder="alamat">{{ $peg->alamat }}</textarea>
                    @error('alamat')
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
