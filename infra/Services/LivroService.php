<?php
namespace App\Infra\Services;
use App\Infra\Repositories\LivroRepository;

class LivroService  {
    protected $repository;

    public function __construct(LivroRepository $repository) {
        $this->repository = $repository;
    }
 }
