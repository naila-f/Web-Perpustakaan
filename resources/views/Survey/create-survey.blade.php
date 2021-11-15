
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
            <h1 class="m-0">Data Survey</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="hal-admin">Beranda</a></li>
              <li class="breadcrumb-item active">Survey</li>
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
          <h3> Tambah Data Survey </h3>
          </div>
          <div class="card-body">
            <form action="{{ route('simpan-survey') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="inputid_survey" class="col-sm-2 col-form-label">Id Survey</label>
                    <input type="id" id="id_survey" name="id_survey" class="form-control @error ('id_survey') is-invalid @enderror" placeholder="id_survey">
                    @error('id_survey')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputpertanyaan" class="col-sm-2 col-form-label">Pertanyaan</label>
                    <input type="text" id="pertanyaan" name="pertanyaan" class="form-control @error ('pertanyaan') is-invalid @enderror" placeholder="pertanyaan">
                    @error('pertanyaan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputjawaban" class="col-sm-2 col-form-label">Jawaban</label>
                    <input type="text" id="jawaban" name="jawaban" class="form-control @error ('jawaban') is-invalid @enderror" placeholder="jawaban">
                    @error('jawaban')
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
