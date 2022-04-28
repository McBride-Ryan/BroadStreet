<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProjectsTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUserCanBeRegistered()
    {
//        $this->withoutExceptionHandling();

        $attributes = [
            'name' => $this->faker->name,
            'name' => $this->faker->name,
            'email' => $this->faker->email,
        ];

        $this->post('/register', $attributes);

        $this->assertDatabaseMissing('users', $attributes);
    }
}
