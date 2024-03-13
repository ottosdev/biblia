<?php

namespace App\Infra\Repositories;

use \App\Infra\Repositories\BaseRepository;
use \App\Models\Versiculo;

class VersiculoRepository extends BaseRepository
{
    protected $versiculo;

    public function __construct($versiculo)
    {
        $this->versiculo = $versiculo;
    }

}
