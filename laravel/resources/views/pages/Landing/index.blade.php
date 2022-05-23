@extends('layouts.front')

@section('title', ' Beranda')

@section('content')

    {{-- top --}}

    <div class="container mx-auto">

        <div class="hero-bg">
            <!-- hero -->
            <div class="hero">
                <div class="mx-auto flex pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 lg:flex-row flex-col">
                    <!-- Left Column -->
                    <div
                        class="lg:flex-grow lg:w-1/2 flex flex-col lg:items-start lg:text-left mb-3 md:mb-12 lg:mb-0 items-center text-center">
                        <h1
                            class="text-black-1 lg:leading-normal sm:text-4xl lg:text-5xl text-3xl mb-5 font-semibold lg:mt-20">
                            Memberikan Kebutuhan Belajar lebih Mudah
                        </h1>
                        <p class="text-lg leading-relaxed text-ezb-text font-light tracking-wide mb-10 lg:mb-18 flex-container">
                            Bingung mencari materi kuliah? Ez belajar adalah solusinya!
                            Materi kuliah apapun bisa kalian temukan disini. Kalian juga bisa
                            Berdiskusi tanya jawab seputar materi kuliah yang belum di mengerti,
                            dan Ez Belajar menyediakan Bank Soal untuk mengasah kemampuan
                            kalian juga lho!! tunggu apalagi? langsung daftar sekarang juga
                        </p>

                        @guest
                            <div
                                    class="md:flex contents items-center mx-auto lg:mx-0 lg:flex justify-center lg:space-x-8 md:space-x-2 space-x-0">
                                    <button class="lg:bg-ezb-services-bg text-white text-lg font-semibold py-4 px-12 my-2 rounded-lg" onclick="toggleModal('loginModal')">
                                        YUK BELAJAR!
                                    </button>
                            </div>
                        @endguest

                        @auth()
                        <div
                            class="md:flex contents items-center mx-auto lg:mx-0 lg:flex justify-center lg:space-x-8 md:space-x-2 space-x-0">
                            <a href="{{ route('belajar.index') }}">
                            <button class="lg:bg-ezb-services-bg text-white text-lg font-semibold py-4 px-12 my-2 rounded-lg">
                                YUK BELAJAR!
                            </button>
                            </a>
                        </div>
                        @endauth

                    </div>
                    <!-- Right Column -->
                    <div class="w-full lg:w-1/2 text-center lg:justify-start justify-center flex pr-0">
                        <img class="bottom-0 lg:block lg:right-24 md:right-16 sm:right-8 right-8 w-auto"
                             src="{{ asset('/assets/images/FotoDepan.jpg') }}" alt="" />
                    </div>

                </div>
            </div>
        </div>

        {{-- content --}}
        <div class="content">
            <!-- <div class="bg-serv-services-bg overflow-hidden"> -->
            <div class="pt-16 pb-16 lg:pb-20 my-auto mx-auto">
                <div class="flex flex-col w-full h-auto">
                    <p class="sm:text-2xl text-xl text-center font-semibold mb-5 text-medium-black" data-aos="zoom-in">
                        Keuntungan Belajar dari EZBelajar </p>
                    <div class="flex-container mx-auto">
                        <div class="container" >
                            <div class="my-3 md:flex gap-4 ml-24" data-aos="zoom-in">
                                <img src="{{ asset('assets/images/iconkeuntungan/banksoal.svg')}}" class="w-10 h-10" alt="Bank Soal">
                                <p class="text-black font-semibold">Bank Soal<br/> <span class="text-serv-text font-medium">Tersedia beraneka ragam macam </br>
                                        soal untuk mengasah kemampuan </br>
                                        dan pengetahuan kalian</span></p>
                            </div>
                            <div class="my-3 md:flex gap-4 ml-24" data-aos="zoom-in">
                                <img src="{{ asset('assets/images/iconkeuntungan/materi.svg')}}" class="w-10 h-10" alt="Materi">
                                <p class="text-black font-semibold">Materi Sesuai<br/> <span class="text-serv-text font-medium">Materi yang diberikan </br>sesuai dengan kebutuhan</span></p>
                            </div>
                        </div>
                        <div class="container">
                            <div class="my-3 md:flex gap-4 ml-24" data-aos="zoom-in">
                                <img src="{{ asset('assets/images/iconkeuntungan/filter.svg')}}" class="w-10 h-10" alt="Terfilterisasi">
                                <p class="text-black font-semibold">Terfilterisasi<br/> <span class="text-serv-text font-medium">Materi video yang diberikan </br>sudah terfilter oleh tim kami untuk di sajikan</span></p></p>
                            </div>
                            <div class="my-3 md:flex gap-4 ml-24" data-aos="zoom-in">
                                <img src="{{ asset('assets/images/iconkeuntungan/diskusi.svg')}}" class="w-10 h-10" alt="Diskusi">
                                <p class="text-black font-semibold">Diskusi Bersama <br/> <span class="text-serv-text font-medium">Berdiskusi bersama user lain </br> untuk membahas pembelajaran</span></p>
                            </div>
                        </div>
                        <div class="container">
                            <div class="my-3 md:flex gap-4 ml-24" data-aos="zoom-in">
                                <img src="{{ asset('assets/images/iconkeuntungan/access.svg')}}" class="w-10 h-10" alt="Access">
                                <p class="text-black font-semibold">Mudah di Akses<br/><span class="text-serv-text font-medium">Dapat di akses dengan mudah</br> oleh kalangan pelajar dan </br>pekerja</span></p>
                            </div>
                            <div class="my-3 md:flex gap-4 ml-24" data-aos="zoom-in">
                                <img src="{{ asset('assets/images/iconkeuntungan/artikel.svg')}}" class="w-10 h-10" alt="Artikel">
                                <p class="text-black font-semibold">Artikel<br/> <span class="text-serv-text font-medium">Banyak Artikel yang </br>mudah untuk di akses</span></p>
                            </div>
                        </div>
                    </div>



                <!-- <div class="lg:flex">
                        <div class="my-3 md:flex gap-4 ml-24">
                            <img src="{{ asset('assets/images/iconkeuntungan/diskusi.svg')}}" class="w-10 h-10" alt="Diskusi">
                            <p class="text-black font-semibold">Diskusi Bersama <br/> <span class="text-ezb-text font-medium">Berdiskusi bersama user lain </br> untuk membahas pembelajaran</span></p>
                        </div>
                        <div class="my-3 md:flex gap-4 ml-24">
                            <img src="{{ asset('assets/images/iconkeuntungan/filter.svg')}}" class="w-10 h-10" alt="Terfilterisasi">
                            <p class="text-black font-semibold">Terfilterisasi<br/> <span class="text-ezb-text font-medium">Materi video yang diberikan </br>sudah terfilter oleh tim kami untuk di sajikan</span></p></p>
                    </div>
                    <div class="my-3 md:flex gap-4 ml-24">
                        <img src="{{ asset('assets/images/iconkeuntungan/access.svg')}}" class="w-10 h-10" alt="Access">
                        <p class="text-black font-semibold">Mudah di Akses<br/><span class="text-ezb-text font-medium">Dapat di akses dengan mudah</br> oleh kalangan pelajar dan pekerja</span></p>
                    </div>
                </div>
                   <div class="lg:flex mt-2">
                       <div class="flex gap-4 ml-24">
                           <img src="{{ asset('assets/images/iconkeuntungan/materi.svg')}}" class="w-10 h-10" alt="Materi">
                           <p class="text-black font-semibold">Materi Sesuai<br/> <span class="text-ezb-text font-medium">Materi yang diberikan </br>sesuai dengan kebutuhan</span></p>
                        </div>
                        <div class="md:flex gap-4 pl-14">
                            <img src="{{ asset('assets/images/iconkeuntungan/banksoal.svg')}}" class="w-10 h-10" alt="Bank Soal">
                            <p class="text-black font-semibold">Bank Soal<br/> <span class="text-ezb-text font-medium">Tersedia beraneka ragam macam </br>
                                soal untuk mengasah kemampuan </br>
                                dan pengetahuan kalian</span></p>
                            </div>
                            <div class="md:flex gap-4 pl-17">
                                <img src="{{ asset('assets/images/iconkeuntungan/artikel.svg')}}" class="w-10 h-10" alt="Artikel">
                                <p class="text-black font-semibold">Artikel<br/> <span class="text-ezb-text font-medium">Banyak Artikel yang </br>mudah untuk di akses</span></p>
                            </div>
                        </div> -->
                </div>
            </div>
            <div class="flex overflow-x-scroll pb-10 hide-scroll-bar dragscroll -mx-3">
{{--                <div class="flex flex-nowrap">--}}
{{--                    @forelse ($services as $item)--}}
{{--                        @include('components.landing.service')--}}
{{--                    @empty--}}
{{--                        --}}{{-- empty --}}
{{--                    @endforelse--}}
{{--                </div>--}}

            </div>
        </div>


        <!-- call to action -->
        @foreach($posts as $post)
        <div class="py-10 lg:py-24 flex lg:flex-row flex-col items-center cta-bg">
            <!-- Left Column -->
            <div class="w-full lg:w-1/2 text-center justify-center flex lg:mb-0 mb-12">
                <div class="flex-shrink-0">
{{--                    <iframe src="{{ $post->link }}"   width="640" height="480" frameborder="0" scrolling="no" seamless="">--}}
                    <a href="{{ route('detailbelajar',$post->title) }}">
                        <img width="640" height="480" class="object-cover" src="{{ Storage::url($post->cover) }}" alt="blog image">
                    </a>
{{--                    </iframe>--}}
                </div>
{{--                <a href="{{ $post->link }}" data-lity>--}}
{{--                    <img id="hero" src="{{ Storage::url($post->cover) }}" alt="" class="p-5" />--}}
{{--                </a>--}}
            </div>
            <!-- Right Column -->
            <div class="lg:w-1/2 w-full flex flex-col lg:items-start items-center lg:text-left text-center">
                <h2 class="md:text-4xl text-3xl font-semibold mb-10 lg:leading-normal text-medium-black">
                    {{ $post->title }} <br>

                </h2>
                <a
                    href="{{ route('belajar.index') }}"
                    class="lg:bg-ezb-services-bg px-10 py-4 text-base text-white font-semibold rounded-xl cursor-pointer focus:outline-none tracking-wide">
                    Mulai
                </a>
            </div>
        </div>
        @endforeach

    </div>


@endsection
