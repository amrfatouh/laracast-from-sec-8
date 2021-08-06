<pre>
  {{ \App\Conversation::find(1) }}
</pre>
<pre>
  {{ request()->user() }}
</pre>

<pre>
  {{ \App\Conversation::find(1)->user->id === request()->user()->id }}
</pre>

<pre>
  {{ Gate::inspect('update', \App\Conversation::find(1))->message() }}
</pre>

@if (Gate::allows('update', \App\Conversation::find(1)))
  true
@else
  false
@endif