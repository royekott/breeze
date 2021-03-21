@extends('layout')

@section('content')
    <div class="wrapper">
        <div class="inner">
            <a href="/conversations">Back</a>
            <h1>{{ $conversation->title }}</h1>
            <p class="text-muted">Posted By {{$conversation->user->name }}</p>
            <div>
                {{$conversation->body}}
            </div>

            <hr>

            @include('conversations.replies')

        </div>
    </div>
@endsection
