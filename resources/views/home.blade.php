@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">{{ __('Bienvenido ') }}@role('admin')administrador @endrole</div>
                    @role('admin')
                        <div class="card-body">
                            <div class="text-center mt-3">
                                <a href="{{ route('products.index')}}" class="btn btn-primary">Visita tu CRUD de productos</a>
                            </div>
                        </div>
                    @endrole
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            {{-- Barra lateral derecha --}}
            <div class="col-md-4 mt-5">
                <div class="card">
                    <div class="card-body text-center">
                        {{-- Mostrar información del usuario --}}
                        <h4 class="card-title text-primary">{{ Auth::user()->name }}</h4>
                        <p class="card-text text-muted">{{ Auth::user()->email }}</p>

                        {{-- Mostrar la foto de perfil del usuario --}}
                        <div class="mt-4">
                            <img src="{{ asset('images/' . Auth::user()->photo) }}" alt="Profile Picture" class="img-fluid rounded-circle shadow" style="width: 100px; height: 100px;">
                        </div>

                        {{-- Agregar botón de visitar perfil --}}
                        <div class="mt-4">
                            <a href="{{ route('perfil')}}" class="btn btn-primary btn-block">Editar Perfil</a>
                        </div>

                        {{-- Agregar botón de logout --}}
                        <div class="mt-3">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-block">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
