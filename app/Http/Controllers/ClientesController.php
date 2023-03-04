<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;


class ClientesController
{
    public function update(Request $request, Clientes $cliente)
    {
    $cliente->update($request->all());

    return redirect('/consulta')->with('success', 'Cliente atualizado com sucesso!');
    }

    public function destroy(Clientes $cliente)
    {
    $cliente = Clientes::findOrFail($cliente->id);
    $cliente->delete();
    return redirect('/consulta')->with('success', 'Cliente apagado com sucesso!');
    }
}
