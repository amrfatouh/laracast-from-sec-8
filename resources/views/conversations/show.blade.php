@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $conversation->title }} - <small style="color: #888">by: {{ $conversation->user->name }}</small></h1>
    <p>{{ $conversation->body }}</p>
    <hr>
    <h3>Comments</h3>
    @forelse ($comments as $comment)
      <h5>{{ $comment->user->name }}</h5>
      <p>
        {{ $comment->body }}
        @if ($conversation->best_comment_id === $comment->id)
          <span style="color: #0a0; font-size: 1.5em;">✔</span>
          <span style="color: #0a0; font-size: 1.2em;">Best Comment</span>
        @endif
      </p>
      @can('update', $conversation)
        <form action="{{ route('bestComment.post', $comment->id) }}" method="POST">
          @csrf
          <button type="submit" class="btn btn-primary">Best Comment?</button>
        </form>
      @endcan
      <br>
      @empty
        <p>No Comments</p>
    @endforelse
</div>
@endsection
