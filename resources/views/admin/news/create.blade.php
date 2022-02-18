@extends('layouts.admin')

@section('title', __('labels.admin.news.create_heading'))

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="form-popup form-popup_big">
        <div class="form-popup__header">
            <span class="form-popup__title">{{ __('labels.admin.news.create_heading') }}</span>
        </div>
        <div class="form-popup__body">
            <form action="{{ route('news.store') }}" method="post" class="form-popup__action">
                @csrf
                <input type='text' id='news-title' name='title' class="form-popup__control" placeholder="{{ __('labels.admin.news.title') }}" value="{{ old('title') }}">
                <textarea name="content" id="news-details" cols="30" rows="10" placeholder="{{ __('labels.admin.news.content') }}" class="form-popup__control">{{ old('content') }}</textarea>
                <label for="category">{{ __('labels.admin.news.category') }}</label>
                <select name="category_id" id="category" class="form-popup__control">
                    @foreach($categories as $id => $category)
                        <option value="{{ $id }}" @if( old('category_id') == $id ) selected @endif>{{ $category }}</option>
                    @endforeach
                </select>
                <label for="publish-date">{{ __('labels.admin.news.date') }}</label>
                <input type="datetime-local" id="date" name="publish_date" class="form-popup__control" value="{{ old('publish_date') ?? date('Y-m-d H:m:s') }}">
                @foreach($statuses as $id => $status)
                    <label><input type="radio" name="status_id" value="{{ $id }}" @if( old('status_id') == $id) checked @endif> {{ $status }}</label>
                @endforeach
                <input type="submit" class="form-popup__btn" value="{{ __('labels.admin.news.submit') }}">
            </form>
        </div>
    </div>
@endsection
