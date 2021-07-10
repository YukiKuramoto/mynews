@extends('layouts.profile')

@section('title', 'プロフィール作成')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 ms-auto">
      <h1>プロフィール編集画面</h1>
      <!-- PHP/Laravel16　課題３ -->
      <form class="" action="{{ action('Admin\ProfileController@update') }}" method="post">
        @if(count($errors)>0)
          <ul>
            @foreach($errors->all() as $e)
            <li>{{ $e }}</li>
            @endforeach
          </ul>
        @endif
        <div class="form-group row">
          <label>氏名</label>
          <input class="form-control" type="text" name="name" value="{{ $profile->name }}">
        </div>
        <div class="form-group row">
          <label>性別</label>
          <input class="form-control" type="text" name="gender" value="{{ $profile->gender }}">
        </div>
        <div class="form-group row">
          <label>趣味</label>
          <input class="form-control" type="text" name="hobby" value="{{ $profile->hobby }}">
        </div>
        <div class="form-group row">
          <label>自己紹介</label>
          <textarea class="form-control" name="introduction" rows="8">{{ $profile->introduction }}</textarea>
        </div>
        <input type="hidden" name="id" value="{{ $profile->id }}">
        {{ csrf_field() }}
        <button type="submit" class="btn btn-primary">更新</button>
      </form>
      <div class="row mt-5">
        <div class="col-md-4 mx-auto">
          <h2>編集履歴</h2>
          <ul class="list-group">
            @if ($profile->profhistories() != NULL)
            @foreach($profile->profhistories as $history)
              <li class="list-group-item">{{ $history->edited_at }}</li>
            @endforeach
            @endif
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>
@endsection
