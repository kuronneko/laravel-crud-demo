@extends('plantilla')
@section('contenido')
<p>
    ID: {{$producto->id}} <br>
    Producto: {{$producto->nombre_producto}}
</p>
@endsection
