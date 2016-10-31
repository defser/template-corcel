<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;
use App\Distribuidores;
use View;

class HomeController extends Controller
{
    public function index(){
        $distribuidores = Post::type('distribuidor')->status('publish')->get();
        return View::make('home.index')->with('distribuidores', $distribuidores);
    }

    public function sendForm(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        if ($validator->fails()) return response()->json(['message' => $validator->messages()], 400);


        $contact = new Contact;
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $phoneWithMasks = $request->input('phone');
        $contact->phone = preg_replace('/\D+/', '', $phoneWithMasks);
        $contact->message = $request->input('message');
        $contact->save();
        
        Mail::send('forms.contacthome', 
            [   
                'email' => Config::get('mail.from.address'), 
                'contact' => $contact,
                'phoneWithMasks' => $phoneWithMasks
            ], 
            function ($m) use ($contact) {
                $m->from(Config::get('mail.from.address'), Config::get('mail.from.name'));
                $m->to(Config::get('mail.from.address'), Config::get('mail.from.name'))->subject('Cardiocenter - Formulário de Contato');
            }
        );
        
        return response()->json(['message' => 'success']);
    }
}
