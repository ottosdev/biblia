<?php
namespace App\infra\Services;
use App\infra\Repository\VersiculoRepository;

class VersiculoService
{
    protected $repository;

    public function __construct(VersiculoRepository $repository)
    {
        $this->repository = $repository;
    }

    public function buscarTodos() {
        return $this->repository->getAll();
    }

    public function buscarPorId(int $id) {
        return $this->repository->find($id);
    }

    public function salvar(array $data) {
        return $this->repository->create($data);
    }

    public function atualizar(array $data, int $id) {
        return $this->repository->update($data, $id);
    }

    public function deletar(int $id) {
        return $this->repository->destroy($id);
    }
}
