@extends('layouts.layout')
@section('content')

<div class="container">
    <h2>Actualizar Producto</h2>

    {{ Form::model($pro, ['route' => ['products.update', $pro->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
        <input type='hidden' value="{{$pro->id}}" name='id'>

        <div class="form-group">
            {{ Form::label('img', 'Imagen del producto') }}
            <input type="file" name="img" class="form-control">
            @error('img')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            {{ Form::label('cod', 'Código del producto') }}
            {{ Form::text('cod', $pro->cod, ['class' => 'form-control']) }}
            @error('cod')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            {{ Form::label('sab', 'Sabor del producto') }}
            {{ Form::text('sab', $pro->sab, ['class' => 'form-control']) }}
            @error('sab')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            {{ Form::label('pre', 'Precio del producto') }}
            {{ Form::number('pre', $pro->pre, ['class' => 'form-control']) }}
            @error('pre')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
        </div>
    {{ Form::close()}}
</div>

@endsection
