@extends('layouts.onlyheader')

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
                <p class="text-black font-semibold">Jumlah soal : <br>
                    <span class="text-black font-light">10</span></p>
                <br>
                <a href="#">
                    <button class="lg:bg-ezb-services-bg py-2 px-10 my-3">Download Soal</button>
                </a>
                <br>
                <a href="#">
                    <button class="lg:bg-ezb-services-bg py-2 px-5 my-3">Download Jawaban</button>
                </a>
            </div>
        </div>
    </div>


@endsection
