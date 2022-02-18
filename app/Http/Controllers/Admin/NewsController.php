<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminNewsStoreRequest;
use App\Models\Category;
use App\Models\News;
use App\Models\Status;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::select(['id', 'title', 'image', 'publish_date'])
            ->orderBy('publish_date', 'desc')
            ->paginate(4);

        return view('admin.news.index', [
            'news' => $news
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Category $category, Status $status)
    {
        return view('admin.news.create', [
            'categories' => $category->getList(),
            'statuses' => $status->getList()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AdminNewsStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminNewsStoreRequest $request)
    {
        $news = new News();
        $news->fill($request->all());
        $news->save();

        return redirect()->route('news.show', ['news' => $news->id])
            ->with('success', 'Новость создана успешно.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return view('admin.news.show', [
            'news' => $news,
            'category' => $news->category->category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('admin.news.edit', [
            'categories' => $news->category->getList(),
            'statuses' => $news->status->getList(),
            'news' => $news
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news = News::find($id);
        $news->fill($request->all());
        $news->save();

        return redirect()->route('news.show', ['news' => $id])
            ->with('success', 'Новость отредактирована успешно.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::destroy($id);

        return redirect()->route('news.index')
            ->with('success', 'Новость успешно удалена.');
    }
}
