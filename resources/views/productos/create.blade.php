@extends('layouts.plantilla')

@section('cabecera')
INSERTAR REGISTROS
    
@endsection

@section('contenido')


{!! Form::open(['url' => '/productos', 'method' => 'post','files'=>'true']) !!}
<!-- <form method="post" action="/productos"> -->
    <table>
        <tr>
            <td>
                {!! Form::file('file')!!}
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td>{{-- Nombre: --}}{!!Form::label('nombre', 'Nombre:')!!}</td>
            <td>
               {{--  <input type="text" name="nombreArticulo"> --}}

                {{-- {{csrf_field()}} --}}
                {!! Form::text('nombreArticulo')!!}
                {!! Form::token()!!}
            </td>
        </tr>
        <tr>
            <td>{{-- Sección: --}}{!!Form::label('seccion', 'Sección:')!!}</td>
            <td>
                {{-- <input type="text" name="seccion"> --}}
                {!! Form::text('seccion')!!}
                
            </td>
        </tr>
        <tr>
            <td>{{-- Precio: --}}{!!Form::label('precio', 'Precio:')!!}</td>
            <td>
                {!! Form::text('precio')!!}
                {{-- <input type="text" name="precio"> --}}
            </td>
        </tr>
        <tr>
            <td>{{-- Fecha: --}}{!!Form::label('fecha', 'Fecha:')!!}</td>
            <td>
                {{-- <input type="text" name="fecha"> --}}
                {!! Form::text('fecha')!!}

            </td>
        </tr>
        <tr>
            <td>{{-- Pais de Origen: --}}{!!Form::label('paisOrigen', 'Pais de Origen:')!!}</td>
            <td>
                {{-- <input type="text" name="paisOrigen"> --}}
                {!! Form::text('paisOrigen')!!}

            </td>
        </tr>
        <tr>
            <td>
                {{-- <input type="submit" name="enviar" value="Enviar"> --}}
                {!! Form::submit('Enviar')!!}

            </td>
            <td>
                {{-- <input type="reset" name="Borrar" value="Borrar"> --}}
                {!! Form::reset('Borrar')!!}

            </td>
        </tr>
    </table>
<!-- </form> -->
{!! Form::close() !!}

@if (count($errors)>0)
<ul>
    @foreach ($errors->all() as $error) 
      <li>  {{ $error }} </li>
    @endforeach
</ul>    
@endif
@endsection
@section('pie')
    
@show