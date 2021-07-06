@extends('master.master')

@section('title')
 <title>Daftar Donasi</title>
@endsection

@section('nav')
<div class="sidebar-heading">
    OPSI DONASI BUKU
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link" href="{{route('admin.donasi.pengajuandonasi')}}">
      <i class="fas fa-fw fa-clipboard-list"></i>
      <span>Validasi Pengajuan Donasi Buku</span></a>
  </li>

  <li class="nav-item active">
    <a class="nav-link" href="{{route('admin.donasi.daftardonasi')}}">
      <i class="fas fa-fw fa-clipboard-list"></i>
      <span>Daftar Donasi Buku</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{route('admin.donasi.validasidonasi')}}">
      <i class="fas fa-fw fa-clipboard-list"></i>
      <span>Validasi Donasi Buku</span></a>
  </li>
@endsection

@section('content')
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Donasi Buku</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Donatur</th>
                    <th>Alamat</th>
                    <th>Judul buku</th>
                    <th>Kategori</th>
                    <th>Jumlah buku</th>
                    <th>Jenis buku</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ayla</td>
                        <td>Srono</td>
                        <td>Kata</td>
                        <td>Novel</td>
                        <td>3</td>
                        <td>Buku cetak</td>
                        <td>Belum diterima</td>
                        <td><a href="#" class="btn btn-danger"><span class="text">Hapus</span></a> </td>
                    </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection
