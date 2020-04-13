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
    </tr>    

@foreach ($productos as $producto)
    <tr>
    <td><a href="{{route('productos.edit',$producto->id)}}">{{$producto->nombreArticulo}}</a></td>
        <td>{{$producto->seccion}}</td>
        <td>{{$producto->precio}}</td>
        <td>{{$producto->fecha}}</td>
        <td>{{$producto->paisOrigen}}</td>
    </tr>    
@endforeach
</table>
@endsection
@section('pie')
    
@show