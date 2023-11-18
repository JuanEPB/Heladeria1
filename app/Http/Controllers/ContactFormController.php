<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class ContactFormController extends Controller
{
    public function enviar(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Envía el correo electrónico
        Mail::to('destinatario@example.com')->send(new ContactMessage($request));

        return redirect('/')->with('success', '¡El mensaje ha sido enviado correctamente!');
    }
}
