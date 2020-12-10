@extends('plantilla')
@section('contenido')


<div class="row">
<div class="col s6 offset-s3">
<div class="card-panel white">
    <h4 class="center-align">Nuevo Producto</h4>
    <form action="{{route('producto.store')}}" method="POST">
        {!! csrf_field() !!}
        <input type="text" name="nombre" placeholder="Nombre"/>
        <button class="btn" type="submit">Agregar</button>
    </form>



    @if (session()->has("msg"))
        {{session('msg')}}
    @endif
</div>
</div>
</div>

@endsection
