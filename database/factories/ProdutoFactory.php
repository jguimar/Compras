<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categoria;
use App\Models\User;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()

    {
        $nome = $this-> faker->unique()->sentence();
        return [
            'nome' => $this->faker->unique()->sentence(),
            'descricao'=> $this->faker->randomNumber(2),
            'slug'=> str:: slug($nome),
            'imagem'=>$this->faker->imageUrl(400, 400),
            'id_user'=> user::pluck('id')->random(),
            'id_categoria'=>Categoria::pluck('id')->random(),
        ];
    }
}
