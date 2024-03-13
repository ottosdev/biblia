<?php

namespace App\Http\Controllers;

use App\infra\Services\LivroService;
use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function __construct(protected LivroService $livroService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->livroService->obterTodosOsLivros();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $livro = $this->livroService->salvarLivro($request->all());
        if (!$livro) {
            return response()->json(['message' => 'Error ao salvar livro'], 404);
        }

        return response()->json(['data' => $livro], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        return $this->livroService->obterLivroPorId($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Livro $livro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $livro = $this->livroService->atualizarLivro($request->all(), $id);

        if (!$livro) {
            return response()->json(['message' => 'Error ao realizar operação!']);
        }

        return response()->json(['message' => 'Livro atualizado com sucesso!'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $livro = $this->livroService->deletarLivro($id);

        if (!$livro) {
            return response()->json(['message' => 'Error ao realizar operação!']);
        }

        return response()->json(['message' => 'Livro deletado com sucesso!'], 200);
    }
}
