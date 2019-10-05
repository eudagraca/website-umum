<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    //
    protected $table = 'banners';
    public $primaryKey = 'id';
    protected $fillable = [
        'titulo', 'descricao', 'imagem'
    ];
}
