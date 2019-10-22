<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grau extends Model
{
    protected $table = 'graus';
    public $primaryKey = 'id';
    protected $fillable = [
        'grau'];
    public $timestamps = false;

    public function curso()
    {
        return $this->hasOne('App\Curso');
    }

}
