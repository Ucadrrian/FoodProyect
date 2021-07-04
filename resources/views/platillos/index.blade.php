@extends('layouts.app')

@section('title','reservaciones')

@section('content')
<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="css/fondo.css">

@include('common.success')
  <div class="container1"> 
        <div class="card-body">
        <a href="{{ url('/platillos/create') }}" class="btn btn-success" title="Crear Nueva Platillo">
            <i class="fa fa-plus" aria-hidden="true"></i> Crear nuevo Platillo
        </a>
    </div>
      <div class="row justify-content-center">
        @foreach ($platillos as $platillo)
            <div class="col-md ">
                <div class="cards bg-light text-center ">
                    <img  src="images/{{$platillo->foto}}" >
                    <div class="cards-body">
                       <h5 class="cards-title">{{$platillo->name}}</h5>
                        <p class="cards-text"><h4> ${{$platillo->precio}}</h4>
                           </p>
                        <a href="{{route('platillos.show',$platillo->id)}}"  class="btn btn-primary">ver mas</a>
                    </div>
                 </div>
            </div>
         @endforeach
    </div>
</div>       
@endsection