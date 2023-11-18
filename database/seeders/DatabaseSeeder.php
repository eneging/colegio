<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $seeder = new AlumnoSeeder;
        $seeder->run();

        $seeder2 = new DocenteSeeder;
        $seeder2->run();

        $seeder3 = new CursoSeeder;
        $seeder3->run();

        $seeder4 = new AsistenciaSeeder;
        $seeder4->run();

        $seeder5 = new MatriculaSeeder;
        $seeder5->run();
    }
}
