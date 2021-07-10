@extends('layouts.profile')

@section('title', 'プロフィール作成')

<!-- PHP/Laravel 19　課題１ -->
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 ms-auto">
      <h1 style="margin-bottom:40px;">プロフィール</h1>
      <div class="form-group row">
        <p>氏名 : {{ $profile->name }}</p>
      </div>
      <div class="form-group row">
        <p>性別 : {{ $profile->gender }}</p>
      </div>
      <div class="form-group row">
        <p>趣味 : {{ $profile->hobby }}</p>
      </div>
      <div class="form-group row">
        <p>自己紹介 : {{ $profile->introduction }}</p>
      </div>
      <a href="{{ action('Admin\ProfileController@edit', ['id' => $profile->id]) }}" role="button" class="btn btn-primary">編集</a>
    </div>
  </body>
</html>
@endsection
