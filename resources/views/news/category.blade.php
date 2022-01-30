@extends('layouts.main')

@section('title', $category_name)

@section('content')
    <h2 class="category-news__heading">{{ $category_name }}</h2>
    <ul class="category-news-list">
        @forelse($news as $id => $item)
            <li class="category-news-list__item">
                <a href="{{ route('news::card', $id) }}" class="category-news-list__img-link">
                    <img src="https://via.placeholder.com/200x134.jpg?text={{ $item['title'] }}" alt="{{ $item['title'] }}" class="category-news-list__img" width="200" height="134">
                </a>
                <a href="{{ route('news::card', $id) }}" class="category-news-list__text-link">{{ $item['short_description'] }}</a>
            </li>
        @empty
            <li class="category-news-list__item_empty">Нет новостей.</li>
        @endforelse
    </ul>
@endsection
