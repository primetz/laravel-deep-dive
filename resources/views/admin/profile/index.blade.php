@extends('layouts.admin')

@section('title', 'Профили')

@section('content')
    <h2 class="category-news__heading">Все новости</h2>
    <ul class="category-news-list">
        @foreach($users as $user)
            <li class="category-news-list__item">
                <div>Name: {{ $user->name }}</div>
                <div>Email: {{ $user->email }}</div>
                <div>Created at: {{ $user->created_at }}</div>
                <div>Updated at: {{ $user->updated_at }}</div>
                <div>Is admin: {{ $user->is_admin ? 'Yes' : 'No' }}</div>
                <div class="category-news-list-control">
                    <a href="{{ route('admin.profile.edit', ['id' => $user->id]) }}" class="category-news-list-control__edit" title="Изменить"><i class="fas fa-edit"></i></a>
                    <form action="{{ route('admin.profile.delete', ['id' => $user->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="category-news-list-control__destroy" title="Удалить"><i class="fas fa-trash"></i></button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
    <div class="category-news-create">
        <a href="{{ route('admin.profile.create') }}" class="category-news-create__link">Создать пользователя</a>
    </div>
@endsection
