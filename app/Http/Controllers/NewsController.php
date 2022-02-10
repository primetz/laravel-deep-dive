<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    private News $news;
    private Category $category;

    public function __construct(News $news, Category $category)
    {
        $this->news = $news;
        $this->category = $category;
    }

    public function category(int $id)
    {

        return view('news.category', [
            'news' => $this->news->getByCategoryId($id),
            'categories' => $this->category->all(),
            'category_name' => $this->category->getById($id)
        ]);
    }

    public function card(int $id)
    {
        $news = $this->news->getById($id);

        return view('news.card', [
            'news' => $news,
            'categories' => $this->category->all(),
            'category_name' => $this->category->getById($news['category_id'])
        ]);
    }
}
