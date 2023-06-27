@extends('layouts.app')

@section('content')
    <main>
        <div id="slider_wrapper">
            <button id="current_btn" class="btn btn-primary border-primary text-white">CURRENT SERIES</button>
            <div class="container p-2 d-flex flex-wrap">
                @foreach ($info as $item)
                    <div class="my_slide p-2">
                        <div>{{ $item['title'] }}</div>

                    </div>
                @endforeach
                {{-- <div v-for="thumb in myJson" class="my_slide p-2">
                    <img :src="thumb.thumb" alt="icon">
                    <h6 class="slide_title p-2">{{ thumb . series }}</h6>
                    <span class="slide_title pl-2">{{ thumb . price }}</span>
                </div> --}}
                <button id="load_btn" class="btn btn-primary border-primary text-white">LOAD MORE</button>
            </div>
        </div>
    </main>
@endsection
