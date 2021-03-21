@extends('layout')

@section('content')
    <h1 id="testing">About Us</h1>
    <section class="wrapper">
        <div class="inner">
            <section class="wrapper">
                <div class="inner">
                    <header class="special">
                        <h2>Articles</h2>
                        <p>List of interesting articles for your soul...</p>
                    </header>
                    <div class="highlights">
                        @foreach($articles as $article)
                            <section>
                                <div class="content">
                                    <header>
                                        {{--<a href="#" class="icon fa-vcard-o"><span class="label">Icon</span></a>--}}
                                        <h3>
                                            <a href="/articles/{{$article->id}}">
                                                {{$article->title}}
                                            </a>
                                        </h3>
                                    </header>
                                    <p>{{$article->excerpt}}</p>
                                </div>
                            </section>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection
