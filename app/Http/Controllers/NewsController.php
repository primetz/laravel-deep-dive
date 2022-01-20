<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    private array $news = [
        1 => [
            'category_id' => 1,
            'title' => 'News 1'
        ],
        2 => [
            'category_id' => 1,
            'title' => 'News 2'
        ],
        3 => [
            'category_id' => 2,
            'title' => 'News 3'
        ],
        4 => [
            'category_id' => 2,
            'title' => 'News 4'
        ],
        5 => [
            'category_id' => 3,
            'title' => 'News 5'
        ],
        6 => [
            'category_id' => 3,
            'title' => 'News 6'
        ]
    ];

    private array $categories = [
        1 => 'business',
        2 => 'finance',
        3 => 'sport'
    ];

    public function categories()
    {
        $list = '';
        foreach ($this->categories as $category) {
            $url = route('news::category', ['name' => $category]);
            $list .= "<li><a href='$url'>$category</a></li>";
        }

        return '<ul>' . $list . '</ul>';
    }

    public function category(string $name)
    {
        $res = '';
        foreach ($this->news as $id => $item) {
            if ($item['category_id'] === array_search($name, $this->categories)) {
                $url = route('news::article', ['id' => $id]);
                $res .= "<div>
                            <a href='$url'>{$item['title']}</a>
                         </div>";
            }
        }

        return $res;
    }

    public function article(int $id)
    {
        $news = $this->news[$id];

        return '<h1>' . $news['title'] . '</h1>';
    }
}
