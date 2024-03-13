<?php

namespace App\Http\Controllers;

use App\infra\Services\UserService;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function __construct(protected UserService $service)
    {
    }

    public function cadastroUsuario(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string',
        ]);

        $user = $this->service->criarUsuario($fields);

        return response()->json(['data' => $user], 201);
    }

    public function login(Request $request) {

        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        $user = $this->service->buscarUsuarioPorEmail($fields['email']);

        if(!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Credenciais invalidas',
            ], 401);
        }

        $token = $user->createToken('UsuarioLogado')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response()->json(['data' => $response], 201);
    }
}
