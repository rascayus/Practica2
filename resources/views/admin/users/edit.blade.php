<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicación Completa</title>
</head>
<body>
    <h1>Pagina para modificar usuarios</h1>
    {!! Form::model($user, ['method' => 'PATCH','action' => ['AdminUsersController@update', $user->id], 'files'=>true]) !!} {{-- 'route' => 'users.store' También funciona--}}
    {{Form::token()}}
        <table width="500">
            <tr>
                <td colspan="2">
                   <img src="/images/{{ $user->foto ? $user->foto->ruta_foto:"generico.jpeg"}}" width="100" alt="">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    {{Form::file('foto_id')}}
                </td>
            </tr>
             <tr>
                <td>
                    {{Form::label('name', 'Nombre: ')}}
                </td>
                <td>
                    {{Form::text('name')}}
                </td>
            </tr>
            <tr>
                <td>
                    {{Form::label('role_id', 'Rol: ')}}
                </td>
                <td>
                    {{Form::text('role_id')}}
                </td>
            </tr>
           <tr>
                <td>
                    {{Form::submit('Modificar usuario')}}
                </td>
                <td>
                    {{Form::reset('Borrar datos')}}
                </td>
            </tr>

        
        </table>
    {!! Form::close() !!}
</body>
</html>