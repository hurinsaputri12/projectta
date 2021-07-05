@extends('master.auth')

@section('title')
<title>{{$ebook->file_ebook}}</title>
@endsection

@section('content')
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-10 col-md-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="p-3">
                                <div class="text-center m-5">
                                    <h4><b>{{$ebook->judul_buku}}</b></h4>
                                </div>
                                <div class="text-center">
                                    <iframe src="{{asset('file/ebook/'. $ebook->file_ebook)}}" width="850" height="800"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

  </div>

</div>
@endsection

