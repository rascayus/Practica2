@extends('layouts.plantilla')

@section('cabecera')
EDITAR REGISTROS
    
@endsection

@section('contenido')

{!! Form::model($producto,['method' => 'PUT','action'=>['ProductosController@update',$producto->id]]) !!}
{{-- <form method="post" action="/productos/{{$producto->id}}"> --}}
    <table>
        <tr>
            <td>{{-- Nombre: --}}{!!Form::label('nombre', 'Nombre:')!!}</td>

            <td>
                {!! Form::text('nombreArticulo',$producto->nombreArticulo)!!}
                {!! Form::token()!!}
                {{-- <input type="text" name="nombreArticulo" value= {{$producto->nombreArticulo}}> 
                {{csrf_field()}} --}}
                {{-- <input type="hidden" name="_method" value="PUT"> --}}
            </td>
        </tr>
        <tr>
            <td>{{-- Sección: --}}{!!Form::label('seccion', 'Sección:')!!}</td>
            <td>
                {!! Form::text('seccion',$producto->seccion)!!}
                {{-- <input type="text" name="seccion" value= {{$producto->seccion}}> --}}
            </td>
        </tr>
        <tr>
            <td>{{-- Precio: --}}{!!Form::label('precio', 'Precio:')!!}</td>
            <td>
                {!! Form::text('precio',$producto->precio)!!}
                {{-- <input type="text" name="precio" value= {{$producto->precio}}> --}}
            </td>
        </tr>
        <tr>
            <td>{{-- Fecha: --}}{!!Form::label('fecha', 'Fecha:')!!}</td>
            <td>
                {!! Form::text('fecha',$producto->fecha)!!}
                {{-- <input type="text" name="fecha" value= {{$producto->fecha}}> --}}
            </td>
        </tr>
        <tr>
            <td>{{-- Pais de Origen: --}}{!!Form::label('paisOrigen', 'Pais de Origen:')!!}</td>
            <td>
                {!! Form::text('paisOrigen',$producto->paisOrigen)!!}
                {{-- <input type="text" name="paisOrigen" value= {{$producto->paisOrigen}}> --}}
            </td>
        </tr>
        <tr>
            <td>
                {{-- <input type="submit" name="enviar" value="Enviar"> --}}
                {!! Form::submit('Actualizar')!!}

            </td>
            <td>
                {{-- <input type="reset" name="Borrar" value="Borrar"> --}}
                {!! Form::reset('Borrar campo')!!}

            </td>
        </tr>
    </table>
{{-- </form> --}}
{!! Form::close() !!}

{{-- <form method="post" action="/productos/{{$producto->id}}">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="Eliminar registro">
</form> --}}
{!! Form::open(['method' => 'DELETE','action'=>['ProductosController@destroy',$producto->id]]) !!}

{!! Form::token()!!}

{!! Form::submit('Eliminar registro')!!}

{!! Form::close() !!}
    
@endsection
@section('pie')
    
@show