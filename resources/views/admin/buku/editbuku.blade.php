@extends('master.master')

@section('title')
 <title>Edit Buku Cetak</title>
@endsection

@section('content')
        <!-- Begin Page Content -->
        <div class="content mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Edit Buku Cetak</strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="{{route('admin.buku.updatebuku',[$buku->id])}}" method="post" enctype="multipart/form-data"class="form-horizontal">
                            @csrf
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Judul Buku</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="judul_buku" placeholder="Judul Buku" class="form-control" value="{{$buku->judul_buku}}"></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="select" class="form-control-label">Kategori Buku</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="kategori_id" id="select" class="form-control">
                                        @foreach ($kategori as $item)
                                            <option value="{{$item->id}}" @if($buku->kategori_id == $item->id) {{'selected="selected"'}} @endif>{{$item->nama_kategori}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class="form-control-label">Nama Pengarang</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="nama_pengarang" placeholder="Nama Pengarang" class="form-control" value="{{$buku->nama_pengarang}}"></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class="form-control-label">Tahun Terbit</label></div>
                                <div class="col-12 col-md-9"><input type="number" name="tahun_terbit" placeholder="Tahun Terbit" class="form-control" value="{{$buku->tahun_terbit}}"></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class="form-control-label">Penerbit</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="penerbit" placeholder="Penerbit" class="form-control" value="{{$buku->penerbit}}"></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class="form-control-label">Jumlah Halaman</label></div>
                                <div class="col-12 col-md-9"><input type="number" name="jumlah_halaman" placeholder="Jumlah Halaman" class="form-control" value="{{$buku->jumlah_halaman}}"></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class="form-control-label">Jumlah Buku</label></div>
                                <div class="col-12 col-md-9"><input type="number" name="jumlah_buku" placeholder="Jumlah Buku" class="form-control" value="{{$buku->jumlah_buku}}"></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class="form-control-label">Jenis Buku</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="jenis_buku" class="form-control">
                                        <option value="Buku Cetak">Buku Cetak</option>
                                        <option value="Ebook"><i>Ebook</i></option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class="form-control-label">Foto Cover</label></div>
                                <div class="col-12 col-md-9">
                                    <img src="{{ asset('/img/buku/'. $buku->foto_cover)}}" width="200" alt="">
                                    <input type="file" name="foto_cover" class="form-control"><small value="{{$buku->foto_cover}}" class="form-text text-muted">Masukkan foto cover disini</small></div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Simpan
                                </button>
                                <a href="{{route('admin.buku.buku')}}" type="" class="btn btn-danger btn-sm">
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
