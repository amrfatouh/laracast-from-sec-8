@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $conversation->title }}</h1>
    <p>{{ $conversation->body }}</p>
    <hr>
    <h3>Comments</h3>
    @forelse ($comments as $comment)
      <h5>{{ $comment->user->name }}</h5>
      <p>{{ $comment->body }}</p>
      @empty
        <p>No Comments</p>
    @endforelse
</div>
@endsection
