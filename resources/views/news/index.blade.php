@extends('layouts.main')

@section('title', 'Все новости')

@section('content')
    <h2 class="category-news__heading">Все новости</h2>
    <ul class="category-news-list">
        @forelse($news as $item)
            <li class="category-news-list__item">
                <a href="{{ route('news::card', $item->id) }}" class="category-news-list__img-link">
                    <img src="{{ asset('img/' . $item->image) }}" alt="{{ $item->title }}" class="category-news-list__img" width="200" height="134">
                </a>
                <a href="{{ route('news::card', $item->id) }}" class="category-news-list__text-link">{{ $item->title }}</a>
                <small>{{ $item->publish_date }}</small>
            </li>
        @empty
            <li class="category-news-list__item_empty">Нет новостей.</li>
        @endforelse
    </ul>
@endsection
