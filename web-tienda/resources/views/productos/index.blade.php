<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <h3>¡Aplicación WEB !</h3>
    <div>
        <table>
            <caption style="line-height: 30px">¡Productos - Listar!</caption>
            <tr>
                <tr>
                    <td><b>ID</b></td>
                    <td><b>Nombre</b></td>
                    <td><b>Marca</b></td>
                    <td><b>Precio</b></td>
                    <td><b>F.Vencimiento</b></td>
                    <td><b>Stock</b></td>
                    <td><b>Acción</b></td>
                </tr>
                @foreach($baraja as $producto)
                    <tr>
                        <td>{{ $producto->producto_id }}</td>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->marca }}</td>
                        <td>{{ $producto->precio }}</td>
                        <td>{{ $producto->fvencimiento }}</td>
                        <td>{{ $producto->stock }}</td>
                        <td>
                            <a href="{{ route('productos.edit',$producto) }}">Editar</a>
                            <a href="{{ route('productos.delete',$producto) }}">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tr>
        </table><br>

    <a href="{{ url('/productos/create') }}">Registrar Producto</a>
    </div>
</body>
</html>
