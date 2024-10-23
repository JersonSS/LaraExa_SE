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
                </tr>
                @foreach($baraja as $carta)
                    <tr>
                        <td>{{ $carta->producto_id }}</td>
                        <td>{{ $carta->nombre }}</td>
                        <td>{{ $carta->marca }}</td>
                        <td>{{ $carta->precio }}</td>
                        <td>{{ $carta->fvencimiento }}</td>
                        <td>{{ $carta->stock }}</td>
                    </tr>
                @endforeach
            </tr>
        </table>
    </div>
</body>
</html>
