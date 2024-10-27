<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>
<body>
        <h3>¡Productos - Editar!</h3>

        <form method="POST" action="{{ route('productos.update', $producto) }}" >
            @csrf {{-- para proteger el formularo de registro --}}
            @method('put')
            Producto ID: <input type="text" name="producto_id" value="{{ $producto->producto_id }}" /> <br>
            Nombre: <input type="text" name="nombre" value="{{ $producto->nombre }}" /> <br>
            Marca: <input type="text" name="marca" value="{{ $producto->marca }}" /> <br>
            Precio: <input type="number" name="precio" step="any" value="{{ $producto->precio }}" /> <br>
            Fecha de vencimiento: <input type="date" name="fvencimiento" value="{{ $producto->fvencimiento }}" /> <br>
            Stock: <input type="number" name="stock" value="{{ $producto->stock }}" /> <br><br>

            <button type="submit">Guardar</button>
            <button type="button" onclick="location.href='{{ url('/productos') }}'">Cancelar</button>
        </form>

</body>
</html>
