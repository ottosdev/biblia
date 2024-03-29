<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Versiculo extends Model
{
    use HasFactory;

    protected $fillable = ['capitulo_id', 'numero', 'texto'];

    public function capitulo()
    {
        return $this->belongsTo(Capitulo::class);
    }
}
