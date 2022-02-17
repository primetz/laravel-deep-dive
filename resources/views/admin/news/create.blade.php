@extends('layouts.admin')

@section('title', 'Создание новости')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="form-popup form-popup_big">
        <div class="form-popup__header">
            <span class="form-popup__title">Создание новости</span>
        </div>
        <div class="form-popup__body">
            <form action="{{ route('news.store') }}" method="post" class="form-popup__action">
                @csrf
                <input type='text' id='news-title' name='title' class="form-popup__control" placeholder="Название новости">
                <textarea name="content" id="news-details" cols="30" rows="10" placeholder="Подробное описание новости" class="form-popup__control"></textarea>
                <label for="category">Категория</label>
                <select name="category_id" id="category" class="form-popup__control">
                    @foreach($categories as $id => $category)
                        <option value="{{ $id }}">{{ $category }}</option>
                    @endforeach
                </select>
                <label for="publish-date">Дата публикации</label>
                <input type="datetime-local" id="date" name="publish_date" class="form-popup__control" value="{{ date('Y-m-d H:m:s') }}" min="{{ date('Y-m-d H:m:s') }}">
                @foreach($statuses as $id => $status)
                    <label><input type="radio" name="status_id" value="{{ $id }}" @if($status === 'черновик') checked @endif> {{ $status }}</label>
                @endforeach
                <input type="submit" class="form-popup__btn" value="Создать">
            </form>
        </div>
    </div>
@endsection
