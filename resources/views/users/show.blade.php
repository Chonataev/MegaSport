@extends('layouts.admin')
@section('title')
    {{$user->name}}
@endsection
@section('content')
  <div class="pt-2 py-3"> 
    <a href="{{route('users.index')}}" class=" md-2" style="font-size:16px" href=""><< Вернуть к странице инструкторы</a>
  </div>
  <div class="row">
    <div class="col-8">
      <div class="pr-2 pl-2">
        <h4 class="border-bottom border-dark p-2" style="font-weight:600">{{$user->name}}</h4>
      </div>
      <div class="d-flex pt-3">
        <div class="col-4">
          <div>Ранг:</div>
          <div>Кантакты:</div>
          <div>Роль:</div>
        </div>
        <div class="col-8">
          <div style="font-weight:600">{{$user->name}}</div>
          <div style="font-weight:600">{{$user->email}}</div>
          <div>
            @if ($role->model_id ==1)
            user
            @else
                admin
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pt-4 mt-4">
    <div class="pt-4 mt-4">
      <div class="pt-4 mt-4">
        <a href="{{route('users.index')}}" class=" md-2" style="font-size:16px" href=""><< Вернуть к странице категории</a>
      </div>
    </div>
  </div>
  @endsection