<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de la página</title>
    <style>
        .imagenCabecera
        {
            float: right;
            padding-right:150px;
            width:75px;
        }
        .cabecera
        {
            text-align: center;
            font-size: x-large;
            font-family: Tahoma, Geneva, sans-serif;
            margin-bottom: 100px;
            color: #090;
        }
        .contenido form,table
        {
            width: 500px;
            margin: 0 auto;
        }
        .pie
        {
            position: fixed;
            bottom: 0px;
            width: 100%;
            font-size: 0.7em;
            margin-bottom: 15px;
        }


    </style>
</head>
<body>
    
<div class="cabecera">
    <img src="/imagenes/logo.png" alt="logo" class="imagenCabecera">
    
@yield('cabecera')

</div>

<div class="contenido">

    @yield('contenido')

</div>
 <div class="pie">

    @yield('pie')
    Pildoras informáticas. Cursos de informática. Todos los derechos reservados.

 </div>

</body>
</html>