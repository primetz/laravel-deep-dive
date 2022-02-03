@extends('layouts.admin')

@section('title', $news->title)

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="article">
        <h1 class="article__heading">{{ $news->title }}</h1>
        <span class="article__category">{{ $category }}</span>
        <span class="article__date">{{ $news->publish_date }}</span>
        <img src="{{ asset('img/' . $news->image) }}" alt="{{ $news->title }}" width="820" height="550" class="article__img">
        <p class="article__text">{{ $news->content }}</p>
        <div class="category-news-list-control">
            <a href="{{ route('news.edit', ['news' => $news->id]) }}" class="category-news-list-control__edit" title="Изменить"><i class="fas fa-edit"></i></a>
            <form action="{{ route('news.destroy', ['news' => $news->id]) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="category-news-list-control__destroy" title="Удалить"><i class="fas fa-trash"></i></button>
            </form>
        </div>
    </div>
@endsection
