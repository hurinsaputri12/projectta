@extends('master.auth')

@section('title')
<title>REGISTER</title>
@endsection

@section('content')
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-6 col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="p-3">
                                    <div class="text-center">
                                        <img src="{{asset('back/img/logo ruang baca.png')}}"width="200" height="200"/>
                                    </div>
                                    <form method="POST" action="{{route('reg')}}" class="user">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputNama" placeholder="Nama" name="nama" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" placeholder="Email" name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputAlamat" placeholder="Alamat" name="alamat" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control form-control-user"
                                                id="exampleInputnomor_telepon" placeholder="Nomor Telepon" name="nomor_telepon" required>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" id="button" class="btn btn-primary btn-md btn-user btn-block">
                                                REGISTER
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

      </div>

    </div>
@endsection
