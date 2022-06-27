<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Contactos;
use Illuminate\Support\Facades\DB;
use Mail;

class ContactosController extends Controller
{
    //

public function contactos()
{
    return view('contactos');

}


public function contactosPost(Request $request)
{
    $this->validate($request, [

     'name' => 'required',

     'email' => 'required|email',

     'message' => 'required'

     ]);

    Contactos::create($request->all());
     Mail::send('email',
     array(
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'user_message' => $request->get('message')

    ), function($message)
  
    {
    $message->from('techanical-atom@gmail.com');

    $message->to('user@example.com', 'Admin')

    ->subject('Contact Form Query');

   });

return back()->with('success', 'Gracias por contactarnos');

}


}