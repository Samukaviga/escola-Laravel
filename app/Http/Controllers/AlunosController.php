<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlunosFormRequest;
use Illuminate\Http\Request;
use App\Models\Turmas;
use App\Models\Alunos;

class AlunosController extends Controller
{

    public function index(Alunos $alunos, Turmas $turmas, Request $request)
    {
        $aluno = $alunos::with('turmas')->get();
        
        //$turmas::find($aluno->turmas_id); 

        $mensagemSucesso = session('mensagem.sucesso');
        session()->forget('mensagem.sucesso');
        return view('aluno.index')->with('mensagemSucesso', $mensagemSucesso)
                                    ->with('alunos', $aluno)
                                    ->with('turmas', $turmas::all());
    }

    public function create(Turmas $turmas, Request $request)
    {
        $turma = $turmas::all();
        return view('aluno.create')->with('turmas', $turma);
    }

  
    public function store(Turmas $turmas, Alunos $alunos, AlunosFormRequest $request)
    {
         $alunos::create([
            'turmas_id' => $request->turmas_id,
            'nome' => $request->nome,
            'nascimento' => $request->nascimento
        ]);

        return redirect('/alunos')->with('mensagem.sucesso', "$request->nome adicionado com sucesso!");
    }

    public function edit(Alunos $alunos, Turmas $turmas, Request $request)
    {
        $turma = $turmas::all();
        $aluno = $alunos::find($request->id);

        return view('aluno.edit')->with('aluno', $aluno)
                                    ->with('turmas', $turma);
    }

    public function update(AlunosFormRequest $request, Alunos $alunos )
    {
        $aluno = $alunos::find($request->id);
    
        $aluno->nome = $request->nome;
        $aluno->nascimento = $request->nascimento;
        $aluno->turmas_id = $request->turmas_id;
        $aluno->save();

        return redirect('/alunos')->with('mensagem.sucesso', "Aluno '$aluno->nome' Atualizado com sucesso!");
    }
    
    public function destroy(Alunos $alunos, Request $request)
    {
        $aluno = $alunos::find($request->id);

        $aluno::destroy($request->id);

        return redirect('/alunos')->with('mensagem.sucesso', "Aluno '$aluno->nome' removido com sucesso!");

    }

    public function show(){

    }

    public function pesquisar(Alunos $alunos, Request  $request, Turmas $turmas)
    {
        
        $aluno = $alunos::with('turmas')->where('nome','LIKE', "%{$request->nome}%")->get();

        return view('aluno.index')->with('alunos', $aluno)->with('turmas', $turmas::all());
        
    }

}
