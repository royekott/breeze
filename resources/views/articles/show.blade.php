@extends('layout')

@section('content')
    <section id="cta" class="wrapper">
        <div class="inner">
            <h2>{{$article->title}}</h2>
            <h3>{{$article->excerpt}}</h3>
            <p>{{$article->body}}</p>
            <p>
                @foreach($article->tags as $tag)

                    <a href="{{ route('articles.index', ['tag' => $tag->name]) }}">{{ $tag->name }}</a>

                @endforeach
            </p>
        </div>
    </section>
@endsection
