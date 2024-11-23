<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Propietarios</title>

    <link rel="stylesheet" href="{{ asset('css/listarStyle.css') }}">

</head>
<body>
    <h3>¡Aplicación WEB - Propietarios!</h3>
    <div>
        <table>
            <caption style="line-height: 30px">¡Propietarios - Listar!</caption>
            <tr>
                <td><b>ID</b></td>
                <td><b>DNI</b></td>
                <td><b>Nombre</b></td>
                <td><b>Apellido</b></td>
                <td><b>Teléfono</b></td>
                <td><b>Correo</b></td>
            </tr>
            @foreach($listaPropietarios as $propietario)
                <tr>
                    <td>{{ $propietario->propietario_id }}</td>
                    <td>{{ $propietario->dni }}</td>
                    <td>{{ $propietario->nombre }}</td>
                    <td>{{ $propietario->apellido }}</td>
                    <td>{{ $propietario->telefono }}</td>
                    <td>{{ $propietario->correo }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="link-container">
        <a href="{{ url('/inicio') }}">Volver</a><br>
    </div>
</body>
</html>
