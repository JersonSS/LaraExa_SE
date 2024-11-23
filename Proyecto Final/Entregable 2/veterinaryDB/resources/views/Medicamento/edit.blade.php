<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Medicamento</title>

    <link rel="stylesheet" href="{{ asset('css/editarStyle.css') }}">

</head>
<body>
   
    <form method="POST" action="{{ route('medicamentos.update', $medicamento) }}">
        @csrf
        @method('put')
        <h3>¡Medicamento - Editar!</h3>
        Medicamento ID: <input type="text" name="medicamento_id" value="{{ $medicamento->medicamento_id }}" readonly="true" /> <br>

        Nombre: <input type="text" name="nombre" value="{{ old('nombre', $medicamento->nombre) }}" />
        <span style="color: red;">
            @error('nombre')
                {{ $message }}
            @enderror
        </span>
        <br>

        Descripción: <input type="text" name="descripcion" value="{{ old('descripcion', $medicamento->descripcion) }}" />
        <span style="color: red;">
            @error('descripcion')
                {{ $message }}
            @enderror
        </span>
        <br>

        Cantidad: <input type="number" name="cantidad" value="{{ old('cantidad', $medicamento->cantidad) }}" />
        <span style="color: red;">
            @error('cantidad')
                {{ $message }}
            @enderror
        </span>
        <br>

        Precio: <input type="number" step="0.01" name="precio" value="{{ old('precio', $medicamento->precio) }}" />
        <span style="color: red;">
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
