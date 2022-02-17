@extends('layouts.main')

@section('title', $news->title)

@section('content')
    <div class="article">
        <h1 class="article__heading">{{ $news->title }}</h1>
        <span class="article__category">{{ $categoryName }}</span>
        <span class="article__date">{{ $news->publish_date }}</span>
        <img src="{{ asset('img/' . $news->image) }}" alt="{{ $news->title }}" width="820" height="550" class="article__img">
        <p class="article__text">{{ $news->content }}</p>
    </div>
@endsection
