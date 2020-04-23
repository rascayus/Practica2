<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicación Completa</title>
</head>
<body>
    <h1>Pagina para agregar usuarios</h1>
    {!! Form::open(['method' => 'POST','action' => 'AdminUsersController@store']) !!} {{-- 'route' => 'store' También funciona--}}
    {{Form::token()}}
        <table width="500">
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
                    {{Form::label('password', 'Password: ')}}
                </td>
                <td>
                    {{Form::text('password')}}
                </td>
            </tr>
            <tr>
                <td>
                    {{Form::label('email', 'E-Mail: ')}}
                </td>
                <td>
                    {{Form::text('email')}}
                </td>
            </tr>
            <tr>
                <td>
                    {{Form::label('email_verified_at', 'Verificar E-Mail: ')}}
                </td>
                <td>
                    {{Form::text('email_verified_at')}}
                </td>
            </tr>
            <tr>
                <td>
                    {{Form::label('rol_id', 'Rol: ')}}
                </td>
                <td>
                    {{Form::text('rol_id')}}
                </td>
            </tr>
            <tr>
                <td>
                    {{Form::submit('Crear usuario')}}
                </td>
                <td>
                    {{Form::reset('Borrar datos')}}
                </td>
            </tr>

        
        </table>
    {!! Form::close() !!}
</body>
</html>