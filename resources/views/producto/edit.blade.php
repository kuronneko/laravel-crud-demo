@extends('plantilla')
@section('contenido')

<div class="row">
    <div class="col s6 offset-s3">
    <div class="card-panel white">
        <h4 class="center-align">Editar Producto</h4>
        <form action="{{route('producto.update', $producto->id)}}" method="POST">
                {!! method_field('PUT') !!}
                {!! csrf_field() !!}
                <input type="text" name="nombre" value="{{($producto->nombre_producto)}}"/>
                <button class="btn" type="submit">Editar</button>
            </form>

    </div>
</div>
</div>


@endsection
