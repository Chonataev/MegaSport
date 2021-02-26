@extends('layouts.admin')
@section('header')
  <div class="max-w-7xl m-auto items-center justify-between py-4 px-4 sm:px-6 flex align-middle lg:px-8">
    <h1 class="text-3xl font-bold text-gray-900">
      Show Section
    </h1>
    <a href="{{route('sections.edit',$section->id)}}" class="text-lg mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-1 bg-white text-base font-medium text-gray-700 hover:bg-black-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-md">Edit</a>
  </div>
@endsection

@section('content')
  <div class="max-w-md mx-auto overflow-hidden md:max-w-6xl mb-5">
    <div class="max-w-md mx-auto overflow-hidden md:max-w-6xl mb-3">
      <a href="{{route('sections.index')}}" class=" md-2" style="font-size:16px" href=""><< Вернуть к странице категории</a>
    </div>
    
    <div class="max-w-md mx-auto overflow-hidden md:max-w-5xl my-10 mb-5">
      <div class="md:flex">
        <div class="overflow-hidden md:w-52" style="width: 100%">
          <div class="border-t border-gray-200">
            <dl>
              <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                  Section title
                </dt>
                <dd style="width:100%" class="mt-1 text-sm text-gray-900 sm:mt-0  sm:col-span-2">
                  {{$section->title}}
                </dd>
              </div>
              <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                  Section price
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                  {{$section->price}}
                </dd>
              </div>
              <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                  Training time
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                  {{$section->trainig_time}}
                </dd>
              </div>
              <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                  Description
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                  {{$section->description}}
                </dd>
              </div>
            </dl>
          </div>
        </div>
        <div class="md:flex-shrink-0">
          <img class="h-full w-full object-cover md:w-60 overflow-hidden" src="{{asset($section->image)}}" alt="Man looking at item at a store">
        </div>
      </div>
    </div>

    <div class="max-w-md mx-auto overflow-hidden md:max-w-6xl mt-5">
      <a href="{{route('sections.index')}}" class=" md-2" style="font-size:16px" href=""><< Вернуть к странице категории</a>
    </div>
  </div>
@endsection