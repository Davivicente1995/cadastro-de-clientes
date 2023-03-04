<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CadastroController
{
    public function create()
    {
        return view('cadastro');
    }

    public function store(Request $request)
    {
       //dd($request->all());
       Clientes::create($request->only(['nomeContato','cpfContato','dataNascContato','sexoContato','enderecoContato','estadoContato','cidadeContato']));

       return redirect('/consulta')->with('sucesso','Cadastro Realizado Com sucesso!');
    }
    public function index(Request $request)
    {
        $query = DB::table('clientes');
    
        $nomeContato = $request->input('nomeContato');
    
        if (!empty($nomeContato)) {
            $query->where('nomeContato', 'LIKE', '%' . $nomeContato . '%');
        }
    
        $clientes = $query->paginate(10);
    
        return view('consulta.index', compact('clientes'));
    }
    


}
