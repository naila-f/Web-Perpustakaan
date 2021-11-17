
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
              <div class="card-tools">
                  <a href="{{ route('tambah-daftarhadir') }}" class="btn btn-success"> Tambah Data <i class="fas fa-plus-square"></i></a>
                  <a href="{{ route('cetak-daftarhadir') }}" target="_blank" class="btn btn-primary"> Cetak Data <i class="fas fa-print"></i></a>
              </div>
          </div>

          <div class="card-body">
            <table class="table table-hover table-bordered table-stripped" id="example2">
              <thead>
              <tr>
                  <th>Id Hadir</th>
                  <th>Keperluan</th>
                  <th>Tanggal Kehadiran</th>
                  <th>Opsi</th>
              </tr>
              </thead>
              <tbody>
              @foreach($dtDaftarhadir as $item)
                  <tr>
                      <td>{{$item->id_hadir}}</td>
                      <td>{{$item->keperluan}}</td>
                      <td>{{$item->tanggal_kehadiran}}</td>
                      <td>
                          <a href="{{ url('edit-daftarhadir',$item->id_hadir)}}" class="fas fa-edit"> </a> |
                          <a href="{{ url('delete-daftarhadir',$item->id_hadir)}}" class="fas fa-trash-alt" style="color: red"> </a>
                      </td>
                  </tr>
              @endforeach
              </tbody>
          </table>
          </div>
          <div class="d-flex justify-content-center">
              {{ $dtDaftarhadir->links() }}
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

@include('sweetalert::alert')
</body>
</html>