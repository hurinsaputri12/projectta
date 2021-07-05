@extends('master.master')

@section('title')
 <title>Edit Lapak Baca</title>
@endsection

@section('content')
        <!-- Begin Page Content -->
        <div class="content mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Edit Lapak Baca</strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data"class="form-horizontal">
                            @csrf
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal</label></div>
                            <div class="col-12 col-md-9"><input type="date" id="text-input" name="tanggal" placeholder="Tanggal" class="form-control" value="{{$lapak->tanggal}}"></div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Kegiatan</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama_kegiatan" placeholder=" Nama Kegiatan" class="form-control" value="{{$lapak->nama_kegiatan}}"></div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jumlah Relawan</label></div>
                            <div class="col-12 col-md-9"><input type="number" id="text-input" name="jumlah_relawan" placeholder="Jumlah Relawan" class="form-control" value="{{$lapak->jumlah_relawan}}"></div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Lokasi</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="lokasi" placeholder="Lokasi" class="form-control" value="{{$lapak->lokasi }}"></div>
                        </div>

                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Simpan
                        </button>
                        <a href="{{route('admin.lapak.lapak')}}" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Batal
                        </a>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
    </div>

<!-- End of Main Content -->
@endsection
