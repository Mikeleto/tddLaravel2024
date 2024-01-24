<?php

namespace Tests\Feature\Admin;

use App\Profession;
use App\Skill;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ListProfessionTest extends TestCase
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

   
   
}
