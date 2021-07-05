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
                            <th>Tanggal</th>
                            <th>Nama kegiatan</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Hurin In Dinnar Saputri</td>
                                <td>10 Januari 2021</td>
                                <td>Taman Baca Bahagia</td>
                                <td><a href="#" class="btn btn-info"><span class="text">Disetujui</span></a>
                                    <a href="#" class="btn btn-danger"><span class="text">Tidak disetujui</span></a>
                                </td>
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
