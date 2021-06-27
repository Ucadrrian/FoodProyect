@extends('connect.master')

@section('title', 'Login')

@section('content')

    <div class="container-fluid">

        <!-- Card Login -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">

                            <!-- cover -->
                            <div class="col-lg-6 d-none d-lg-block position-relative">
                                <img src="{{ url('/static/images/original.jpg') }}" width="100%" height="100%"
                                    class="cover">
                                <div class="position-absolute top-50 start-50 translate-middle text-center box">
                                    <h1 class="h1 text-white spacing">Bienvenidos</h1>
                                    <center>
                                        <div class="hr"></div>
                                    </center>
                                </div>
                            </div>

                            <!-- formulario de  login -->

                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center mt-5">
                                        <h1
                                            class="h4 judul text-bolds  animate__animated animate__heartBeat animate__infinite">
                                            Iniciar sesión</h1>
                                    </div>
                                   
                                        <!-- login -->
                                        {!! Form::open(['url' => '/login']) !!}
                                        <div class="card mt-5 border-left">
                                            <div class="card-body p-0">
                                                {!! Form::email('email', null, ['class' => 'form-login', 'placeholder' => 'Username', 'name' => 'user', 'required']) !!}
                                            </div>
                                        </div>

                                        <!-- password -->
                                        <div class="card mt-4 border-left">
                                            <div class="card-body p-0">
                                                {{-- <input type="password" class="form-login" placeholder="Password" name="pass" required> --}}
                                                {!! Form::password('password', ['class' => 'form-login', 'placeholder' => 'password', 'name' => 'pass', 'required']) !!}
                                            </div>
                                        </div>

                                        {!! Form::submit('Login', ['class' => 'btn btn-info block rounded-pill shadow fas fa-lock']) !!}
                                        {!! Form::close() !!}

                                        <div class="d-flex justify-content-between mt-4 mb-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault" checked>
                                                <label class="form-check-label font-check" for="flexCheckDefault">
                                                    Keep me signed in
                                                </label>
                                            </div>
                                            <a href="#" class="link">Forgot Password?</a>
                                        </div>
                                        <!-- buttom para iniciar seccion -->
                                        <center class="mt-4">
                                            <a href="{{url('/register')}}" class="link">¿No tienes una cuentas?, Registrate</a>
                                        </center>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@stop
