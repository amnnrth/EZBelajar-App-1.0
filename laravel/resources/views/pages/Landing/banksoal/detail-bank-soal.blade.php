@extends('layouts.front')

@section('title', ' Detail Soal')

@section('content')

    <div class="content">
        <div class="my-3 md:flex gap-4 pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 mx-auto">
            <div class="cotainer">
                <img src="{{ asset('/assets/FilePDF.svg') }}" alt="FilePDF">
                <p class="text-black font-semibold text-center">{{ $post->title }}</p>
            </div>
            <div>
                <p class="text-black font-semibold">Nama : <br>
                    <span class="text-black font-light">{{ $post->title }}</span></p>
                <p class="text-black font-semibold">Description : <br>
                    <span class="text-black font-light">{{ $post->body ?? '' }}</span></p>
                <br>
                <a href="{{ route('startQuiz') }}">

                    @if (Auth::guest())
                        <a href="#" onclick="toggleModal('loginModal')">
                    @else
                        <a href="{{ route('startQuiz') }}">
                    @endif
                        <button class="lg:bg-ezb-services-bg py-2 px-10 my-3 text-white">Quiz</button>
                </a>
                <br>
                   @if(Auth::guest())
                        <a href="#" onclick="toggleModal('loginModal')">
                    @else
                        <a href="{{ route('downloadFile',$post->title ?? '') }}" target="_blank">
                    @endif
                    <button class="lg:bg-ezb-services-bg py-2 px-5 my-3 text-white">Download</button>
                </a>
{{--                <a href="{{ route('startQuiz')}}">--}}
{{--                    <button class="lg:bg-ezb-services-bg py-2 px-5 my-3">Mulai Quiz</button>--}}
{{--                </a>--}}

            </div>
        </div>
    </div>


@endsection
