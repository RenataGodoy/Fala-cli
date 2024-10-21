<?php

namespace App\Http\Controllers;

use App\Http\Requests\PessoasFormRequest;
use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoasController extends Controller
{
    public function create()
    {
        return view('pessoas.create');
    }

    public function store(PessoasFormRequest $request)
    {
        // Validação e criação da pessoa
        $pessoa = Pessoa::create($request->validated());

        return to_route('ramais.create', ['pessoa_id' => $pessoa->id])
            ->with('mensagem.sucesso', 'Pessoa criada com sucesso! Agora, adicione um ramal.');
    }

    public function index()
    {
        $pessoas = Pessoa::with('ramal')->get(); // Carregar o ramal associado

        return view('pessoas.index', compact('pessoas'));
    }
}
