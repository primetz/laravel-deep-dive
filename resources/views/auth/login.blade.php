@extends('layouts.main')

@section('title', 'Вход')

@section('content')
    <div class="form-popup form-popup_small">
        <div class="form-popup__header">
            <span class="form-popup__title">Авторизация</span>
        </div>
        <div class="form-popup__body  form-popup__body_border">
            <form action="" method="post" class="form-popup__action">
                <input type='text' id='login' name='login_name' class="form-popup__control" placeholder="Логин">
                <input type='password' id='password' name='login_password'  class="form-popup__control" placeholder="Пароль">
                <div class="form-popup__checkbox">
                    <input type="checkbox" id="login_save">
                    <label for="login_save">Запомнить меня</label>
                </div>
                <input type="submit" class="form-popup__btn" value="Войти">
            </form>
        </div>
        <div class="form-popup__links">
            <a href="" class="form-popup__link">Регистрация</a>
            <a href="" class="form-popup__link">Забыл пароль</a>
        </div>
    </div>
@endsection
