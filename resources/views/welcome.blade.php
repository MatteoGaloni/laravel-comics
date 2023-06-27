@extends('layouts.app')

@section('content')
    <main>
        <div id="slider_wrapper">
            <button id="current_btn" class="btn btn-primary border-primary text-white">CURRENT SERIES</button>
            <div class="container p-2 d-flex flex-wrap">
                @foreach ($info as $thumb)
                    <div class="my_slide p-2">
                        <img src="{{ $thumb['thumb'] }}" alt="$thumb['title']">
                        <h6 class="slide_title p-2">{{ $thumb['title'] }}</h6>

                    </div>
                @endforeach
                <button id="load_btn" class="btn btn-primary border-primary text-white">LOAD MORE</button>
            </div>
        </div>
    </main>
@endsection
