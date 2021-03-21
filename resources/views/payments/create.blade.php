@extends('layout')

@section('content')
    <div class="wrapper">
        <form
            method="POST"
            action="/payments"
            class="inner"
        >
            @csrf

            <button
                type="submit"
            >
                Email Me
            </button>
            @if(session('message'))
                <div>
                    {{ session('message') }}
                </div>
            @endif
        </form>
    </div>
@endsection
