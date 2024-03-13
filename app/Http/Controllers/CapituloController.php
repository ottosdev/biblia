<?php

namespace App\Http\Controllers;

use App\infra\Services\CapituloService;
use App\Models\Capitulo;
use Illuminate\Http\Request;

class CapituloController extends Controller
{

    public function __construct(protected CapituloService $service)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->service->obterTodosOsCapitulos();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $capitulo = $this->service->salvar($request->all());
        if(!$capitulo) {
            return response()->json(['message' => 'Error ao salvar'], 404);
        }

        return response()->json(['data' => $capitulo], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $capitulo = $this->service->buscarPorId($id);
        if(!$capitulo) {
            return response()->json(['message' => 'Error ao buscar capitulo'], 404);
        }

        return response()->json(['data' => $capitulo], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Capitulo $capitulo)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $capitulo = $this->service->atualizar($request->all(), $id);
        if(!$capitulo) {
            return response()->json(['message' => 'Error ao salvar'], 404);
        }

        return response()->json(['message' => 'Capitulo Salvo com sucesso'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $capitulo = $this->service->deletar($id);
        if(!$capitulo) {
            return response()->json(['message' => 'Error ao deletar'], 404);
        }

        return response()->json(['message' => 'Capitulo deletado com sucesso'], 200);
    }
}
