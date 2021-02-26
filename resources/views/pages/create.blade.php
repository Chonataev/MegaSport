@extends('layouts.admin')
@section('header')
<div class="max-w-7xl m-auto items-center justify-between py-4 px-4 sm:px-6 flex align-middle lg:px-8">
  <h1 class="text-3xl font-bold text-gray-900">
    Add Page
  </h1></div>
@endsection
@section('content')
<div class="mt-10 sm:mt-0">
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        <p class="mt-1 text-sm text-gray-600">
          <a href="{{route('pages.index')}}" class=" md-2" href=""><h3 class="text-lg font-medium leading-6 text-gray-900"><< Вернуть к странице тренеры</h3></a>
        </p>
      </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form action="{{route('pages.store')}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="post">
        <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Page title</label>
                <input type="text" name="title" id="title" autocomplete="title" class=" py-2 px-3 mt-1 border border-gray-300 focus:ring-indigo-300 focus:border-indigo-300 block w-full sm:text-sm  rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                <input type="file" name="image" id="">             
              </div>

              <div class="col-span-6 sm:col-span-6">
                <label for="description" class="block text-sm font-medium text-gray-700">Discription</label>
                <textarea type="text" rows="6" name="description" id="password" class="py-2 px-3 mt-1 border mt-1 focus:ring-indigo-300 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
              </div>
              <div>
                <button type="submit" class="inline-flex justify-center py-2 px-12 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  Save
                </button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection