<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capitulo extends Model
{
    use HasFactory;

    protected $fillable = ['numero', 'explicacao', 'livro_id'];


    public function livro()
    {
        return $this->belongsTo(Capitulo::class);
    }

    public function versiculos()
    {
        return $this->hasMany(Versiculo::class);
    }
}
