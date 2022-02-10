@extends('layouts.main')

@section('title', 'Создание новости')

@section('content')
    <div class="form-popup form-popup_big">
        <div class="form-popup__header">
            <span class="form-popup__title">Создание новости</span>
        </div>
        <div class="form-popup__body">
            <form action="" method="post" class="form-popup__action">
                <input type='text' id='title' name='news_title' class="form-popup__control" placeholder="Название новости">
                <input type='text' id='descr' name='news_descr' class="form-popup__control" placeholder="Краткое описание новости">
                <textarea name="news_details" id="details" cols="30" rows="10" placeholder="Подробное описание новости" class="form-popup__control"></textarea>
                <input type="submit" class="form-popup__btn" value="Создать">
            </form>
        </div>
    </div>
@endsection
