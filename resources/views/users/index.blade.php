@extends('layouts.admin')

@section('header')
<div class="bg-white shadow m-auto items-center justify-between py-4 px-4 sm:px-6 flex align-middle lg:px-8">
  <h1 class="text-3xl font-bold text-gray-900">
    Users
  </h1>
  <a href="{{route('users.create')}}" class="text-lg mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-1 bg-white text-base font-medium text-gray-700 hover:bg-black-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-md">Create</a>
</div>
@endsection

@section('content')
<div class="flex flex-col">
  <div class="sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8">
      <div class="shadow border-b border-gray-200 sm:rounded-lg">
        <table class="w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Email
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Role
              </th>
              <th scope="col" class="px-6 py-3 pr-20 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                Actions
              </th>
            </tr>
          </thead>
          @foreach ($users as $user)
          <tbody class="bg-white divide-y divide-gray-200">
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="">
                    <div class="text-sm font-medium text-gray-900">
                      {{$user->name}}
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                {{$user->email}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                {{$user->role_id}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right pr-10 font-medium">
                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                <a href="#" class="text-green-600 hover:text-green-700">Update</a>
                <a href="#" class="text-red-600 hover:text-red-700">Delete</a>
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