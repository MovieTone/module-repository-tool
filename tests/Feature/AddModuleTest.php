<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Faker;

class AddModuleTest extends TestCase
{

    public function test_add_module_page_can_be_shown()
    {
        $user = User::factory()->create();

        $this
            ->actingAs($user, 'web')
            ->get('add-module')
            ->assertStatus(200)
            ->assertSee('Module Code')
            ->assertSee('Module name')
            ->assertSee('Faculty')
            ->assertSee('Department')
            ->assertSee('Lecturer')
            ->assertSee('Credit value')
            ->assertSee('Add Module');
    }

    public function test_module_can_be_added()
    {
        $user = User::factory()->create();
        $faker = Faker\Factory::create();
        $data = [
            'code' => $faker->regexify('[A-Za-z0-9]{5}'),
            'name' => $faker->name,
            'faculty' => $faker->word,
            'department' => $faker->word,
            'lecturer' => $faker->word,
            'credit' => $faker->randomNumber(1)
        ];

        $this
            ->actingAs($user, 'web')
            ->post('add-module', $data)
            ->assertStatus(302)
            ->assertRedirect('add-module')
            ->assertSessionHas('message', 'Module created');

        $this
            ->actingAs($user, 'web')
            ->get('add-module')
            ->assertStatus(200)
            ->assertSee('Module Code')
            ->assertSee('Module name')
            ->assertSee('Faculty')
            ->assertSee('Department')
            ->assertSee('Lecturer')
            ->assertSee('Credit value')
            ->assertSee('Add Module');
    }
}
