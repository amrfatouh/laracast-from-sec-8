@extends('layouts.app')

@section('content')
<div class="container">
    <ul>
      @forelse ($notifications as $notification)
        @if ($notification->type === 'App\Notifications\PaymentReceived')
          <li>A payment of ${{ $notification->data['amount'] }} was received.</li>
        @endif
      @empty
        <div>No notifications to show</div>
      @endforelse
    </ul>
</div>
@endsection
