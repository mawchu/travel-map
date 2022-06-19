@extends('layout.layout')

@section('title', 'home')

@section('content')
  <div class="flex items-center dark:text-gray-400">
    Home
  </div>
  <div class="container mx-auto">
    <h1>Hello you!</h1>
    <div class="flex flex-wrap">
      <div class="md:w-3/4.w-full">
        <div class="w-16 md:w-32 lg:w-48 transition-all bg-fuchsia-300 hover:bg-fuchsia-600 py-5 text-pink-800">123</div>
        <button class="btn-primary">My button</button>
      </div>
      <div class="md:w-1/4.w-full">aside</div>
    </div>
  </div>
  <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
    <div class="grid grid-cols-1 md:grid-cols-2">
      <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
        <div class="ml-12">
          <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
            Home page content here.
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection