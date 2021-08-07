@extends('layouts.app')

@section('content')
<div class="container">
  @can('edit_forum')
    <a href="#">edit forum</a>
  @endcan
</div>
@endsection
