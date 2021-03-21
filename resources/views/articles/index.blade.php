@extends('layout')

@section('content')
    <section class="wrapper">
        <div class="inner">
            <h1>Articles</h1>
            <header class="special">
                <h2>Games</h2>
                <p>List of interesting Games Articles for your soul...</p>
            </header>
            <div class="highlights">
                @forelse($articles as $article)
                    <section>
                        <div class="content">
                            <header>
                                <h3>
                                    <a href="{{$article->path()}}">
                                        {{$article->title}}
                                    </a>
                                </h3>
                            </header>
                            <p>{{$article->excerpt}}</p>
                        </div>
                    </section>
                @empty
                    <p>No Relevant Articles Yet.</p>
                @endforelse
            </div>
        </div>
    </section>
@endsection
