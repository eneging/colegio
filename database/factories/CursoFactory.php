<?php

namespace Database\Factories;

use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    protected $model = \App\Models\Curso::class;

    public function definition(): array
    {
        $faker = Faker::create();
        $cursos = ['matematica', 'quimica', 'lenguaje', 'literatura', 'historia', 'religion'];
        $num = rand(0, 5);

        return [
            'nombre_curso' => $cursos[$num],
            'docente_id' => $faker->numberBetween(1, 20),
        ];
    }
}
