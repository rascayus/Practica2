@extends('layouts.plantilla')
@section('cabecera')

<h1>Galeria</h1>
    
@endsection

@section('infoGeneral')

<p>Aqui va el contenido principal de la página</p>
@if (count($alumnos))
<table width= '50%' border='1'>
    
        @foreach ($alumnos  as $persona)
         <tr>
            <td>{{$persona}}</td>     
        </tr>   
        @endforeach
    </table> 
    @else 
    {{ "Sin alumnos"}}
@endif  


       
   
@endsection

@section('pie')
    
@endsection