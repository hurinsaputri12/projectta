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
      {{-- <div class="col-xl-6 col-md-6 col-sm-12">
        <div class="card shadow mb-4">
          <!-- Card Header - Dropdown -->
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Grafik Donatur Per Bulan</h6>
          </div>
          <!-- Card Body -->
          <div class="card-body">
              <form action="">
                <div class="row pt-4 pl-3">
                    <div class="col-xl-10">
                      <div class="form-group">
                            <div class="input-group input-group-merge input-group-alternative mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text bg-light text-darker">Tahun</span>
                                  </div>
                                  <select class="form-control text-darker pl-2" name="tahun">
                                    @foreach ($input_tahun as $val)
                                      <option value="{{$val->year}}" @if($val->year == $tahun) {{'selected="selected"'}} @endif >{{$val->year}}</option>
                                    @endforeach
                                  </select>
                            </div>
                      </div>
                    </div>
                    <div class="col-xl-1">
                      <button type="submit" class="btn btn-primary">Filter  </button>
                    </div>
                </div>
              </form>
            <div class="chart-area">
              <div id="chart-buku"></div>
            </div>
          </div>
        </div>
      </div> --}}

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
              </tr>
            </thead>
            <tfoot>
            <tbody>
                @php
                $no = 1
            @endphp
            @foreach ($daftar as $item)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $item->nama }}</td>
              <td>{{ $item->judul_buku }}</td>
              <td>{{ $item->nama_kategori }}</td>
              <td>{{ $item->jumlah_buku }}</td>
              <td>{{ $item->jenis_buku }}</td>
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

</div>
<!-- End of Content Wrapper -->
@endsection

{{-- @section('js')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
  Highcharts.chart('chart-buku', {
    chart: {
        type: 'area'
    },
    title: {
        text: 'Grafik Jumlah Buku Yang Didonasikan'
    },
    xAxis: {
        categories: {!!json_encode($categories)!!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Berat Panen Madu (Kg)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} kg</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: {!!json_encode($tahun)!!},
        data: {!!json_encode($data)!!},
        // data: [1,2],
    }]
});
</script>
@endsection --}}
