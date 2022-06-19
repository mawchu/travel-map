@extends('layout/layout')

@section('title', $title)

@section('content')
{{ $people }}
  <div class="container">
    <form action="/people/create" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="mb-2">
          <label for="name">名稱</label>
          <input type="text" class="form-control" name="name">
      </div>
      <div class="mb-2">
        <label for="phone">phone</label>
        <input type="text" class="form-control" name="phone">
      </div>
      <div class="mb-2">
        <label for="email">email</label>
        <input type="text" class="form-control" name="email">
      </div>
      <button class="btn btn-info" type="submit">送出</button>
    </form>
  </div>
@endsection