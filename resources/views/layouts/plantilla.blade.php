<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .contenedor{
            background-color: #F00;
            text-align: center;

        }
        .infoGeneral{
            background-color: #00F;
            margin: 200px;
            color: #FFF;

        }
        .pie{
            background-color: #FF0;

        }



    </style>
</head>
<body>
    <div class="contenedor">

    @yield('cabecera')

    </div>

<div class="infoGeneral">

    @yield('infoGeneral')

</div>

<div class="pie">
    @yield('pie')
 Aqui va el texto del pie
</div>
</body>
</html>
