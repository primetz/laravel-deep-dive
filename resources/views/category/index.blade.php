@extends('layouts.main')

@section('title', 'Категории')

@section('content')
    <ul class="category-news-list">
        @foreach($categories as $category)
            <li class="category-news-list__item">
                <a href="{{ route('news::category', ['category' => $category->id]) }}" class="category-news-list__img-link">
                    <img src="https://via.placeholder.com/200x134.jpg?text={{ $category->category }}" alt="{{ $category->category }}" class="category-news-list__img" width="200" height="134">
                </a>
                <a href="{{ route('news::category', ['category' => $category->id]) }}" class="category-news-list__text-link">{{ $category->category }}</a>
            </li>
        @endforeach
    </ul>
@endsection
