@extends('layouts.main')

@section('title', 'Категории')

@section('content')
    <ul class="category-news-list">
        @foreach($categories as $id => $category)
            <li class="category-news-list__item">
                <a href="{{ route('news::category', $id) }}" class="category-news-list__img-link">
                    <img src="https://via.placeholder.com/200x134.jpg?text={{ $category }}" alt="{{ $category }}" class="category-news-list__img" width="200" height="134">
                </a>
                <a href="{{ route('news::category', $id) }}" class="category-news-list__text-link">{{ $category }}</a>
            </li>
        @endforeach
    </ul>
@endsection
