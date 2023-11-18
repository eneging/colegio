<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asistencia>
 */

require_once 'vendor/autoload.php';

class AsistenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $opcionesAsistencia = ['A', 'B', 'C'];
        $num = rand(0, 2);

        return [

            'fecha' => fake()->date(),
            'alumno_id' => fake()->numberBetween(1, 20),
            'curso_id' => fake()->numberBetween(1, 6),
            'asistencia' => $opcionesAsistencia[$num],

        ];
    }
}
