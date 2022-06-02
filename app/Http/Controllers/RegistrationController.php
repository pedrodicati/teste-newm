<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class RegistrationController extends Controller
{
    public function index() {
        return view('welcome');
    }
    
    public function listClient() {
        $client = Client::all();

        return view('clients', ['client' => $client]);
    }

    public function store(Request $request) {
               
        $atributos = $request->all();
        
        $client = Client::create($atributos);       

        return redirect('/')->with('msg', 'Cliente criado com sucesso');
    }
}
