<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Mascota</title>

    <link rel="stylesheet" href="{{ asset('css/createStyle.css') }}">

</head>
<body>
    
    <form action="{{ route('mascotas.store') }}" method="POST">
        @csrf {{-- Para proteger el formulario de registro de ataques maliciosos --}}

        <h3>¡Mascotas - Registrar!</h3>

        Nombre: <input type="text" name="nombre" value="{{ old('nombre') }}"/>
        <span>
            @error('nombre')
                {{ $message }}
            @enderror
        </span>
        <br>

        Especie: <input type="text" name="especie" value="{{ old('especie') }}"/>
        <span>
            @error('especie')
                {{ $message }}
            @enderror
        </span>
        <br>

        Raza: <input type="text" name="raza" value="{{ old('raza') }}"/>
        <span>
            @error('raza')
                {{ $message }}
            @enderror
        </span>
        <br>

        Género: 
        <select name="genero">
            <option value="H" {{ old('genero') == 'H' ? 'selected' : '' }}>Hembra</option>
            <option value="M" {{ old('genero') == 'M' ? 'selected' : '' }}>Macho</option>
        </select>
        <span>
            @error('genero')
                {{ $message }}
            @enderror
        </span>
        <br>

        Edad: <input type="number" name="edad" value="{{ old('edad') }}"/>
        <span>
            @error('edad')
                {{ $message }}
            @enderror
        </span>
        <br>

        Color: <input type="text" name="color" value="{{ old('color') }}"/>
        <span>
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
