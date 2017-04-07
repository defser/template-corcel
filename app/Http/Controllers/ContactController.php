<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Contact;
use View;
use Validator;
use Mail;
use Config;

class ContactController extends Controller
{
    public function index(){
        return View::make('contact.index');
    }

    public function sendForm(Request $request){

      //   $messages = [
      //     'name.required'    => 'O nome é obrigatório',
      //     'email.required' => 'Digite um e-mail válido',
      //     'message.required' => 'A mensagem é obrigatória',
      //     'phone.required'      => 'O telefone é obrigatório'
      // ];

      try{

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'phone' => 'required'
        ]);

        if ($validator->fails()) return response()->json(['message' => $validator->messages()], 400);

        $contact = new Contact;
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $phoneWithMasks = $request->input('phone');
        $contact->phone = preg_replace('/\D+/', '', $phoneWithMasks);
        $contact->message = $request->input('message');
        $contact->subject = $request->input('subject');

        Mail::send('forms.contacthome',
            [
                'email' => Config::get('mail.from.address'),
                'contact' => $contact,
                'phoneWithMasks' => $phoneWithMasks
            ],
            function ($m) use ($contact) {
                $m->from(Config::get('mail.from.address'), Config::get('mail.from.name'));
                $m->to(Config::get('mail.from.address'), Config::get('mail.from.name'))->subject('Formulário de Contato');
            }
        );

        return response()->json(['message' => 'success']);

      }catch(\Exception $e){
        return $e;
      }
    }
}
