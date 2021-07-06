@extends('master.master')

@section('title')
 <title>Validasi Donasi</title>
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

  <li class="nav-item">
    <a class="nav-link" href="{{route('admin.donasi.daftardonasi')}}">
      <i class="fas fa-fw fa-clipboard-list"></i>
      <span>Daftar Donasi Buku</span></a>
  </li>

  <li class="nav-item active">
    <a class="nav-link" href="{{route('admin.donasi.validasidonasi')}}">
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
                            <th>Judul buku</th>
                            <th>Kategori</th>
                            <th>Jumlah buku</th>
                            <th>File buku</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Dino</td>
                            <td>Jangan Berhenti Berdoa</td>
                            <td>Novel</td>
                            <td>3</td>
                            <td><img src="../img/jangan berhenti berdoa.jpg"width="50" height="80"/></td>
                            <td><a href="#" class="btn btn-info"><span class="text">Diterima</span></a>
                                <a href="#" class="btn btn-danger"><span class="text">Tidak diterima</span></a>
                            </td>
                          <tr>
                            </tr>
                            <td>2</td>
                            <td>Dino</td>
                            <td>Jangan Berhenti Berdoa</td>
                            <td>Novel</td>
                            <td>3</td>
                            <td><img src="../img/jangan berhenti berdoa.jpg"width="50" height="80"/></td>
                            <td><a href="#" class="btn btn-info"><span class="text">Diterima</span></a>
                                <a href="#" class="btn btn-danger"><span class="text">Tidak diterima</span></a>
                            </td>
                          <tr>
                            </tr>
                            <td>3</td>
                            <td>Dino</td>
                            <td>Jangan Berhenti Berdoa</td>
                            <td>Novel</td>
                            <td>3</td>
                            <td><img src="../img/jangan berhenti berdoa.jpg"width="50" height="80"/></td>
                            <td><a href="#" class="btn btn-info"><span class="text">Diterima</span></a>
                                <a href="#" class="btn btn-danger"><span class="text">Tidak diterima</span></a>
                            </td>
                          <tr>
                            </tr>
                            <td>4</td>
                            <td>Dino</td>
                            <td>Jangan Berhenti Berdoa</td>
                            <td>Novel</td>
                            <td>3</td>
                            <td><img src="../img/jangan berhenti berdoa.jpg"width="50" height="80"/></td>
                            <td><a href="#" class="btn btn-info"><span class="text">Diterima</span></a>
                                <a href="#" class="btn btn-danger"><span class="text">Tidak diterima</span></a>
                            </td>
                          <tr>
                            </tr>
                            <td>5</td>
                            <td>Dino</td>
                            <td>Jangan Berhenti Berdoa</td>
                            <td>Novel</td>
                            <td>3</td>
                            <td><img src="../img/jangan berhenti berdoa.jpg"width="50" height="80"/></td>
                            <td><a href="#" class="btn btn-info"><span class="text">Diterima</span></a>
                                <a href="#" class="btn btn-danger"><span class="text">Tidak diterima</span></a>
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
