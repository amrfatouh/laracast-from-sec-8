@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($conversations as $conversation)
      <a href="{{ route('conversations.show', $conversation->id) }}"><h2>{{ $conversation->title }}</h2></a>  
      <h5>Author: {{ $conversation->user->name }}</h5>
      <p>{{ $conversation->body }}</p>
    @endforeach
</div>
@endsection
