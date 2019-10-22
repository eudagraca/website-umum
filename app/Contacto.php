<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $table = 'contactos';
    public $primaryKey = 'id';
    protected $fillable = [
        'celular', 'whatsapp', 'email', 'localizacao'
    ];
    public $timestamps = false;
}
