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
        <h6 class="m-0 font-weight-bold text-primary">Daftar Relawan</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama relawan</th>
                    <th>Nama kegiatan</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                @php
                    $no = 1;
                @endphp
                <tbody>
                    @foreach($relawan as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->nama}}</td>
                                <td>{{ $item->nama_kegiatan}}</td>
                                <td>{{ \Carbon\Carbon::parse($item->tanggal)->isoFormat('dddd, D MMMM Y') }}</td>
                                <td>
                                    <a href="{{ route('admin.lapak.hapusrelawan',[$item->id])}}" class="btn btn-danger" onclick="return confirm('Anda yakin ingin Menghapus ?')">Hapus</a>
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
@endsection
