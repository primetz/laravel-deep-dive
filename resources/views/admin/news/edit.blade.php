@extends('layouts.admin')

@section('title', 'Редактирование новости')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="form-popup form-popup_big">
        <div class="form-popup__header">
            <span class="form-popup__title">{{ __('labels.admin.news.edit_heading') }}</span>
        </div>
        <div class="form-popup__body">
            <form action="{{ route('news.update', ['news' => $news->id]) }}" method="post" class="form-popup__action">
                @csrf
                @method('put')
                <input type='text' id='news-title' name='title' class="form-popup__control" placeholder="Название новости" value="{{ $news->title }}">
                <textarea name="content" id="news-details" cols="30" rows="10" placeholder="Подробное описание новости" class="form-popup__control">{{ $news->content }}</textarea>
                <label for="category">{{ __('labels.admin.news.category') }}</label>
                <select name="category_id" id="category" class="form-popup__control">
                    @foreach($categories as $id => $category)
                        <option value="{{ $id }}" @if($id === $news->category_id) selected @endif>{{ $category }}</option>
                    @endforeach
                </select>
                <label for="publish-date">{{ __('labels.admin.news.date') }}</label>
                <input type="datetime-local" id="date" name="publish_date" class="form-popup__control" value="{{ $news->publish_date }}">
                @foreach($statuses as $id => $status)
                    <label><input type="radio" name="status_id" value="{{ $id }}" @if($id === $news->status_id) checked @endif> {{ $status }}</label>
                @endforeach
                <input type="submit" class="form-popup__btn" value="{{ __('labels.admin.news.submit') }}">
            </form>
        </div>
    </div>
@endsection
