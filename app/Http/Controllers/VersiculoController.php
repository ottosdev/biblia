<?php

namespace App\Http\Controllers;

use App\infra\Services\VersiculoService;
use App\Models\Versiculo;
use Illuminate\Http\Request;

class VersiculoController extends Controller
{

    public function __construct(protected VersiculoService $service)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->service->buscarTodos();
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
        $versiculo = $this->service->salvar($request->all());
        if(!$versiculo) {
            return response()->json(['message' => 'Error ao salvar'], 404);
        }

        return response()->json(['data' => $versiculo], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $versiculo = $this->service->buscarPorId($id);
        if(!$versiculo) {
            return response()->json(['message' => 'Error ao buscar versiculo'], 404);
        }

        return response()->json(['data' => $versiculo], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Versiculo $versiculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $versiculo = $this->service->atualizar($request->all(), $id);
        if(!$versiculo) {
            return response()->json(['message' => 'Error ao salvar'], 404);
        }

        return response()->json(['message' => 'Versiculo Salvo com sucesso'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $versiculo = $this->service->deletar($id);
        if(!$versiculo) {
            return response()->json(['message' => 'Error ao deletar'], 404);
        }

        return response()->json(['message' => 'Versiculo deletado com sucesso'], 200);
    }
}
