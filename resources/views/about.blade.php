@extends('layout/layout')

@section('title', 'about')

@section('content')

  <div class="flex items-center dark:text-gray-400">
    About
  </div>
  <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
      <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
          <div class="ml-12">
            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
              About page content here.
            </div>
          </div>
        </div>
      </div>
  </div>
@endsection

@section('after_js')
  <script>
    // alert("Hey! It's about page");
  </script>
@endsection