@extends('layouts.admin')
@section('title')
  Изменить пользователя
@endsection
@section('content')
@php
    $role->role_id == 1 ? $role->role_id = 'user' : $role->role_id = 'admin';
@endphp
<div>
    <h2>Пользователи</h2>
    <div class="col-9 m-auto py-2 pr-4"> 
      <a href="{{route('users.index')}}" class="d-block md-2" style="font-size:16px" href=""><< Вернуть к странице категории</a>
    </div>
    <div class="col-8 shadow-sm  bg-white rounded" style="padding:10px; margin:auto; margin-top:10px">
      <p style="font-size:16px;font-weight:400" class="border-bottom pb-3">Изменить пользователя</p>
      <form action="{{route('users.update', $user->id)}}" method="post" class="mt-3">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="put">
        <div class="form-group">
          <label style="font-size:16px;font-weight:600" for="exampleInputEmail1">Имя пользователя</label>
          <input type="text" name="name" class="form-control"value="{{$user->name}}" id="title" placeholder="Введите Имя">
        </div>
        <div class="form-group">
          <label style="font-size:16px;font-weight:600" for="exampleInputEmail1">Логин пользователя</label>
          <input type="login" name="email" class="form-control" value="{{$user->email}}" id="title" placeholder="Введите Логин">
        </div>
        <div class="form-group">
          <label style="font-size:16px;font-weight:600" for="exampleInputEmail1">Пароль пользователя</label>
          <input type="text" name="password" class="form-control" id="title" placeholder="Введите пароль">
        </div>
        <div class="form-group">
          <label style="font-size:16px;font-weight:600" for="exampleInputEmail1">Подтверждения пароля пароль не правильный</label>
          <input type="text" name="password-confirm" class="form-control" id="title" placeholder="Подтвердите пароль">
        </div>
        <div class="form-group">
          <label style="font-size:16px;font-weight:600" for="exampleInputEmail1">Введите роль для пользователя пароль не правильны</label>
          <input type="text" name="role" class="form-control" value="{{$role->role_id}}" id="role" placeholder="Введите роль">
        </div>
        <div style="text-align: right" class="p-2">
          <button class="btn btn-primary" type="submit" style="font-size: 17px">Добавить</button>
        </div>
      </form>
    </div>
</div>
@endsection