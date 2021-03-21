@extends('layout')

@section('content')
    <div class="wrapper">
        <div class="inner">
            @foreach($conversations as $conversation)
                <h2><a href="/conversations/ {{ $conversation->id }}"> {{ $conversation->title }} </a> </h2>

                @continue($loop->last)
                <hr>
            @endforeach
        </div>
    </div>
@endsection
