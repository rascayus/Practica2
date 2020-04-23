<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicación Completa</title>
</head>
<body>
        <h1>Pagina principal del administrador</h1>

        <table width="500" border="1">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Role Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Creado</th>
                <th scope="col">Actualizado</th>
            </tr>
            @if($users)
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id}}</td>
                        <td>{{ $user->role_id}}</td>
                        <td>{{ $user->name}}</td>
                        <td>{{ $user->email}}</td>
                        <td>{{ $user->created_at}}</td>
                        <td>{{ $user->updated_at}}</td>
                    </tr>
                @endforeach
            @endif
        </table>

</body>
</html>