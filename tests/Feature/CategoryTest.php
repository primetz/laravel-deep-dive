<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use function PHPUnit\Framework\assertClassHasAttribute;

class CategoryTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get(route('category.create'));

        $response->assertStatus(200)
            ->assertSeeText('Создание категории');

        $response = $this->post(route('category.store', ['category_name' => 'Наука']));

        $response->assertStatus(302)
            ->assertRedirect(route('category.create'));
    }
}
