<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ConsultaController
{
    public function index(Request $request)
    {
        // Verifique se o botão de pesquisa foi clicado
        if ($request->has('btnPesquisa')) {
            // Recupera as entradas do formulário
            $cpfContato = $request->input('cpfContato');
            $nomeContato = $request->input('nomeContato');
            $dataNascContato = $request->input('dataNascContato');
            $sexoContato = $request->input('sexoContato');
            $enderecoContato = $request->input('enderecoContato');
            $estadoContato = $request->input('estadoContato');
            $cidadeContato = $request->input('cidadeContato');

            // Use as entradas do formulário para fazer a pesquisa
            $consulta = Clientes::where('cpfContato', 'LIKE', '%'.$cpfContato.'%')
                ->where('nomeContato', 'LIKE', '%'.$nomeContato.'%')
                ->where('dataNascContato', 'LIKE', '%'.$dataNascContato.'%')
                ->where('sexoContato', 'LIKE', '%'.$sexoContato.'%')
                ->where('enderecoContato', 'LIKE', '%'.$enderecoContato.'%')
                ->where('estadoContato', 'LIKE', '%'.$estadoContato.'%')
                ->where('cidadeContato', 'LIKE', '%'.$cidadeContato.'%')
                ->get();

            // Retorna a página de consulta com os resultados
            return view('consulta', ['consulta' => $consulta]);
        }

        // Retorna a página de consulta sem resultados
        $clientes = Clientes::all();
        return view('consulta')->with('consulta', $clientes);
    }
}
