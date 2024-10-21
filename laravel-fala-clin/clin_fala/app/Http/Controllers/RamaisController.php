<?php

namespace App\Http\Controllers;

use App\Http\Requests\RamaisFormRequest;
use App\Models\Ramal;
use App\Models\Pessoa;
use Illuminate\Http\Request;

class RamaisController extends Controller
{
    public function create(Request $request)
    {
        // Carregar a lista de pessoas para associar o ramal
        $pessoa_id = $request->get('pessoa_id');
        $pessoa = Pessoa::findOrFail($pessoa_id);

        return view('ramais.create', compact('pessoa'));
    }

    public function store(RamaisFormRequest $request)
    {
        // Associar o ramal à pessoa selecionada
        $ramal = Ramal::create([
            'ramal' => $request->ramal,
        ]);

        // Atualizar a pessoa associada
        $pessoa = Pessoa::findOrFail($request->pessoa_id);
        $pessoa->ramal_id = $ramal->id;
        $pessoa->save();

        return redirect()->route('pessoas.index')->with('success', 'Ramal adicionado com sucesso!');
    }

    public function index()
    {
        // Listar os ramais associados às pessoas
        $ramais = Ramal::with('pessoas')->get();

        return view('ramais.index', compact('ramais'));
    }
}
