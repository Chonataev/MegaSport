@extends('layouts.app')
@section('title')
    Страница пользователей
@endsection
@section('content')
<h1>Это страница для пользователей</h1>
<a href="{{ route('logout') }}" class="text-sm text-gray-700 underline">logout</a>
@endsection