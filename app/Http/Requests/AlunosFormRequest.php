<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunosFormRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => ['required', 'min:3'],
            'turmas_id' => ['required', 'min:1'],
            'nascimento' => ['required', 'before:' . now()->subYears(12)->format('Y-m-d')]
        ];
    }

    public function messages() 
    {
        return [
            'nascimento.before' => 'O aluno precisa ter pelo menos 12 anos',
        ];
    }
}
