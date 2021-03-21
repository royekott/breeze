@foreach ($conversation->replies as $reply)
    <div>
        <header style="display: flex; justify-content: space-between;">
            <p><strong>{{$reply->user->name}} said...</strong></p>

            @if($reply->isBest())
                <span style="color: green;">Best Reply!!!</span>
            @endif

        </header>

        {{$reply->body}}

        @can('update', $conversation)
            <form method="POST" action="/best-replies/{{ $reply->id }}">
                @csrf
                    <button
                        type="submit"
                    >Best Reply?
                    </button>
            </form>
        @endcan
    </div>

    @continue($loop->last)
    <hr>
@endforeach
