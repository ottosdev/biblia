<?php
namespace App\infra\Repository;

use App\Models\Capitulo;

class CapituloRepository extends  BaseRepository {

    public function __construct(protected Capitulo $capitulo) {
        parent::__construct($capitulo);
    }

    public function obterTodosOsCapitulos() {
        return $this->capitulo::with(['versiculos'])->get();
    }

    public function buscarPorId(int $id) {
        return $this->capitulo::with(['versiculos'])->find($id);
    }
}
