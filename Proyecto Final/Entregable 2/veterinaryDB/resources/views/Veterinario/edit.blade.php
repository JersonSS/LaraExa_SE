<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Veterinario</title>

    <link rel="stylesheet" href="{{ asset('css/editarStyle.css') }}">

</head>
<body>
    

    <form method="POST" action="{{ route('veterinarios.update', $veterinario) }}">
        @csrf
        @method('put')
        <h3>¡Veterinario - Editar!</h3>
        Veterinario ID: <input type="text" name="veterinario_id" value="{{ $veterinario->veterinario_id }}" readonly="true" /> <br>

        DNI: <input type="number" name="dni" value="{{ old('dni', $veterinario->dni) }}" />
        <span style="color: red;">
            @error('dni')
                {{ $message }}
            @enderror
        </span>
        <br>

        Nombre: <input type="text" name="nombre" value="{{ old('nombre', $veterinario->nombre) }}" />
        <span style="color: red;">
            @error('nombre')
                {{ $message }}
            @enderror
        </span>
        <br>

        Apellido: <input type="text" name="apellido" value="{{ old('apellido', $veterinario->apellido) }}" />
        <span style="color: red;">
            @error('apellido')
                {{ $message }}
            @enderror
        </span>
        <br>

        Teléfono: <input type="number" name="telefono" value="{{ old('telefono', $veterinario->telefono) }}" />
        <span style="color: red;">
            @error('telefono')
                {{ $message }}
            @enderror
        </span>
        <br>

        Especialidad: <input type="text" name="especialidad" value="{{ old('especialidad', $veterinario->especialidad) }}" />
        <span style="color: red;">
            @error('especialidad')
                {{ $message }}
            @enderror
        </span>
        <br>

        Correo: <input type="email" name="correo" value="{{ old('correo', $veterinario->correo) }}" />
        <span style="color: red;">
            @error('correo')
                {{ $message }}
            @enderror
        </span>
        <br>

        Fecha de Nacimiento: <input type="date" name="fnacimiento" value="{{ old('fnacimiento', $veterinario->fnacimiento) }}" />
        <span style="color: red;">
            @error('fnacimiento')
                {{ $message }}
            @enderror
        </span>
        <br><br>

        <button type="submit">Guardar</button>
        <button type="button" onclick="location.href='{{ url('/veterinarios') }}'">Cancelar</button>
    </form>
</body>
</html>
