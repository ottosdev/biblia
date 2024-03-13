<?php

namespace App\infra\Services;

use App\infra\Repository\LivroRepository;

class LivroService
{
    public function __construct(protected LivroRepository $repository)
    {
    }

    public function obterTodosOsLivros()
    {
        return $this->repository->obterTodosOsLivros();
    }

    public function obterLivroPorId(int $id)
    {
        return $this->repository->obterLivroPorId($id);
    }

    public function salvarLivro(array $livro)
    {
        return $this->repository->create($livro);
    }

    public function atualizarLivro(array $livro, int $id)
    {
        return $this->repository->update($livro, $id);
    }

    public function deletarLivro($id)
    {
        return $this->repository->destroy($id);
    }
}
