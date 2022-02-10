@extends('layouts.main')

@section('title', $news['title'])

@section('content')
    <div class="article">
        <h1 class="article__heading">{{ $news['short_description'] }}</h1>
        <span class="article__category">{{ $category_name }}</span>
        <span class="article__date">@php echo date('d-m-Y, H:m'); @endphp</span>
        <img src="https://via.placeholder.com/820x550.png?text={{ $news['title'] }}" alt="{{ $news['title'] }}" width="820" height="550" class="article__img">
        <p class="article__text">{{ $news['details'] }}</p>
    </div>
@endsection
