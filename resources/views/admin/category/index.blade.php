@extends('layouts.admin')

@section('title', 'Категории')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <h2 class="category-news__heading">Все категории</h2>
    <ul class="category-news-list">
        @forelse($categories as $category)
            <li class="category-news-list__item">
                <a href="{{ route('category.show', ['category' => $category->id]) }}" class="category-news-list__text-link">{{ $category->category }}</a>
                <small>{{ $category->created_at }}</small>
                <div class="category-news-list-control">
                    <a href="{{ route('category.edit', ['category' => $category->id]) }}" class="category-news-list-control__edit" title="Изменить"><i class="fas fa-edit"></i></a>
                    <form action="{{ route('category.destroy', ['category' => $category->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="category-news-list-control__destroy" title="Удалить"><i class="fas fa-trash"></i></button>
                    </form>
                </div>
            </li>
        @empty
                <li class="category-news-list__item_empty">Нет категорий.</li>
        @endforelse
    </ul>
    <div class="category-news-create">
        <a href="{{ route('category.create') }}" class="category-news-create__link">Создать категорию</a>
    </div>
    {{ $categories->links() }}
@endsection
