@extends('layouts.admin')
@section('header')
<div class="max-w-7xl m-auto items-center justify-between py-4 px-4 sm:px-6 flex align-middle lg:px-8">
  <h1 class="text-3xl font-bold text-gray-900">
    Upload image
  </h1></div>
@endsection
@section('content')
<div class="mt-10 sm:mt-0">
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
        <p class="mt-1 text-sm text-gray-600">
          Use a permanent address where you can receive mail.
        </p>
      </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form action="{{route('galleries.store')}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="post">
        <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6 justify-between">
                <div class="col-span-3">
                  <label for="image" class="block text-sm font-medium text-gray-700">Collect image</label>
                  <input type="file" name="image" class="mt-3">
                </div>
                <div class="py-3 float-right mt-4 mx-4">
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