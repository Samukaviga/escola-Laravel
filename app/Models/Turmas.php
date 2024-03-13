<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turmas extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'numero'];
    protected $table = 'turmas';

    public function alunos(){

        return $this->hasMany(Alunos::class);
    
    }
}
