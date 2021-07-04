
<div class="form-group">
    <label for="Nombre" class="control-label">{{'Nombre del Platillo'}}</label>
    <input class="form-control {{$errors->has('name')?'is-invalid':''}}" name="name" type="text" id="name" 
    value="{{ isset($platillo->name)?$platillo->name:old('name')}}" >
    {!! $errors->first('name','<div class="invalid-feedback">inserte el nombre del platillo</div>') !!}
    
</div>

<div class="form-group">
    <label for="precio" class="control-label">{{ 'Precio' }}</label>
    <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">$</span>
              <span class="input-group-text">0.00</span>
            </div>
         
    <input class="form-control {{$errors->has('precio')?'is-invalid':''}}" name="precio" 
    type="double" id="precio" aria-label="Dollar amount (with dot and two decimal places)"
    value="{{ isset($platillo->precio) ? $platillo->precio:old('precio')}}" >
    {!! $errors->first('precio','<div class="invalid-feedback">inserte un precio</div>') !!}
</div>
</div>


<div class="form-group">
    <label for="foto" class="control-label">{{ 'Foto' }}</label>
     @if (isset($platillo->foto))
<br/>
     <img class="img-thumbnail img-fluid"src="{{asset('images').'/'.$platillo->foto }}" alt=""  width="200">
     @endif
<br/>
    <input  name="foto" type="file" id="foto" value="" class="{{$errors->has('foto')?'is-invalid':''}}" >
    {!! $errors->first('foto','<div class="invalid-feedback">inserte una imagen</div>') !!}

</div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Guardar' }}">
    </div>
</div>