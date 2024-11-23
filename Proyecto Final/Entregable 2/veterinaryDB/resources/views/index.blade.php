<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina de inicio</title>

    <link rel="stylesheet" href="{{ asset('css/indexStyle.css') }}">

</head>
<body>
    <div class="link-container">
        <a href="{{ url('/propietarios') }}">Lista de Propietarios</a><br>
        <a href="{{ url('/mascotas') }}">Lista de Mascotas</a><br>
        <a href="{{ url('/veterinarios') }}">Lista de Veterinarios</a><br>
        <a href="{{ url('/medicamentos') }}">Lista de Medicamentos</a><br>
    </div>
</body>
</html>
