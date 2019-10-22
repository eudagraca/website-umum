<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageContent extends Model
{
    protected $table = 'page_contents';
    public $primaryKey = 'id';
    protected $fillable = [
        'texto', 'destaque', 'imagem_destaque','imagem_texto','page_id'
    ];
    public $timestamps = false;
}
