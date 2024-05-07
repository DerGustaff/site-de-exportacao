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
    public function submitForm(Request $request)
    {
        dd($request->all());
    }
}
