<?php

use App\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profession::create([
            'title' => 'Desarrollador Back-End',
            'description' => 'El mejor',
            'education_level' => 'bachillerato',
            'salary' => '2000€',
            'sector' => 'salud',
            'experience_required' => 5,
        ]);
        Profession::create([
            'title' => 'Desarrollador Front-End'
        ]);
        Profession::create([
            'title' => 'Diseñador web'
        ]);

        factory(Profession::class, 100)->create();

        

    }
}
