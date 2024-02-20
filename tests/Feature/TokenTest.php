<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class TokenTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_task_list_can_be_retrieved(): void
    {
        // Cria um usuário de teste

        // Autentica o usuário de teste
        Sanctum::actingAs(User::factory()->create());

        // Faz a solicitação para a rota protegida
        $response = $this->get('/api/user');

        // Verifica se a resposta é bem-sucedida
        $response->assertOk();
    }
}
