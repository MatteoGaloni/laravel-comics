@extends('layouts.app')

@section('content')
    <div id="slider_wrapper">
        <button id="current_btn" class="btn btn-primary border-primary text-white">CURRENT SERIES</button>
        <div class="container p-2 d-flex flex-wrap">
            @foreach ($info as $thumb)
                @if ($loop->first)
                    <div class="my_slide p-2">
                        <a href="actionComics">
                            <img src="{{ $thumb['thumb'] }}" alt="$thumb['series']">
                            <h6 class="slide_series p-2">{{ $thumb['series'] }}</h6>
                        </a>
                    </div>
                @else
                    <div class="my_slide p-2">
                        <img src="{{ $thumb['thumb'] }}" alt="$thumb['series']">
                        <h6 class="slide_series p-2">{{ $thumb['series'] }}</h6>

                    </div>
                @endif
            @endforeach
            <button id="load_btn" class="btn btn-primary border-primary text-white">LOAD MORE</button>
        </div>
    </div>
@endsection
