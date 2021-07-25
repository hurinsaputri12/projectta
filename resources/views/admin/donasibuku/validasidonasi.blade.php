@extends('master.master')

@section('title')
 <title>Validasi Donasi Buku</title>
@endsection

@section('nav')
<div class="sidebar-heading">
    OPSI DONASI BUKU
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link" href="{{route('admin.donasibuku.validasipengajuandonasi')}}">
      <i class="fas fa-fw fa-clipboard-list"></i>
      <span>Validasi Pengajuan Donasi Buku</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{route('admin.donasibuku.daftardonasi')}}">
      <i class="fas fa-fw fa-clipboard-list"></i>
      <span>Daftar Donasi Buku</span></a>
  </li>

  <li class="nav-item active">
    <a class="nav-link" href="{{route('admin.donasibuku.validasidonasi')}}">
      <i class="fas fa-fw fa-clipboard-list"></i>
      <span>Validasi Donasi Buku</span></a>
  </li>
@endsection

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Validasi Donasi Buku</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Donatur</th>
                            <th>Judul Buku</th>
                            <th>Jumlah Buku</th>
                            <th>Alamat Donatur</th>
                            <th>Cover Buku</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1
                            @endphp
                            @foreach ($donasibuku as $item)
                            <tr>
                              <td>{{ $no++ }}</td>
                              <td>{{ $item->nama }}</td>
                              <td>{{ $item->judul_buku }}</td>
                              <td>{{ $item->jumlah_buku }}</td>
                              <td>{{ $item->alamat_donatur }}</td>
                              <td></td>
                              <td><a href="#" class="btn btn-info"><span class="text">Diterima</span></a>
                                <a href="#" class="btn btn-danger"><span class="text">Tidak diterima</span></a>
                            </td>
                            </tr>
                            @endforeach
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
