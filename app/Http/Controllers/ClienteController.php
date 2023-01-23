<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client;

class ClienteController extends Controller
{
    public function listar()
    {
        $search = request('search');

        if ($search) {

            $clients = Client::where([
                ['razao_social', 'like', '%' . $search . '%']
            ])->get();
        } else {
            $clients = Client::all();
        }

        return view('home', ['clients' => $clients, 'search' => $search]);
    }

    public function criar()
    {
        return view('clients.create');
    }

    public function salvar(Request $request)
    {
        $client = new Client;

        $client->cnpj = $request->cnpj;
        $client->razao_social = $request->razao_social;
        $client->ie = $request->ie;
        $client->cep = $request->cep;
        $client->logradouro = $request->logradouro;
        $client->numero = $request->numero;
        $client->bairro = $request->bairro;
        $client->cidade = $request->cidade;
        $client->uf = $request->uf;
        $client->pais = $request->pais;

        $client->save();

        return redirect('/home')->with('msg', 'Cliente criado com sucesso!');
    }

    public function mostrarItem($id)
    {
        $client = Client::findOrFail($id);

        return view('clients.show', ['client' => $client]);
    }

    public function excluir($id)
    {
        Client::findOrFail($id)->delete();

        return redirect('/home')->with('msg', 'Usuario excluído com sucesso !');
    }

    public function editar($id)
    {
        $client = Client::findOrFail($id);

        return view('clients.edit', ['client' => $client]);
    }

    public function atualizar(Request $request)
    {
        Client::findOrFail($request->id)->update($request->all());

        return redirect('/home')->with('msg', 'Usuario editado com sucesso !');
    }
}
