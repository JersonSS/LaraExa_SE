<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
        <h3>¡Productos - Registrar!</h3>

        <form action="{{ route('productos.store') }}" method="POST">
            @csrf {{-- para proteger el formularo de registro de ataques maliciosos --}}

            Nombre: <input type="text" name="nombre" value="{{ old('nombre') }}"/>
            <span>
                @error('nombre')
                    {{ $message }}
                @enderror
            </span>
            <br>
            Marca: <input type="text" name="marca" value="{{ old('marca') }}"/>
            <span>
                @error('marca')
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
            <br>
            Fecha de vencimiento: <input type="date" name="fvencimiento" value="{{ old('fvencimiento') }}"/>
            <span>
                @error('fvencimiento')
                    {{ $message }}
                @enderror
            </span>
            <br>
            Stock: <input type="number" name="stock" value="{{ old('stock') }}"/>
            <span>
                @error('stock')
                    {{ $message }}
                @enderror
            </span>
            <!--php artisan lang:publish -> para ver los archivos y poder modificar para que el mensaje de error no sea en ingles
            se vera la carpeta lang, y dentro duplicar el arhivo en dentro de la carpeta lan y despues renombrar a "es" ->español, 
            despues copiar un codigo que modifique a español todas la varibles de la copia y
            despues ir al config/app.php y  cambiar 'locale'=>env('es') o 'es'
            o tambien se puede ir al archivo .env y modificar APP_LOCALE=es
                                                    APP_FALLBACK_LOCALE=es -->
            <br><br>
            
            <button type="submit">Guardar</button>
            <button type="button" onclick="location.href='{{ url('/productos') }}'">Cancelar</button>
        </form>

</body>
</html>
