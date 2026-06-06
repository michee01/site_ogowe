<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail; 

class ContactController extends Controller
{
    public function send(Request $request)
    {
        //dd($request->method());
        $data = $request->validate([
            'nom'          => 'required|string|max:255',
            'tel'          => 'nullable|string|max:20',
            'email'        => 'required|email',
            'objet'        => 'required|string|max:255',
            'message'      => 'required|string|min:10',
        ]);

        //$data = $request->all();
        // Envoi de l'email aubikan@gitsrdc.com
        Mail::to('contact@ogowe-rdc.com')->send(new ContactMail($data));
        return redirect()->route('contact')->with('success', 'Votre message a été envoyé avec succès !');


    }

}


        /*
        try {
            Mail::send('emails.contact', $data, function ($message) use ($data) {
                $message->to('micheevala@gmail.com')
                        ->subject('Nouveau message de contact : ' . $data['objet'])
                        ->replyTo($data['email'], $data['nom'].' '.$data['prenom']);
            });

            return redirect()->route('contact')->with('success', 'Votre message a été envoyé avec succès !');
        } catch (\Exception $e) {
            return redirect()->route('contact')->with('error', 'Une erreur est survenue lors de l’envoi de votre message.');
        }
        */

        // Données à envoyer
        // mailto:info@plurielles.cd
        // Envoi de l'email