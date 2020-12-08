@extends('plantilla')
@section('contenido')
<h4>Editar Producto</h4>
<form action="{{route('producto.update', $producto->id)}}" method="POST">
        {!! method_field('PUT') !!}
        {!! csrf_field() !!}
        <input type="text" name="nombre" value="{{($producto->nombre_producto)}}"/>
        <button type="submit">Editar</button>
    </form>

@endsection
