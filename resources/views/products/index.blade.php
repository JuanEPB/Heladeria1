@extends('layouts.layout')
@section('content')
<div class="conteiner">
    <h2>Lista de Productos</h2>
    <a href="{{ route('products.create')}}" class="btn btn-primary">Nuevo producto</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Imagen</th>
                <th>Codigo(2 letras y 3  numeros)</th>
                <th>Sabor</th>
                <tH>Precio</tH>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <body>
            @foreach ($products as $product)
                <tr>
                    <td>
                        <img src="{{ asset('assets/images/' . $product->img) }}" alt="{{ $product->name }}" width="100">
                    </td>
                    <td>{{$product->cod}}</td>
                    <td>{{$product->sab}}</td>
                    <td>{{$product->pre}}</td>
                    <td>
                        <a href="{{ route('products.edit',$product->id)}}" class="btn btn-primary">Editar</a>
                    </td>
                    <td>
                        <a href="{{ route('products.delete',$product->id)}}" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>

            @endforeach
        </body>
    </table>
    {{$products->links()}}
</div>
@endsection
