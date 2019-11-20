@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Productos</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Descripcion</th>
      <th>Precio</th>
      <th>Stock</th>
      <th>Tienda</th> 
    </tr>
    @foreach($productos as $producto)
      <tr>
        <th>{{$producto->name}}</th>
        <th>{{$producto->description}}</th>
        <th>{{$producto->price}}</th>
        <th>{{$producto->stock}}</th>
        <th>{{$producto->shop->name}}</th>       
    </tr>
    @endforeach
  </table>

@endsection
