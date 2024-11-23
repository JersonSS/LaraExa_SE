<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Medicamento</title>

    <link rel="stylesheet" href="{{ asset('css/createStyle.css') }}">

</head>
<body>
    <form action="{{ route('medicamentos.store') }}" method="POST">
        @csrf {{-- Protege el formulario contra ataques maliciosos --}}
        <h3>¡Medicamentos - Registrar!</h3>
        Nombre: <input type="text" name="nombre" value="{{ old('nombre') }}"/>
        <span>
            @error('nombre')
                {{ $message }}
            @enderror
        </span>
        <br>

        Descripción: <textarea name="descripcion">{{ old('descripcion') }}</textarea>
        <span>
            @error('descripcion')
                {{ $message }}
            @enderror
        </span>
        <br>

        Cantidad: <input type="number" name="cantidad" value="{{ old('cantidad') }}"/>
        <span>
            @error('cantidad')
                {{ $message }}
            @enderror
        </span>
        <br>

        Precio: <input type="number" name="precio" step="any" value="{{ old('precio') }}"/>
        <span>
            @error('precio')
                {{ $message }}
            @enderror
        </span>
        <br><br>

        <button type="submit">Guardar</button>
        <button type="button" onclick="location.href='{{ url('/medicamentos') }}'">Cancelar</button>
    </form>

</body>
</html>
