<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="beranda" class="brand-link">
      <img src="{{ asset('Gambar/buku.jpg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PERPUSTAKAAN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('Gambar/logo.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="hal-admin" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            {{-- @if (auth()->user()->level == "user")
                <li class="nav-item has-treeview">
                </li>
            @endif --}}
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
                <i class="fa fa-bars" aria-hidden="true"></i>
              <p>
                Daftar Tabel
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="hal-admin" class="nav-link">
                    <i class="fa fa-window-maximize" aria-hidden="true"></i>
                  <p>Beranda</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('pegawai') }}" class="nav-link">
                  <i class="fas fa-users nav-icon green"></i>
                  <p>Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('siswa') }}" class="nav-link">
                  <i class="fas fa-users nav-icon green"></i>
                  <p>Siswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('survey') }}" class="nav-link">
                  <i class="fas fa-users nav-icon green"></i>
                  <p>Survey</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('daftarhadir') }}" class="nav-link">
                  <i class="fas fa-users nav-icon green"></i>
                  <p>Daftar Hadir</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('berita') }}" class="nav-link">
                  <i class="fas fa-users nav-icon green"></i>
                  <p>Berita</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('jenis') }}" class="nav-link">
                  <i class="fas fa-users nav-icon green"></i>
                  <p>Jenis</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('kategori') }}" class="nav-link">
                  <i class="fas fa-users nav-icon green"></i>
                  <p>Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('kamus') }}" class="nav-link">
                  <i class="fas fa-users nav-icon green"></i>
                  <p>Kamus</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('modul') }}" class="nav-link">
                  <i class="fas fa-users nav-icon green"></i>
                  <p>Modul</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('majalah') }}" class="nav-link">
                  <i class="fas fa-users nav-icon green"></i>
                  <p>Majalah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('penulis') }}" class="nav-link">
                  <i class="fas fa-users nav-icon green"></i>
                  <p>Penulis</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('penerbit') }}" class="nav-link">
                  <i class="fas fa-users nav-icon green"></i>
                  <p>Penerbit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('novel') }}" class="nav-link">
                  <i class="fas fa-users nav-icon green"></i>
                  <p>Novel</p>
                </a>
              </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link">
                        <i class="fas fa-sign-out-alt nav-icon red"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
