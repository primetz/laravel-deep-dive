@extends('layouts.admin')

@section('title', 'Все новости')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <h2 class="category-news__heading">Все новости</h2>
    <ul class="category-news-list">
        @forelse($news as $item)
            <li class="category-news-list__item">
                <a href="{{ route('news.show', ['news' => $item->id]) }}" class="category-news-list__img-link">
                    <img src="{{ asset('img/' . $item->image) }}" alt="{{ $item->title }}" class="category-news-list__img" width="200" height="134">
                </a>
                <a href="{{ route('news.show', ['news' => $item->id]) }}" class="category-news-list__text-link">{{ $item->title }}</a>
                <small>{{ $item->publish_date }}</small>
                <div class="category-news-list-control">
                    <a href="{{ route('news.edit', ['news' => $item->id]) }}" class="category-news-list-control__edit" title="Изменить"><i class="fas fa-edit"></i></a>
                    <form action="{{ route('news.destroy', ['news' => $item->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="category-news-list-control__destroy" title="Удалить"><i class="fas fa-trash"></i></button>
                    </form>
                </div>
            </li>
        @empty
            <li class="category-news-list__item_empty">Нет новостей.</li>
        @endforelse
    </ul>
    <div class="category-news-create">
        <a href="{{ route('news.create') }}" class="category-news-create__link">Создать новость</a>
    </div>
    {{ $news->links() }}
@endsection
