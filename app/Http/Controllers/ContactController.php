<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Exception;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Renderiza a página de contatos
     * 
     * @return View
     */
    public function contact(){
        return view('contact');
    }

    /**
     * 
    */
    public function submitForm(Request $request){
        // Contact::create([
        //     'name'=>$request->name,
        //     'email'=>$request->email,
        //     'telephone'=>$request->telephone,
        //     'subject'=>$request->subject,
        //     'message'=>$request->message
        // ]);
    
        // return back()->withSuccess('Form sent.');

        try{
            Contact::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'telephone'=>$request->telephone,
                'subject'=>$request->subject,
                'message'=>$request->message
            ]);
        
            
        } catch(Exception $exception){
            return back()->withErrors($exception->getMessage());
        }
    }
}
