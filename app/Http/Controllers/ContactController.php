<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail; 

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'nom'          => 'required|string|max:255',
            'tel'          => 'nullable|string|max:20',
            'email'        => 'required|email',
            'objet'        => 'required|string|max:255',
            'message'      => 'required|string|min:10',
        ]);

        Mail::to('contact@ogowe-rdc.com')->send(new ContactMail($data));
        return redirect()->route('contact')->with('success', 'Votre message a été envoyé avec succès !');


    }

}
