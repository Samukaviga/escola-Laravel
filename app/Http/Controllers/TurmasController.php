<?php

namespace App\Http\Controllers;

use App\Http\Requests\TurmasFormRequest;
use Illuminate\Http\Request;
use App\Models\Turmas;

class TurmasController extends Controller
{

    public function index(Turmas $turmas, Request $request)
    {

        $turma = $turmas::all();

        $mensagemSucesso = session('mensagem.sucesso');
        session()->forget('mensagem.sucesso');
        
        return  view('turma.index')->with('mensagemSucesso', $mensagemSucesso)
                                    ->with('turmas', $turma);
    }


    public function create()
    {
        return  view('turma.create');
    }


    public function store(Turmas $turmas, TurmasFormRequest $request)
    {

        $turmas::create($request->all());
    
        return redirect('/turmas')->with('mensagem.sucesso', "Turma '$request->nome' adicionada com sucesso!");

    }

    public function edit(Turmas $turmas, Request $request)
    {   
           $turma = $turmas::find($request->id);
        
          return view('turma.edit')->with('turma', $turma);
    }


    public function update(Turmas $turmas, TurmasFormRequest $request)
    {
        $turma = $turmas::find($request->id);
        
        $turma->nome = $request->nome;
        $turma->numero = $request->numero;
        $turma->save();

        return redirect('/turmas')->with('mensagem.sucesso', "Turma '$turma->nome' atualizada com sucesso!");
    }


    public function destroy(Turmas $turmas, Request $request)
    {

        $turma = $turmas->find($request->id);

        $turmas::destroy($request->id);

        return redirect('/turmas')->with('mensagem.sucesso', "Turma '$turma->nome' deletada com sucesso!");
    }

    public function pesquisar(Turmas $turmas, Request $request)
    {
      
        $turma = $turmas::where('nome', 'LIKE', "%{$request->turma}%")->get();

        return view('turma.index')->with('turmas', $turma);

    }

    public function show($id)
    {
        //
    }
}
