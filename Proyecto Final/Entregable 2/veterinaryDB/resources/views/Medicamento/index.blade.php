<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Medicamentos</title>

    <link rel="stylesheet" href="{{ asset('css/listarStyle.css') }}">

</head>
<body>
    <h3>¡Medicamentos!</h3>
    <div>
        <table>
            <caption style="line-height: 30px">¡Medicamentos - Listar!</caption>
            <tr>
                <td><b>ID</b></td>
                <td><b>Nombre</b></td>
                <td><b>Descripción</b></td>
                <td><b>Cantidad</b></td>
                <td><b>Precio</b></td>
                <td><b>Acción</b></td>
            </tr>
            @foreach($listaMedicamentos as $medicamento)
                <tr>
                    <td>{{ $medicamento->medicamento_id }}</td>
                    <td>{{ $medicamento->nombre }}</td>
                    <td>{{ $medicamento->descripcion }}</td>
                    <td>{{ $medicamento->cantidad }}</td>
                    <td>{{ $medicamento->precio }}</td>
                    <td>
                        <a href="{{ route('medicamentos.edit',$medicamento) }}">Editar</a>
                        <a href="{{ route('medicamentos.delete',$medicamento) }}">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="link-container">
        <a href="{{ url('/medicamentos/create') }}">Registrar Medicamento</a>
        <a href="{{ url('/inicio') }}">Volver</a><br>
    </div>
</body>
</html>
