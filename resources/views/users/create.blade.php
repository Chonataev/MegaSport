@extends('layouts.admin')
@section('header')
<div class="max-w-7xl m-auto items-center justify-between py-4 px-4 sm:px-6 flex align-middle lg:px-8">
  <h1 class="text-3xl font-bold text-gray-900">
    Create User
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
      <form action="{{route('users.store')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="post">
        <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-4">
                <label for="name" class="block text-sm font-medium text-gray-700">First name</label>
                <input type="text" name="name" id="first_name" autocomplete="given-name" class=" py-2 px-3 mt-1 border border-gray-300 focus:ring-indigo-300 focus:border-indigo-300 block w-full sm:text-sm  rounded-md">
              </div>
              <div class="col-span-6 sm:col-span-4">
                <label for="email_address" class="block text-sm font-medium text-gray-700">Email address</label>
                <input type="text" name="email" id="email_address" autocomplete="email" class="py-2 px-3 mt-1 border mt-1 focus:ring-indigo-300 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="text" name="password" id="password" class="py-2 px-3 mt-1 border mt-1 focus:ring-indigo-300 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="password_confirm" class="block text-sm font-medium text-gray-700">password confirm</label>
                <input type="pass" name="password_confirm" id="password_confirm" class="py-2 px-3 mt-1 border mt-1 focus:ring-indigo-300 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="role_id" class="block text-sm font-medium text-gray-700">Роль</label>
                <input type="pass" name="role_id" id="password_confirm" class="py-2 px-3 mt-1 border mt-1 focus:ring-indigo-300 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
              <div class="px-4 py-3 bg-gray-50 float-right sm:px-6 mt-3">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
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