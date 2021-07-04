@extends('layouts.app')


@section('content')

    <div class="container">
            
        <div class="row justify-content-center">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Crear Nuevo Platillo</div>
                    <div class="card-body">
                        <a href="{{ url('/platillos') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i>Regresar</button></a>
                        <br />
                        <br />
                        @include('common.errors')
                        <form method="POST" action="{{ url('/platillos') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('platillos.form', ['formMode' => 'create'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
