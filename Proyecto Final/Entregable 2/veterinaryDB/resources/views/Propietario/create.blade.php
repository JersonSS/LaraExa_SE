<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Propietario</title>

    <link rel="stylesheet" href="{{ asset('css/createStyle.css') }}">

</head>
<body>
    

    <form action="{{ route('propietarios.store') }}" method="POST">
        @csrf {{-- Protege el formulario contra ataques maliciosos --}}
        <h3>¡Propietarios - Registrar!</h3>
        DNI: <input type="number" name="dni" value="{{ old('dni') }}"/>
        <span>
            @error('dni')
                {{ $message }}
            @enderror
        </span>
        <br>

        Nombre: <input type="text" name="nombre" value="{{ old('nombre') }}"/>
        <span>
            @error('nombre')
                {{ $message }}
            @enderror
        </span>
        <br>

        Apellido: <input type="text" name="apellido" value="{{ old('apellido') }}"/>
        <span>
            @error('apellido')
                {{ $message }}
            @enderror
        </span>
        <br>

        Teléfono: <input type="number" name="telefono" value="{{ old('telefono') }}"/>
        <span>
            @error('telefono')
                {{ $message }}
            @enderror
        </span>
        <br>

        Correo: <input type="email" name="correo" value="{{ old('correo') }}"/>
        <span>
            @error('correo')
                {{ $message }}
            @enderror
        </span>
        <br><br>

        <button type="submit">Guardar</button>
        <button type="button" onclick="location.href='{{ url('/propietarios') }}'">Cancelar</button>
    </form>

</body>
</html>
