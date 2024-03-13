<?php
namespace App\Infra\Services;
use \App\Infra\Repositories\VersiculoRepository;

class VersiculoService
{
    protected $repository;

    public function __construct(VersiculoRepository $repository)
    {
        $this->repository = $repository;
    }
}
