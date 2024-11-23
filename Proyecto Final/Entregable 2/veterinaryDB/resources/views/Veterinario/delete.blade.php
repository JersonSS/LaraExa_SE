<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/deleteStyle.css') }}">

</head>
<body>


<form method="POST" action="{{ route('veterinarios.destroy', $veterinario) }}" >
    @csrf {{-- para proteger el formularo de registro --}}

    <!-- directiva para usar el metodo DELETE -->
    @method('delete')
    <h3>¡Veterinarios - Borrar!</h3>
    Veterinario ID: <input type="text" name="veterinario_id" value="{{ $veterinario->veterinario_id }}" readonly="true"/> <br>
    Nombre: <input type="text" name="nombre" value="{{ $veterinario->nombre }}" readonly="true"/> <br>
  
    <p>¿Estas seguro de Eliminar?</p>

    <button type="submit">Si, Borrar</button>
    <button type="button" onclick="location.href='{{ url('/veterinarios') }}'">Cancelar</button>
</form>
</body>
</html>