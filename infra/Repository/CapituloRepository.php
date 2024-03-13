<?php
namespace App\Infra\Repositories;
use \App\Infra\Repositories\BaseRepository;
use \App\Models\Capitulo;

class CapituloRepository extends  BaseRepository {
    protected $capitulo;

    public function __construct($capitulo) {
        $this->capitulo = $capitulo;
    }

}
