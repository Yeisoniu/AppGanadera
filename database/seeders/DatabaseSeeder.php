<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

// use App\Models\Estudiante;
// use App\Models\Curso;

use App\Models\Finca;
use App\Models\Propietario;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Finca::factory(15)->create();
        Propietario::factory(8)->create()->each(function($Propietario){
            $Propietario->Fincas()->sync(Finca::all()->random(3));
        });
    }
}
