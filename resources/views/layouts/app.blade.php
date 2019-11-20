<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.head')
	<title>@yield('title')</title>
</head>
<body>

    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Relations
            </div>

            <div class="links">
                <a href="">Menu</a>
                <a href="git">git</a>
                <a href="{{route('tiendas.create')}}">Crear tienda</a>
                <a href="{{route('productos.index')}}">Listado de productos</a>
            </div>
            <hr><br><br>
            <div class="op">
                @yield('content')
            </div>
        </div>
    </div>

	<footer class="footer">
		@include('layouts.footer')
	</footer>

</body>
</html>
