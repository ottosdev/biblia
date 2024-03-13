<?php
namespace App\Infra\Services;
use App\Infra\Repositories\CapituloRepository;

class CapituloService  {
    protected $repository;

    public function __construct(CapituloRepository $repository) {
        $this->repository = $repository;
    }
 }
