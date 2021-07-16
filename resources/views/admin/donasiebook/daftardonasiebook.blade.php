@extends('master.master')

@section('title')
 <title>Daftar Donasi Ebook</title>
@endsection

@section('nav')
<div class="sidebar-heading">
    OPSI DONASI EBOOK
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link" href="{{route('admin.donasiebook.validasipengajuandonasiebook')}}">
      <i class="fas fa-fw fa-clipboard-list"></i>
      <span>Validasi Pengajuan Donasi Ebook</span></a>
  </li>

  <li class="nav-item active">
    <a class="nav-link" href="{{route('admin.donasiebook.daftardonasiebook')}}">
      <i class="fas fa-fw fa-clipboard-list"></i>
      <span>Daftar Donasi Ebook</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{route('admin.donasiebook.validasidonasiebook')}}">
      <i class="fas fa-fw fa-clipboard-list"></i>
      <span>Validasi Donasi Ebook</span></a>
  </li>
@endsection

@section('content')
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Donasi Ebook</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Donatur</th>
                    <th>Alamat Donatur</th>
                    <th>Judul Buku</th>
                    <th>Jumlah Buku</th>
                    <th>Jenis Buku</th>
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
