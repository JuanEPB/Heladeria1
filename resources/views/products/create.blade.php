@extends('layouts.layout')

@section('content')
    <div class="container">
        {{ Form::open(['route' => 'products.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}

        <div class="form-group">
            {{ Form::label('img', 'imagen del producto') }}
            {{ Form::file('img', ['class' => 'form-control']) }}
            @error('img')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            {{ Form::label('cod', 'Código del producto') }}
            {{ Form::text('cod', null, ['class' => 'form-control']) }}
            @error('cod')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            {{ Form::label('sab', 'sabor del producto') }}
            {{ Form::text('sab', null, ['class' => 'form-control']) }}
            @error('sab')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            {{ Form::label('pre', 'precio del producto') }}
            {{ Form::number('pre', null, ['class' => 'form-control']) }}
            @error('pre')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group">
            {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
        </div>

        {{ Form::close() }}
    </div>
@endsection
