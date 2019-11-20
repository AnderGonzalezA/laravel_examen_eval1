@extends('layouts.app')

@section('title', 'Tienda')

@section('content')

  <h2>Has introducido la siguiente tienda</h2>

  <h3>Id: {{$id}}</h3>
  <h3>Nombre: {{$request->nombre}}</h3>
  <h3>Descripcion: {{$request->descripcion}}</h3>
  <h3>Password: {{$request->contraseña}}</h3>
  <h3>Email: {{$request->email}}</h3>
  <h3>Likes: {{$request->likes}}</h3>

@endsection