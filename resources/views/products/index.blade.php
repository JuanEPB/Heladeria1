@role('admin')
@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="mb-3">
        <a href="{{ route('home') }}" class="btn btn-primary">Regresar a Home</a>
        <a href="{{ route('products.create')}}" class="btn btn-primary">Nuevo Producto</a>
    </div>
    <h2>Lista de Productos</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Imagen</th>
                <th>Código</th>
                <th>Sabor</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>
                        <img src="{{ asset('assets/images/' . $product->img) }}" alt="{{ $product->name }}" width="100">
                    </td>
                    <td>{{$product->cod}}</td>
                    <td>{{$product->sab}}</td>
                    <td>{{$product->desc}}</td>
                    <td>{{$product->pre}}</td>
                    <td>
                        <a href="{{ route('products.edit',$product->id)}}" class="btn btn-primary">Editar</a>
                    </td>
                    <td>
                        <a href="{{ route('products.delete',$product->id)}}" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pagination">
        {{$products->links()}}
    </div>
</div>
@endsection
@endrole
