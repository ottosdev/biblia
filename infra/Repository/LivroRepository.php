<?php
namespace App\Infra\Repositories;

use \App\Infra\Repositories\BaseRepository;
use \App\Models\Livro;
class LivroRepository extends  BaseRepository {
    protected $livro;

    public function __construct($livro) {
        $this->livro = $livro;
    }

}
