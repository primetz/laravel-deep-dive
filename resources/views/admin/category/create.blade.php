@extends('layouts.admin')

@section('title', 'Создание категории')

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
            <span class="form-popup__title">
                @if(isset($category))
                    Редактирование
                @else
                    Создание
                @endif
                категории
            </span>
        </div>
        <div class="form-popup__body">
            {!! Form::open(['route' => 'category.store', 'method' => 'post', 'class' => 'form-popup__action']) !!}
            @if(isset($category))
                <input type="hidden" name="id" value="{{ $category->id }}">
            @endif
                {!! Form::text('category', $category->category ?? null, ['class' => 'form-popup__control', 'id' => 'category', 'placeholder' => 'Название категории']) !!}
                {!! Form::submit('Сохранить', ['class' => 'form-popup__btn']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
