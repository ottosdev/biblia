<?php

namespace App\infra\Repository;

use App\Models\Versiculo;

class VersiculoRepository extends BaseRepository
{
    public function __construct(protected Versiculo $versiculo)
    {
        parent::__construct($versiculo);
    }
}
