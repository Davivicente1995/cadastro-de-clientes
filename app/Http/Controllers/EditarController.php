<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class EditarController
{
    public function edit($id)
{
    $clientes = Clientes::find($id);
    return view('edit', compact('clientes'));
}

public function update(Request $request, Clientes $cliente)
{
    $cliente->update($request->all());

    return redirect('/consulta')->with('success', 'Cliente atualizado com sucesso!');
}



}
