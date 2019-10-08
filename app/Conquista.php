<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conquista extends Model
{
    // 
    protected $table = 'conquistas';
    public $primaryKey = 'id';
    protected $fillable = [
        'titulo', 'descricao', 'docentes', 'estudantes', 'campus', 'imagem'
    ];
}
