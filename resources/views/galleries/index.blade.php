@extends('layouts.admin')

@section('header')
<div class="max-w-7xl m-auto items-center justify-between py-4 px-4 sm:px-6 flex align-middle lg:px-8">
  <h1 class="text-3xl font-bold text-gray-900">
    Gallery
  </h1>
  <a href="{{route('galleries.create')}}" class="text-lg mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-1 bg-white text-base font-medium text-gray-700 hover:bg-black-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-md">Create</a>
</div>
@endsection

@section('content')
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                #
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                image
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                path
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                size
              </th>
              <th scope="col" class="px-6 py-3 pr-9 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                Actions
              </th>
            </tr>
          </thead>
          @foreach ($galleries as $gallery)
          <tbody class="bg-white divide-y divide-gray-200">
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="">
                    <div class="text-sm font-medium text-gray-900">
                      {{$gallery->id}}
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <img class="h-20" src="{{asset($gallery->image)}}" alt="">
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                {{$gallery->path}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                {{$gallery->size}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right pr-10 font-medium">
                <form action="{{route('galleries.destroy',$gallery->id)}}" method="POST" onsubmit="return confirm('Вы уверены удалить запись?');">
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <button class="text-red-600 hover:text-red-700">Delete</button>
                </form>
              </td>
            </tr>

            <!-- More items... -->
          </tbody>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</div>
@endsection