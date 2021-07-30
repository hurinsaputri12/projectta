@extends('master.master')

@section('title')
 <title>Beranda</title>
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Content Row -->

    <div class="row">

      <!-- Area Chart -->
      <div class="col-xl-6 col-md-6 col-sm-12">
        <div class="card shadow mb-4">
          <!-- Card Header - Dropdown -->
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Grafik Donatur Per Bulan</h6>
            <div class="dropdown no-arrow">
              <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                <div class="dropdown-header">Dropdown Header:</div>
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </div>
          <!-- Card Body -->
          <div class="card-body">
            <div class="chart-area">
              <canvas id="myAreaChart"></canvas>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-6 col-md-6 col-sm-12">
          <div class="row">
                <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-6 col-md-6 sm-12">
                <div class="card border-left-primary shadow h-30 py-3" style="height: 180px;">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="h5 font-weight-bold text-primary text-uppercase mb-1">TOTAL DONATUR</div>
                        <div class="h2 mb-0 font-weight-bold text-gray-800">{{$jumlah_donatur}} Donatur</div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-6 col-md-6 sm-12">
                <div class="card border-left-success shadow h-30 py-3" style="height: 180px;">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="h5 font-weight-bold text-success text-uppercase mb-1">TOTAL BUKU</div>
                        <div class="h2 mb-0 font-weight-bold text-gray-800">{{$jumlah_buku}} Buku</div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-book fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>


          <div class="row mt-3">
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-6 col-md-6 sm-12">
                  <div class="card border-left-info shadow h-30 py-3" style="height: 180px;">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="h5 font-weight-bold text-info text-uppercase mb-1">TOTAL EBOOK</div>
                          <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                              <div class="h2 mb-0 mr-3 font-weight-bold text-gray-800">{{$jumlah_ebook}} Ebook</div>
                            </div>

                          </div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Pending Requests Card Example -->
                <div class="col-xl-6 col-md-6 sm-12">
                  <div class="card border-left-warning shadow h-30 py-3" style="height: 180px;" >
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="h5 font-weight-bold text-warning text-uppercase mb-1">TOTAL LAPAK BACA</div>
                          <div class="h2 mb-0 font-weight-bold text-gray-800">{{$jumlah_lapak}} Lapak</div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
      </div>

<!-- tabel -->
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Donasi Buku</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Donatur</th>
                <th>Judul Buku</th>
                <th>Kategori</th>
                <th>Jumlah Buku</th>
                <th>Jenis Buku</th>
                <th>Status</th>
              </tr>
            </thead>
            <tfoot>
            <tbody>
              <tr>
                <td>1</td>
                <td>Hurin In Dinnar</td>
                <td>Impianku</td>
                <td>Novel</td>
                <td>5</td>
                <td>Buku Cetak</td>
                <td>Sudah Diterima</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Zaki</td>
                <td>Pulang</td>
                <td>Novel</td>
                <td>3</td>
                <td>Buku Cetak</td>
                <td>Sudah Diterima</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Tulus</td>
                <td>Monokrom</td>
                <td>Novel</td>
                <td>9</td>
                <td>Buku Cetak</td>
                <td>Sudah Diterima</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Rina</td>
                <td>Lihatlah Awan</td>
                <td>Novel</td>
                <td>7</td>
                <td>Buku Elektronik</td>
                <td>Sudah Diterima</td>
              </tr>
              <tr>
                <td>5</td>
                <td>Hadiyono</td>
                <td>Ketika Cinta Bersemi</td>
                <td>Novel</td>
                <td>10</td>
                <td>Buku Cetak</td>
                <td>Sudah Diterima</td>
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

</div>
<!-- End of Content Wrapper -->
@endsection

