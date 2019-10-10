<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $table = 'documentos';
    public $primaryKey = 'id';
    protected $fillable = [
        'referencia', 'nome', 'descricao', 'tag', 'ficheiro'
    ];
}
