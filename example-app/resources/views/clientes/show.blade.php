@extends('layouts.master')
@section('title', 'home')
@section('content')
<p>Hola mi nombre es: <?php echo $nombre; ?></p> <!-- forma normal de imprimir variable PHP -->
<p>Hola mi nombre es: <?= $nombre; ?></p> <!-- otra forma mas corta de imprimir una variable de PHP -->
<p>Hola mi nombre es: {{$nombre}} </p> <!-- la forma correcta de llamar un variable en BLADE o en laravael creo-->
@endsection
