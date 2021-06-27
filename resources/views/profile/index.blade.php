@extends('layouts.front')

@section('content')
  <div class="container">
    <h2>{{ $profile->name }}</h2>
    <p>{{ $profile->gender }}</p>
    <p>{{ $profile->hobby}}</p>
    <p>{{ $profile->introduction }}</p>
  </div>
@endsection
