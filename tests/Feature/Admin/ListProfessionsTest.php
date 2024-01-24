<?php

namespace Tests\Feature\Admin;

use App\Profession;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ListProfessionsTest extends TestCase
{
    use RefreshDatabase;

    protected $defaultData = [
        'title' => 'Desarrollador Back-End',
        'description' => 'El mejor',
        'education_level' => 'bachillerato',
        'salary' => 2000,
        'sector' => 'salud',
        'experience_required' => 5,
    ];


    /** @test */
    function it_shows_the_professions_list()
    {
        factory(Profession::class)->create(['title' => 'Diseñador']);
        factory(Profession::class)->create(['title' => 'Programador']);
        factory(Profession::class)->create(['title' => 'Administrador']);

        $this->get('profesiones')
            ->assertStatus(200)
            ->assertSeeInOrder([
                'Administrador',
                'Diseñador',
                'Programador',
            ]);
    }

     /** @test */
     function profession_list()
     {
         $this->get('profesiones')
         ->assertSee('Listado de profesiones');
     }
 
    
 
}
