@extends('layout')

@section('content')
    <div class="wrapper">
        <form
            method="POST"
            action="/contact"
            class="inner"
        >
            @csrf

            <div class="container">
                <label
                    for="email"
                    class="label"
                >
                    Email Address
                </label>
                <input
                    type="text"
                    id="email"
                    name="email"
                    class="input"
                >

                @error('email')
                <h5 style="color: red;">{{ $message }}</h5>
                @enderror

            </div>

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
