<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Propietario</title>

    <link rel="stylesheet" href="{{ asset('css/editarStyle.css') }}">

</head>
<body>
    

    <form method="POST" action="{{ route('propietarios.update', $propietario) }}">
        @csrf
        @method('put')
        <h3>¡Propietario - Editar!</h3>
        Propietario ID: <input type="text" name="propietario_id" value="{{ $propietario->propietario_id }}" readonly="true" /> <br>

        DNI: <input type="number" name="dni" value="{{ old('dni', $propietario->dni) }}" />
        <span style="color: red;">
            @error('dni')
                {{ $message }}
            @enderror
        </span>
        <br>

        Nombre: <input type="text" name="nombre" value="{{ old('nombre', $propietario->nombre) }}" />
        <span style="color: red;">
            @error('nombre')
                {{ $message }}
            @enderror
        </span>
        <br>

        Apellido: <input type="text" name="apellido" value="{{ old('apellido', $propietario->apellido) }}" />
        <span style="color: red;">
            @error('apellido')
                {{ $message }}
            @enderror
        </span>
        <br>

        Teléfono: <input type="number" name="telefono" value="{{ old('telefono', $propietario->telefono) }}" />
        <span style="color: red;">
            @error('telefono')
                {{ $message }}
            @enderror
        </span>
        <br>

        Correo: <input type="email" name="correo" value="{{ old('correo', $propietario->correo) }}" />
        <span style="color: red;">
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
