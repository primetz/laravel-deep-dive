@extends('layouts.admin')

@section('title', 'Создание категории')

@section('content')
    <div class="form-popup form-popup_big">
        <div class="form-popup__header">
            <span class="form-popup__title">Создание категории</span>
        </div>
        <div class="form-popup__body">
            {!! Form::open(['route' => 'category.store', 'method' => 'post', 'class' => 'form-popup__action']) !!}
                {!! Form::text('category_name', '', ['class' => 'form-popup__control', 'id' => 'category', 'placeholder' => 'Название категории']) !!}
                {!! Form::submit('Создать', ['class' => 'form-popup__btn']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
