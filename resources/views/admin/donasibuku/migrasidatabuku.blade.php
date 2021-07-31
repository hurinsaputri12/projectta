@extends('master.master')

@section('title')
 <title>Migrasi Data Buku</title>
@endsection

@section('content')
        <!-- Begin Page Content -->
        <div class="content mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Migrasi Data Buku</strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="{{ route('admin.donasi.upmigrasidatabuku', [$id]) }}" method="post" enctype="multipart/form-data"class="form-horizontal">
                            @csrf
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Judul Buku</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="judul_buku" placeholder="Judul Buku" class="form-control" value="{{$donasibuku->judul_buku}}"></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="select" class="form-control-label">Kategori Buku</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="kategori_id" id="select" class="form-control">
                                        @foreach ($kategori as $item)
                                            <option value="{{$item->id}}" @if($donasibuku->kategori_id == $item->id) {{'selected="selected"'}} @endif>{{$item->nama_kategori}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class="form-control-label">Nama Pengarang</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="nama_pengarang" placeholder="Nama Pengarang" class="form-control"></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class="form-control-label">Tahun Terbit</label></div>
                                <div class="col-12 col-md-9"><input type="number" name="tahun_terbit" placeholder="Tahun Terbit" class="form-control"></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class="form-control-label">Penerbit</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="penerbit" placeholder="Penerbit" class="form-control"></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class="form-control-label">Jumlah Halaman</label></div>
                                <div class="col-12 col-md-9"><input type="number" name="jumlah_halaman" placeholder="Jumlah Halaman" class="form-control" value="{{$donasibuku->jumlah_halaman}}"></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class="form-control-label">Jumlah Buku</label></div>
                                <div class="col-12 col-md-9"><input type="number" name="jumlah_buku" placeholder="Jumlah Buku" class="form-control" value="{{$donasibuku->jumlah_buku}}"></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class="form-control-label">Jenis Buku</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="jenis_buku" class="form-control">
                                        <option @if($donasibuku->jenis_buku == "buku-cetak") {{'selected="selected"'}} @endif value="buku-cetak">Buku Cetak</option>
                                        <option @if($donasibuku->jenis_buku == "ebook") {{'selected="selected"'}} @endif value="ebook"><i>Ebook</i></option>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                    <input type="text" name="foto_cover" class="form-control" hidden value="{{ $donasibuku->foto_cover }}"></div>
                                    <input type="text" name="donatur_id" class="form-control" hidden value="{{ $donasibuku->user_id }}"></div>
                                </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Simpan
                                </button>
                                <a href="{{route('admin.donasibuku.daftardonasi')}}" type="" class="btn btn-danger btn-sm">
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
