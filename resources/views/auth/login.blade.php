@extends('master.auth')

@section('title')
<title> LOGIN </title>
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
                                <form method="POST" action="{{route('log')}}" class="user">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" name="password" required>
                                    </div>
                                    <div class="text-right">
                                        <a class="small" href="{{ route('auth.reset')}}">Forgot Password?</a>
                                    </div>
                                    <hr>
                                     <div class="form-group">
                                            <button type="submit" id="button" class="btn btn-primary btn-md btn-user btn-block">
                                                LOGIN
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


