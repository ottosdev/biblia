<?php

namespace App\infra\Services;

use App\infra\Repository\CapituloRepository;

class CapituloService
{
    protected $repository;

    public function __construct(CapituloRepository $repository)
    {
        $this->repository = $repository;
    }

    public function obterTodosOsCapitulos()
    {
        return $this->repository->obterTodosOsCapitulos();
    }

    public function buscarPorId(int $id)
    {
        return $this->repository->buscarPorId($id);
    }

    public function salvar(array $data)
    {
        return $this->repository->create($data);
    }

    public function atualizar(array $data, $id)
    {
        return $this->repository->update($data, $id);
    }

    public function deletar($id)
    {
        return $this->repository->destroy($id);
    }

}
