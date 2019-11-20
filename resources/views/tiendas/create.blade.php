@extends('layouts.app')

@section('title', 'Examen')

@section('content')

  <h3>Nueva tienda</h3>
  <form action="{{route('tiendas.store')}}" method="post">
    @csrf
    Nombre:<br>
    <input type="text" name="nombre"><br>
    Descripción:<br>
    <input type="text" name="descripcion"><br>
    Contraseña:<br>
    <input type="password" name="contraseña"><br>
    Email:<br>
    <input type="email" name="email"><br>
    Likes:<br>
    <input type="number" name="likes">
    <br><br>

    <button class="buttonform" type="submit" name="submit">Crear</button>
  </form>
  <br>

@endsection
