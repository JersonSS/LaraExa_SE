<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Mascotas</title>

    <link rel="stylesheet" href="{{ asset('css/listarStyle.css') }}">

</head>
<body>
    <h3>¡Aplicación WEB - Mascotas!</h3>
    <div>
        <table>
            <caption style="line-height: 30px">¡Mascotas - Listar!</caption>
            <tr>
                <td><b>ID</b></td>
                <td><b>Nombre</b></td>
                <td><b>Especie</b></td>
                <td><b>Raza</b></td>
                <td><b>Género</b></td>
                <td><b>Edad</b></td>
                <td><b>Color</b></td>
            </tr>
            @foreach($listaMascotas as $mascota)
                <tr>
                    <td>{{ $mascota->mascota_id }}</td>
                    <td>{{ $mascota->nombre }}</td>
                    <td>{{ $mascota->especie }}</td>
                    <td>{{ $mascota->raza }}</td>
                    <td>{{ $mascota->genero }}</td>
                    <td>{{ $mascota->edad }}</td>
                    <td>{{ $mascota->color }}</td>
                </tr>
            @endforeach
        </table>
    </div>

    <div class="link-container">
        <a href="{{ url('/inicio') }}">Volver</a><br>
    </div>
</body>
</html>
