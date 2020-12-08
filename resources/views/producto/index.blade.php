@extends('plantilla')
@section('contenido')
<h4>Mis Productos</h4>
<table border="1">
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Editar</th>
</tr>
@foreach($productos as $producto)
    <tr>
        <td>{{$producto->id}}</td>
        <td>{{$producto->nombre_producto}}</td>
        <td>
            <a href="{{route("producto.edit",$producto->id)}}">Editar</a>

            <form action="{{route('producto.destroy', $producto->id)}}" method="POST">
                {!! method_field('DELETE') !!}
                {!! csrf_field() !!}
                <button type="submit">Eliminar</button>
            </form>
        </td>
    </tr>
@endforeach
</table>
@endsection
