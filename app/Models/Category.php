<?php

namespace App\Models;

class Category
{
    private array $categories = [
        1 => 'Бизнес',
        2 => 'Финансы',
        3 => 'Политика',
        4 => 'Технологии',
        5 => 'Спорт',
    ];

    public function all(): array
    {
        return $this->categories;
    }

    public function getById(int $id): string
    {
        return $this->categories[$id];
    }
}
