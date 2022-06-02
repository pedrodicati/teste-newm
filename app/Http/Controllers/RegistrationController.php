<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Symfony\Component\HttpFoundation\RequestStack;
use App\Http\Requests\ClientStoreRequest;

class RegistrationController extends Controller
{
    private $paginate = 10;

    public function index() {
        return view('welcome');
    }
    
    public function listClient() {
        $search = request('search');

        if($search) {
            $client = Client::where([
                ['name', 'like', '%'.$search.'%']
            ])->paginate(10);
        }
        else {
            $client = Client::paginate(10);
        }
        
        return view('clients', ['client' => $client]);
    }

    public function store(ClientStoreRequest $request) {
               
        $atributos = $request->all();
        
        $client = Client::create($atributos);       

        return redirect('/')->with('msg', 'Cliente criado com sucesso');
    }

    public function edit($id) {
        $client = Client::findOrFail($id);

        return view('edit', ['client' => $client]) ;
    }

    public function update(Request $request) {
        $event = Client::findOrFail($request->id)->update($request->all());

        return redirect('clients')->with('msg', 'Cliente editado com sucesso');
    }

    public function destroy($id) {
        Client::findOrFail($id)->delete();

        return redirect('clients')->with('msg', 'Cliente excluído com sucesso');
    }
}
