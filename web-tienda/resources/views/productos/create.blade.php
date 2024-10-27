<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
        <h3>¡Productos - Registrar!</h3>

        <form action="{{ route('productos.store') }}" method="POST">
            @csrf {{-- para proteger el formularo de registro --}}
            Nombre: <input type="text" name="nombre"/><br>
            Marca: <input type="text" name="marca"/> <br>
            Precio: <input type="number" name="precio" step="any"/> <br>
            Fecha de vencimiento: <input type="date" name="fvencimiento"/><br>
            Stock: <input type="number" name="stock"/><br><br>

            <button type="submit">Guardar</button>
            <button type="button" onclick="location.href='{{ url('/productos') }}'">Cancelar</button>
        </form>

</body>
</html>
