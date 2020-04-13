@extends('layouts.plantilla')

@section('cabecera')
LEER REGISTROS
    
@endsection

@section('contenido')
<table border="1">
    <tr>
        <th>Nombre:</th>
        <th>Seccion</th>
        <th>Precio:</th>
        <th>Fecha:</th>
        <th>Pais de Origen:</th>
        <th>Imagen producto</th>
    </tr>    

@foreach ($productos as $producto)
    <tr>
    <td><a href="{{route('productos.edit',$producto->id)}}">{{$producto->nombreArticulo}}</a></td>
        <td>{{$producto->seccion}}</td>
        <td>{{$producto->precio}}</td>
        <td>{{$producto->fecha}}</td>
        <td>{{$producto->paisOrigen}}</td>
        <td><img src="/imagenes/{{$producto->ruta}}" alt="imagen producto" width = "100px"></td>
    </tr>    
@endforeach
    <tr >
        <td colspan='6' align="center">
            <a href="{{route('productos.create')}}"><button>Añadir registro</button></a>
        </td>
    </tr>
</table>

@endsection
@section('pie')
    
@show