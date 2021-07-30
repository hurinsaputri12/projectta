@extends('master.master')

@section('title')
 <title>Validasi Relawan</title>
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

    <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.lapak.validasirelawan')}}">
        <i class="fas fa-fw fa-clipboard-list"></i>
        <span>Validasi Relawan</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.lapak.daftarrelawan')}}">
        <i class="fas fa-fw fa-clipboard-list"></i>
        <span>Daftar Relawan</span></a>
    </li>
@endsection

@section('content')

        <!-- Begin Page Content -->

        <div class="container-fluid">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Validasi Relawan</h6>
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
                        $no = 1
                        @endphp
                        <tbody>
                            @foreach($relawan as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->nama}}</td>
                                <td>{{ $item->nama_kegiatan}}</td>
                                <td>{{ \Carbon\Carbon::parse($item->tanggal)->isoFormat('dddd, D MMMM Y') }}</td>
                                <td>
                                    <form action="{{ route('admin.lapak.upvalidasirelawan', [$item->id]) }}" method="POST">
                                        @csrf
                                        <input name="status" value="1" hidden>
                                        <button class="btn btn-info" type="submit"><span class="text">Disetujui</span></button>
                                    </form>
                                    <form action="{{ route('admin.lapak.upvalidasirelawan', [$item->id]) }}" method="POST">
                                        @csrf
                                        <input name="status" value="0" hidden>
                                        <button class="btn btn-danger" type="submit"><span class="text">Tidak disetujui</span></button>
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
