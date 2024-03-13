<?php
namespace App\infra\Services;

use App\Models\User;

class UserService
{
    public function __construct(protected User $user) {}

    public function criarUsuario(array $data) {
        return $this->user->create($data);
    }

    public function buscarUsuarioPorEmail(string $email) {
        return $this->user::where('email', $email)->first();
    }
}
