<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>¡Productos - Borrar!</h3>

<form method="POST" action="{{ route('productos.destroy', $producto) }}" >
    @csrf {{-- para proteger el formularo de registro --}}

    <!-- directiva para usar el metodo DELETE -->
    @method('delete')
    Producto ID: <input type="text" name="producto_id" value="{{ $producto->producto_id }}" readonly="true"/> <br>
    Nombre: <input type="text" name="nombre" value="{{ $producto->nombre }}" readonly="true"/> <br>
  
    <p>¿Estas seguro de Eliminar?</p>

    <button type="submit">Si, Borrar</button>
    <button type="button" onclick="location.href='{{ url('/productos') }}'">Cancelar</button>
</form>
</body>
</html>