@extends('layouts.profile')

@section('title', 'プロフィール作成')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 ms-auto">
        <h2>プロフィール作成</h2>
        <form class="" action="{{ action('Admin\ProfileController@create') }}" method="post">
          @if(count($errors)>0)
            <ul>
              @foreach($errors->all() as $e)
              <li>{{ $e }}</li>
              @endforeach
            </ul>
          @endif
          <div class="form-group row">
            <label>氏名</label>
            <input class="form-control" type="text" name="name" value="{{ old('name') }}">
          </div>
          <div class="form-group row">
            <label>性別</label>
            <input class="form-control" type="text" name="gender" value="{{ old('gender') }}">
          </div>
          <div class="form-group row">
            <label>趣味</label>
            <input class="form-control" type="text" name="hobby" value="{{ old('hobby') }}">
          </div>
          <div class="form-group row">
            <label>自己紹介</label>
            <textarea class="form-control" name="introduction" rows="8"></textarea>
          </div>
          {{ csrf_field() }}
          <button type="submit" class="btn btn-primary">更新</button>
        </form>
      </div>
    </div>
  </div>
@endsection
