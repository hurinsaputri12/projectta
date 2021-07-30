@extends('master.master')

@section('title')
 <title>Validasi Donasi Ebook</title>
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

  <li class="nav-item">
    <a class="nav-link" href="{{route('admin.donasiebook.daftardonasiebook')}}">
      <i class="fas fa-fw fa-clipboard-list"></i>
      <span>Daftar Donasi Ebook</span></a>
  </li>

  <li class="nav-item active">
    <a class="nav-link" href="{{route('admin.donasiebook.validasidonasiebook')}}">
      <i class="fas fa-fw fa-clipboard-list"></i>
      <span>Validasi Donasi Ebook</span></a>
  </li>
@endsection


@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Validasi Donasi Ebook</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Donatur</th>
                            <th>Jenis Buku</th>
                            <th>Judul Buku</th>
                            <th>Jumlah Buku</th>
                            <th>Alamat</th>
                            <th>File Ebook</th>
                            <th>Sinopsis</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1
                            @endphp
                            @foreach ($donasiebook as $item)
                            <tr>
                              <td>{{ $no++ }}</td>
                              <td>{{ $item->nama }}</td>
                              <td>{{ $item->jenis_buku }}</td>
                              <td>{{ $item->judul_buku }}</td>
                              <td>{{ $item->jumlah_buku }}</td>
                              <td>{{ $item->alamat_donatur }}</td>
                              <td><a href="{{ route('admin.donasiebook.filepdf', [$item->id]) }}" target="_blank">{{$item->file_ebook}}</a></td>
                              <td>{{ $item->sinopsis }}</td>
                              <td>
                                <form action="{{ route('admin.donasiebook.upvalidasidonasiebook', [$item->id]) }}" method="POST">
                                    @csrf
                                    <input name="status" value="1" hidden>
                                    <button class="btn btn-info" type="submit"><span class="text">Diterima</span></button>
                                </form>
                                <form action="{{ route('admin.donasiebook.upvalidasidonasiebook', [$item->id]) }}" method="POST">
                                    @csrf
                                    <input name="status" value="0" hidden>
                                    <button class="btn btn-danger" type="submit"><span class="text">Tidak diterima</span></button>
                                </form>
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
