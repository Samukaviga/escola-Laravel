<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    use HasFactory;

    protected  $fillable = ['nome', 'nascimento', 'turmas_id'];
    protected $table = 'alunos';

    public function turmas() {

        return $this->belongsTo(Turmas::class);
    
    }

}
