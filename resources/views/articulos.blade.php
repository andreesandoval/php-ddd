@extends('welcome')

@section('contenido')

LISTADO DE ARTICULOS {{ $articulos[0]->clasificacion + 1 }}
<hr>
<div class="row d-flex justify-content-center ">
    @foreach($articulos as $a)
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Imagen{{ $a->id}}">
        <div class="card-body">
        <h5 class="card-title">PRODUCTO: {{ $a->nombre}}</h5>
        <p class="card-text">DESCRIPCION: {{ $a->descripcion}}</p>
        @if($a->descuentoPromocional)
        <p class="card-text">DESCUENTO: {{ $a->descuentoPromocional}}%</p>
        @endif
        <p class="card-text">PRECIO: Eur {{ $a->precio}}</p>
        
        <p class="card-text">DISPONIBLES: {{ $a->cantidad}}</p>
        <a href="#" class="btn btn-primary">Agregar a carrito</a>
        <a href="#" class="btn btn-danger">Eliminar de Carrito</a>
        </div>
    </div>

    @endforeach
</div>
@yield('contenido3')

@endsection
