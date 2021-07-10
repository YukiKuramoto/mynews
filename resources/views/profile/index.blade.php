@extends('layouts.front')


@section('content')
  <div class="container">
    <h2 style="margin-bottom: 40px;">{{ $profile->name }}</h2>
    <p>性別：{{ $profile->gender }}</p>
    <p>趣味：{{ $profile->hobby}}</p>
    <p>自己紹介：{{ $profile->introduction }}</p>
  </div>
@endsection
