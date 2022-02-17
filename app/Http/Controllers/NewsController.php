<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Nette\Utils\DateTime;

class NewsController extends Controller
{
    public function index(Category $category)
    {
        $news = News::select(['id', 'image', 'title', 'publish_date'])
            ->where([
                ['publish_date', '<=', now()],
                ['status_id', '=', function ($query) {
                    $query->select('id')
                        ->from('statuses')
                        ->where('status', 'опубликовано');
                }]
            ])
            ->get();

        return view('news.index', [
            'news' => $news,
            'categoryList' => $category->getList()
        ]);
    }

    public function category(Category $category)
    {
        $news = News::select(['id', 'title', 'image'])
            ->where([
                ['category_id', $category->id],
                ['publish_date', '<=', now()],
                ['status_id', '=', function ($query) {
                    $query->select('id')
                        ->from('statuses')
                        ->where('status', 'опубликовано');
                }]
            ])
            ->get();


        return view('news.category', [
            'news' => $news,
            'categoryList' => $category->getList(),
            'categoryName' => $category->category
        ]);
    }

    public function card(News $news)
    {
        $news = $news::where([
            ['publish_date', '<=', now()],
            ['status_id', '=', function ($query) {
                $query->select('id')
                    ->from('statuses')
                    ->where('status', 'опубликовано');
            }]
        ])->find($news->id);

        if (!$news) {
            return redirect()->route('news::index');
        }

        return view('news.card', [
            'news' => $news,
            'categoryList' => $news->category->getList(),
            'categoryName' => $news->category->category
        ]);
    }
}
