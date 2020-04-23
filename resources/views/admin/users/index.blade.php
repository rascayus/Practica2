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
                <th scope="col">Foto</th>
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

                        <td>
                           <img src="/images/{{ $user->foto ? $user->foto->ruta_foto:"generico.jpeg"}}" width="100" alt="">
                           {{--  @if ($user->foto)
                                <img src="/images/{{ $user->foto->ruta_foto}}" width="100" alt="">
                            @else    <img src="/images/generico.jpeg" width="100" alt="">
                            @endif --}}
                        </td>
                        <td>{{ $user->role_id}}</td>
                        <td><a href="{{route('users.edit',$user->id)}}">{{ $user->name}}</a></td>
                        <td>{{ $user->email}}</td>
                        <td>{{ $user->created_at}}</td>
                        <td>{{ $user->updated_at}}</td>

                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="7">
                           <a href="{{route('users.create')}}"><button>Nuevo Usuario</button></a>
                        </td>
                    </tr>
            @endif
        </table>

</body>
</html>