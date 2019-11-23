<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;


class MailController extends Controller
{
    public function store(Request $request){

    	Mail::send('emails.contact',$request->all(), function(){
$msj->subject('Correo de Contacto');
$msj->to('kapikes@gmail.com');

    	});
    	Session::flash('message','Mensaje enviado correctamente');
    	return Redirect::to('/contacto');
    }
}
