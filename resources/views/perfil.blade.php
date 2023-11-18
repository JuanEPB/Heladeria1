<!-- resources/views/perfil/editar.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Perfil</h1>
    
    <form action="{{ route('perfil.actualizar') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $usuario->name }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $usuario->email }}">
        </div>
        <div class="mb-3">
            <label for="profile_picture" class="form-label">Foto de Perfil</label>
            <input type="file" class="form-control" id="profile_picture" name="profile_picture">
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
</div>
@endsection
