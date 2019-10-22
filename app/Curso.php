<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';
    public $primaryKey = 'id';
    protected $fillable = [
        'nome', 'ciclo', 'perfil_saida', 'plano_curicular', 'imagem','admissao',
        'regime', 'grau_id','variantes'
    ];
    public $timestamps = false;

    public function grau(){
        return $this->belongsTo('App\Grau');
    }
}
