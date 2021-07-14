@extends('master.master')

@section('title')
 <title>Pengguna Aplikasi</title>
 <!-- Custom styles for this page -->

@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Pengguna Aplikasi</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama pengguna</th>
                <th>Email</th>
                <th>Password</th>
                <th>Nomor Telepon</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $no = 1
                @endphp
                @foreach ($pengguna as $item)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $item->nama}}</td>
                  <td>{{ $item->email }}</td>
                  <td>{{ $item->password }}</td>
                  <td>{{ $item->nomor_telepon }}</td>
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
