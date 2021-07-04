
@extends('layouts.app')

@section('title','platillos')

@section('content')
<link rel="stylesheet" href="css/fondo.css">
@include('common.success')

<div class="container" > 
    <div class="row justify-content-center">
            <div class="card bg-light mb-3" style="width: 35rem; margin-top:20px;">
                    <img src="{{asset('images').'/'.$platillo->foto }}" class="card-img-top" alt="card image cap">
                    <div class="cards-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                    <div class="card-header">DATOS DEL PLATILLO</div>
                                        
                                    </tr>
                                    <tr><th> Nombre </th><td> {{$platillo->name}} </td></tr><tr><th> telefono </th><td>{{$platillo->precio}} </td></tr>
                                </tbody>
                                
                            </table>
                        </div>
                        <div class="text-center">
                            
                                <a href="{{ url('/platillos') }}" title="Back"><button class="btn btn-warning btn-sm justify-content-center"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</button></a>
                  
                                <a href="{{ url('/platillos/' . $platillo->id . '/edit') }}" title="Edit Platillo"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                                
                                
                                <form method="POST" action="{{ url('/platillos' . '/' . $platillo->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm"  title="Delete Reservacion" onclick="return confirm('deseas borrar el platillo');"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                                </form>


                        </div>
                       
                    
                    </div>
                    
                  </div>        
    </div>
</div>



                       
                       
                       
                     
@endsection