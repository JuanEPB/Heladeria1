@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Bienvenido</h1>

    @role('admin')
    <p>Administrador</p>
    @endrole

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Haz iniciado sesion  ') }}

                    <div class="button-container">
                        <p class="parrafo"><a href="{{ route('perfil')}}"><button class="profile-button">VISTA DE PERFIL</button></a></p>
                        @role('admin')
                        <p class="parrafo"><a href="{{ route('products.index')}}"><button class="profile-button">Visita tu CRUD de productos</button></a></p>
                        @endrole
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    body {
        background-color: #f0f0f0;
        text-align: center;
        font-family: Arial, sans-serif;
    }

    form {
        margin-top: 20px;
    }

    button[class="profile-button"]{
        background-color: #ff5733;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    .parrafo {
        margin-top: 20px;
    }

    .button-container {
        text-align: center; /* Center the buttons horizontally */
    }

    .profile-button, .sell-button {
        width: 165px;
        height: 60px;
        cursor: pointer;
        color: white;
        font-size: 16px;
        font-weight: bold;
        border-radius: 3rem;
        background-color: #3498db; /* Change to your desired color */
        border: 2px solid #3498db; /* Change to your desired color */
        transition: 0.3s;
    }

    .profile-button:hover, .sell-button:hover {
        background-color: #2980b9; /* Change to your desired hover color */
        border: 2px solid #2980b9; /* Change to your desired hover color */
    }
</style>
