<!-- resources/views/perfil/editar.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar Perfil') }}</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ route('perfil.actualizar') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">{{ __('Nombre') }}</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', Auth::user()->name) }}" required>
                                <!-- Utilizamos old() para mantener el valor anterior si hay un error -->
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Correo Electrónico') }}</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', Auth::user()->email) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="profile_picture" class="form-label">{{ __('Foto de Perfil') }}</label>
                                <input type="file" class="form-control" id="profile_picture" name="profile_picture">
                            </div>

                            <div class="mb-3">
                                <img src="{{ asset('images/default-profile.jpg') }}" alt="Profile Picture" class="img-fluid rounded-circle shadow" style="width: 100px; height: 100px;">
                                <!-- Mostrar la imagen actual del perfil -->
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Guardar Cambios') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
