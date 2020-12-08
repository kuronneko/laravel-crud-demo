@extends('plantilla')
@section('contenido')
<h4>Nuevo Producto</h4>
<form action="{{route('producto.store')}}" method="POST">
        {!! csrf_field() !!}
        <input type="text" name="nombre" placeholder="Nombre"/>
        <button type="submit">Agregar</button>
    </form>

    <br><br>

    @if (session()->has("msg"))
        {{session('msg')}}
    @endif
@endsection
