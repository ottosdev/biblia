<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'abreviacao', 'posicao_biblia', 'testamento'];

    public function capitulos() {
        return $this->hasMany(Capitulo::class);
    }

}
