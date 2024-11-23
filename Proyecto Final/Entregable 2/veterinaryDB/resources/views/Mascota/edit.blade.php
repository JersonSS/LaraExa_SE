<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Mascota</title>

    <link rel="stylesheet" href="{{ asset('css/editarStyle.css') }}">

</head>
<body>
   

    <form method="POST" action="{{ route('mascotas.update', $mascota) }}">
        @csrf {{-- Protege el formulario de ataques maliciosos --}}
        @method('put')
        <h3>¡Mascotas - Editar!</h3>
        Mascota ID: <input type="text" name="mascota_id" value="{{ $mascota->mascota_id }}" readonly="true" /> <br>

        Nombre: <input type="text" name="nombre" value="{{ old('nombre', $mascota->nombre) }}" />
        <span style="color: red;">
            @error('nombre')
                {{ $message }}
            @enderror
        </span>
        <br>

        Especie: <input type="text" name="especie" value="{{ old('especie', $mascota->especie) }}" />
        <span style="color: red;">
            @error('especie')
                {{ $message }}
            @enderror
        </span>
        <br>

        Raza: <input type="text" name="raza" value="{{ old('raza', $mascota->raza) }}" />
        <span style="color: red;">
            @error('raza')
                {{ $message }}
            @enderror
        </span>
        <br>

        Género:
        <select name="genero">
            <option value="H" {{ old('genero', $mascota->genero) == 'H' ? 'selected' : '' }}>Hembra</option>
            <option value="M" {{ old('genero', $mascota->genero) == 'M' ? 'selected' : '' }}>Macho</option>
        </select>
        <span style="color: red;">
            @error('genero')
                {{ $message }}
            @enderror
        </span>
        <br>

        Edad: <input type="number" name="edad" value="{{ old('edad', $mascota->edad) }}" />
        <span style="color: red;">
            @error('edad')
                {{ $message }}
            @enderror
        </span>
        <br>

        Color: <input type="text" name="color" value="{{ old('color', $mascota->color) }}" />
        <span style="color: red;">
            @error('color')
                {{ $message }}
            @enderror
        </span>
        <br><br>

        <button type="submit">Guardar</button>
        <button type="button" onclick="location.href='{{ url('/mascotas') }}'">Cancelar</button>
    </form>

</body>
</html>
