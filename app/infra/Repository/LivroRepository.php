<?php

namespace App\infra\Repository;

use App\Models\Livro;

class LivroRepository extends BaseRepository
{

    public function __construct(protected Livro $livro)
    {
        parent::__construct($livro);
    }


    public function obterTodosOsLivros()
    {
        return $this->livro::with(['capitulos'])->get();
    }

    public function obterLivroPorId(int $id)
    {
        return $this->livro::with(['capitulos'])->find($id);
    }

}
