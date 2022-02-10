<?php

namespace Tests\Unit;

use App\Models\Category;
use PHPUnit\Framework\TestCase;

class CategoryTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $category = new Category();
        $all = $category->all();

        $this->assertIsArray($all);
        $this->assertNotEmpty($all);

        foreach ($all as $key => $value) {
            $this->assertIsInt($key);
            $this->assertIsString($value);
        }

        foreach ($all as $id => $categoryName) {
            $getById = $category->getById($id);
            $this->assertIsString($getById);
            $this->assertEquals($categoryName, $getById);
        }
    }
}
