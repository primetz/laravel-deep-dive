@extends('layouts.admin')

@section('title', 'Профиль')

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
            <span class="form-popup__title">Изменение профиля</span>
        </div>
        <div class="form-popup__body">
            <form action="{{ route('admin.profile.save') }}" method="post" class="form-popup__action">
                @csrf
                <input type='text' id='user_name' name='name' class="form-popup__control" placeholder="Имя" value="{{ old('name') }}">
                <input type='text' id='user_email' name='email' class="form-popup__control" placeholder="Электронная почта" value="{{ old('email') }}">
                <input type="password" id="new_user_password" name="password" class="form-popup__control" placeholder="Новый пароль">
                <input type="hidden" name="is_admin" value="false">
                <label for="admin">Администратор
                    <input type="checkbox" id="admin" name="is_admin" value="true" class="form-popup__control">
                </label>
                <input type="submit" class="form-popup__btn" value="Сохранить">
            </form>
        </div>
    </div>
@endsection
