@extends('plantilla')
@section('contenido')

<div class="row">
<div class="col s6 offset-s3">
<div class="card-panel white">
    <h4 class="center-align">Mis Productos</h4>
    <table class="bordered">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
    @foreach($productos as $producto)
        <tr>
            <td>{{$producto->id}}</td>
            <td>{{$producto->nombre_producto}}</td>
            <td>
                <a class="btn-floating waves-effect #0d47a1 blue darken-4" href="{{route("producto.edit",$producto->id)}}">
                    <i class="material-icons">edit</i>
                </a>
            </td>
            <td>
                <form action="{{route('producto.destroy', $producto->id)}}" method="POST">
                    {!! method_field('DELETE') !!}
                    {!! csrf_field() !!}
                    <button class="btn-floating waves-effect #b71c1c red darken-4" type="submit">
                        <i class="material-icons">delete</i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
</div>
</div>
</div>

@endsection
