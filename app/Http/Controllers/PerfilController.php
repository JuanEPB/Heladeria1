<?php


// app/Http/Controllers/PerfilController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class PerfilController extends Controller
{
    public function editar()
    {
        // Obtener el usuario autenticado
        $usuario = Auth::user();

        return view('perfil', compact('usuario'));
    }

    public function actualizar(Request $request)
    {
        // Validación de campos
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'profile_picture' => 'image|max:2048', // image validation already checks file type
        ]);

        if ($validator->fails()) {
            return redirect()->route('perfil.editar')
                ->withErrors($validator)
                ->withInput();
        }

        // Obtener el usuario autenticado
        $usuario = Auth::user();

        // Actualizar campos de manera segura
        $usuario->fill([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        // Actualizar la foto de perfil si se proporcionó una nueva
        if ($request->hasFile('profile_picture')) {
            $fotoPerfil = $request->file('profile_picture');
            $nombreFoto = $fotoPerfil->getClientOriginalName(); // Obtener el nombre original del archivo

            // Asegurarse de que el archivo se haya subido correctamente
            if ($fotoPerfil->isValid()) {
                $fotoPerfil->move(public_path('images'), $nombreFoto);

                // Almacenar el nombre de la foto en la base de datos en la columna 'photo'
                $usuario->photo = $nombreFoto;
            } else {
                // Manejar el error de subida de archivo
                return redirect()->route('perfil.editar')
                    ->withErrors(['profile_picture' => 'Error al subir la imagen'])
                    ->withInput();
            }
        }

        // Guardar los cambios
        $usuario->save();

        // Mensaje de éxito
        Alert::success('Éxito', 'Perfil actualizado con éxito');

        return redirect()->route('home');
    }
}


