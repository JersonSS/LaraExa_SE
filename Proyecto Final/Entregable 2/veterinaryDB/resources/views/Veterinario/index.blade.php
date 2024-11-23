<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Veterinarios</title>

    <link rel="stylesheet" href="{{ asset('css/listarStyle.css') }}">

</head>
<body>
    <h3>¡Veterinarios!</h3>
    <div>
        <table>
            <caption style="line-height: 30px">¡Veterinarios - Listar!</caption>
            <tr>
                <td><b>ID</b></td>
                <td><b>DNI</b></td>
                <td><b>Nombre</b></td>
                <td><b>Apellido</b></td>
                <td><b>Teléfono</b></td>
                <td><b>Especialidad</b></td>
                <td><b>Correo</b></td>
                <td><b>Fecha de Nacimiento</b></td>
                <td><b>Acción</b></td>
            </tr>
            @foreach($listaVeterinarios as $veterinario)
                <tr>
                    <td>{{ $veterinario->veterinario_id }}</td>
                    <td>{{ $veterinario->dni }}</td>
                    <td>{{ $veterinario->nombre }}</td>
                    <td>{{ $veterinario->apellido }}</td>
                    <td>{{ $veterinario->telefono }}</td>
                    <td>{{ $veterinario->especialidad }}</td>
                    <td>{{ $veterinario->correo }}</td>
                    <td>{{ $veterinario->fnacimiento }}</td>
                    <td>
                        <a href="{{ route('veterinarios.edit',$veterinario) }}">Editar</a>
                        <a href="{{ route('veterinarios.delete',$veterinario) }}">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="link-container">
        <a href="{{ url('/veterinarios/create') }}">Registrar Veterinario</a>
        <a href="{{ url('/inicio') }}">Volver</a><br>
    </div>
</body>
</html>
