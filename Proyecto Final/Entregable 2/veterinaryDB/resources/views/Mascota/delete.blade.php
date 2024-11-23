<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/deleteStyle.css') }}">

</head>
<body>


<form method="POST" action="{{ route('mascotas.destroy', $mascota) }}" >
    @csrf {{-- para proteger el formularo de registro --}}

    <!-- directiva para usar el metodo DELETE -->
    @method('delete')
    <h3>¡Mascotas - Borrar!</h3>
    Mascota ID: <input type="text" name="mascota_id" value="{{ $mascota->mascota_id }}" readonly="true"/> <br>
    Nombre: <input type="text" name="nombre" value="{{ $mascota->nombre }}" readonly="true"/> <br>
  
    <p>¿Estas seguro de Eliminar?</p>

    <button type="submit">Si, Borrar</button>
    <button type="button" onclick="location.href='{{ url('/mascotas') }}'">Cancelar</button>
</form>
</body>
</html>