<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class ShowModulesTest extends TestCase
{

    public function test_show_modules_page_can_be_shown()
    {
        $user = User::factory()->create();

        $this
            ->actingAs($user, 'web')
            ->get('show-modules')
            ->assertStatus(200)
            ->assertSee('Module List')
            ->assertSee('Module Code')
            ->assertSee('Module Name')
            ->assertSee('Faculty')
            ->assertSee('Department')
            ->assertSee('Lecturer')
            ->assertSee('Credit value');
    }
}
