@extends('connect.master')

@section('title', 'Registtrarse')
@section('content')

<div class="box box_register shadow">
    <div class="container-fluid">

        <!-- formulario del register -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <!-- cover -->
                            <div class="col-lg-6 d-none d-lg-block position-relative">
                                <img src="{{ url('/static/images/mrico.jpg') }}" width="100%" height="100%" class="cover">
                                <div class="position-absolute top-50 start-50 translate-middle text-center box">
                                    <h1 class="h1 text-white spacing">Bienvenidos</h1>
                                    <center>
                                        <div class="hr"></div>
                                    </center>
                                    <center>
                                        <p class="text-white text-bold">
                                            Gracias por tu visita, 
                                        </p>
                                    </center>
                                </div>
                            </div>

                            <!-- form control -->
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center mt-5">
                                        <h1 class="h4 judul text-bolds  animate__animated animate__heartBeat animate__infinite">
                                            Registrase</h1>
                                    </div>
                                    <form method="POST" name="myForm" action="#">
                                    {!! Form::open(['url' => '/register']) !!}
                                        <div class="card mt-4 border-left">
                                            <div class="card-body p-0">
                                                
                                                {!! Form::text('name', null, ['class' => 'form-login', 'placeholder' => 'Username', 'name' => 'user', 'required']) !!}
                                            </div>   
                                        </div>
                                        <div class="card mt-4 border-left">
                                            <div class="card-body p-0">
                                               
                                                {!! Form::email('email', null, ['class' => 'form-login', 'placeholder' => 'Email', 'name' => 'user', 'required']) !!}
                                            </div>
                                        </div>
            
                                        <div class="card mt-4 border-left">
                                            <div class="card-body p-0">
                                               
                                                {!! Form::password('password', ['class' => 'form-login', 'placeholder' => 'Password', 'name' => 'pass', 'required']) !!}
                                            </div>
                                        </div>
                                        <div class="card mt-4 border-left">
                                            <div class="card-body p-0">
                    
                                                {!! Form::password('cpassword', ['class' => 'form-login', 'placeholder' => 'Confirmar Password', 'name' => 'pass', 'required']) !!}
                                            </div>
                                        </div>


                
                                                {!! Form::submit('Registrarse', ['class' => 'btn btn-info block rounded-pill shadow fas fa-lock']) !!}
                                        {!! Form::close() !!}

                                        <center class="mt-4">
                                            <a href="{{ url('/login') }}" class="link"> ya tengo una cuenta? Ingresar</a>
                                        </center>

                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@stop