@extends('master.master')

@section('title')
 <title>Daftar Relawan</title>
@endsection

@section('nav')
    <div class="sidebar-heading">
        OPSI LAPAK BACA
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.lapak.lapak')}}">
        <i class="fas fa-fw fa-clipboard-list"></i>
        <span>Daftar Lapak Baca</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.lapak.validasirelawan')}}">
        <i class="fas fa-fw fa-clipboard-list"></i>
        <span>Validasi Relawan</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.lapak.daftarrelawan')}}">
        <i class="fas fa-fw fa-clipboard-list"></i>
        <span>Daftar Relawan</span></a>
    </li>
@endsection

@section('content')
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Relawan</h 6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama relawan</th>
                    <th>Tanggal</th>
                    <th>Nama kegiatan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Hurin In Dinnar Saputri</td>
                        <td>12 Agustus 2020</td>
                        <td>Taman Baca Bahagia</td>
                        <td>Diterima</td>
                    </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->
@endsection
