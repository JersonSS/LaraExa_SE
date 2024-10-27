<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>
<body>
        <h3>¡Productos - Editar!</h3>

        <form method="POST" action="{{ route('productos.update', $producto) }}" >
            @csrf {{-- para proteger el formularo de registro --}}
            @method('put')
            Producto ID: <input type="text" name="producto_id" value="{{$producto->producto_id }}" readonly="true" /> <br>

            Nombre: <input type="text" name="nombre" value="{{ old('nombre',$producto->nombre) }}" />
            <span style="color: red;">
                @error('nombre')
                    {{ $message }}
                @enderror
            </span>
             <br>

            Marca: <input type="text" name="marca" value="{{ old('marca',$producto->marca) }}" />
            <span style="color: red;">
                @error('marca')
                {{ $message }}
                @enderror
            </span> 
            <br>

            Precio: <input type="number" name="precio" step="any" value="{{ old('precio',$producto->precio) }}" />
            <span style="color: red;">
                @error('precio')
                {{ $message }}
                @enderror
            </span> 
            <br>

            Fecha de vencimiento: <input type="date" name="fvencimiento" value="{{  old('fvencimiento',$producto->fvencimiento) }}" /> 
            <span style="color: red;">
                @error('fvencimiento')
                {{ $message }}
                @enderror
            </span>
            <br>
            Stock: <input type="number" name="stock" value="{{  old('stock',$producto->stock) }}" />
            <span style="color: red;">
                @error('stock')
                {{ $message }}
                @enderror
            </span> 
            <br><br>

            <button type="submit">Guardar</button>
            <button type="button" onclick="location.href='{{ url('/productos') }}'">Cancelar</button>
        </form>

</body>
</html>
