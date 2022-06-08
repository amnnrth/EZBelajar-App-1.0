@extends('layouts.front')

@section('title', ' Detail Bootcamp')

@section('content')

    <div class="container mx-auto">

        <div class="hero-bg">
            <!-- hero -->
            <div class="hero">
                <div class="mx-auto flex pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 lg:flex-row flex-col">
                    <!-- Left Column -->
                    <div class="lg:flex-grow lg:w-1/2 flex flex-col lg:items-start lg:text-left mb-3 md:mb-12 lg:mb-0 items-center text-center">
                        <h1 class="text-black-1 lg:leading-normal sm:text-4xl lg:text-5xl text-3xl mb-5 font-semibold lg:mt-20" data-aos="zoom-in">
                            {{ $post->title ?? '' }}
                        </h1>
                        <p class="text-lg leading-relaxed text-serv-text font-light tracking-wide mb-10 lg:mb-18 " data-aos="zoom-in">
                            {{ $post->description ?? '' }}
                        </p>
                        <div class="md:flex contents items-center mx-auto lg:mx-0 lg:flex justify-center lg:space-x-8 md:space-x-2 space-x-0">
                            <a href="https://api.whatsapp.com/send?phone=6285312727272">
                                <button class="lg:bg-serv-services-bg text-white text-lg font-semibold py-4 px-12 my-2 rounded-lg" data-aos="zoom-in">
                                    {{ 'Rp. '.number_format($post->price) ?? ''}} }}
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="w-full lg:w-1/2 text-center lg:justify-start justify-center flex pr-0">
                        <img class="bottom-0 lg:block lg:right-24 md:right-16 sm:right-8 right-8 w-auto"
                             src="{{ Storage::url($post->thumbnail_bootcamp) ?? '' }}" alt="" data-aos="zoom-in"/>
                    </div>

                </div>
            </div>



            <div class="content">
                <!-- services -->
                <!-- <div class="bg-serv-services-bg overflow-hidden"> -->
                <div class="mx-auto flex pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 lg:flex-row flex-col">
                    <div class="flex flex-col w-full h-auto">
                        <p class="sm:text-2xl text-xl text-start font-semibold mb-5 text-medium-black" data-aos="zoom-in">
                            Yang Akan Dipelajari </p>
                        <div class="flex-container text-starts">
                            <div class="container" data-aos="zoom-in">
                                @foreach ($post->advantage_bootcamp as $advantage) <br>
                                    <div class="flex gap-4">
                                        <img src="{{ asset('assets/check.svg')}}" class="w-6 h-6" alt="check">
                                        <p class="text-black font-semibold mb-4">{{ $advantage->description ?? ''}}</p>
                                    </div>
                                @endforeach
{{--                                <div class="flex gap-4">--}}
{{--                                    <img src="{{ asset('assets/check.svg')}}" class="w-6 h-6" alt="check">--}}
{{--                                    <p class="text-black font-semibold mb-4">Menggunakan Figma App untuk Penggunaan Komputer</p>--}}
{{--                                </div>--}}
{{--                                <div class="flex gap-4">--}}
{{--                                    <img src="{{ asset('assets/check.svg')}}" class="w-6 h-6" alt="check">--}}
{{--                                    <p class="text-black font-semibold mb-4">Memulai Figma dari Nol</p>--}}
{{--                                </div>--}}
{{--                                <div class="flex gap-4">--}}
{{--                                    <img src="{{ asset('assets/check.svg')}}" class="w-6 h-6" alt="check">--}}
{{--                                    <p class="text-black font-semibold mb-4">Pembuatan Frame untuk Smartphone, Desktop, dan lainnya</p>--}}
{{--                                </div>--}}
{{--                                <div class="flex gap-4">--}}
{{--                                    <img src="{{ asset('assets/check.svg')}}" class="w-6 h-6" alt="check">--}}
{{--                                    <p class="text-black font-semibold mb-4">Mempercantik Desain dengan Beragam Efek Khusus</p>--}}
{{--                                </div>--}}
{{--                                <div class="flex gap-4">--}}
{{--                                    <img src="{{ asset('assets/check.svg')}}" class="w-6 h-6" alt="check">--}}
{{--                                    <p class="text-black font-semibold mb-4">Mendesain Website dengan Cepat dan Menyenangkan</p>--}}
{{--                                </div>--}}
                            </div>
                            <div class="flex-col justify-center px-4 py-2 profilelecture" data-aos="fade-left">
                                @if($mentor_id->detail_user->first()->photo != null)
                                    <img class="inline ml-3 h-10 w-10 rounded-full" src="{{ Storage::url($mentor_id->detail_user->first()->photo) ?? '' }}" alt="" loading="lazy" />
                                @else
                                    <svg class="inline ml-3 h-10 w-10 rounded-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                @endif
                                <p class="text-black text-lg mb-3 font-bold">Nama: {{ $mentor_id->name ?? '' }}</p>
                                <p class="text-black text-lg mb-3 font-bold">Pekerjaan: {{ $mentor_id->detail_user->occupation ?? '' }}</p>
                                <p class="text-black text-lg mb-3 font-bold">Lulusan: Universitas Bina Nusantara</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="mx-auto flex pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 lg:flex-row flex-col">
                    <div class="flex flex-col w-full h-auto">
                        <p class="sm:text-2xl text-xl text-start font-semibold mb-5 text-medium-black" data-aos="fade-up">
                            Materi yang akan Dipelajari </p>
                        <div class="w-full md:w-4/5">

                            <div class="shadow-md">
                                <div class="tab w-full overflow-hidden border-t">
                                    <input class="absolute opacity-0" id="tab-single-one" type="radio" name="tabs2">
                                    @foreach($post->main_bootcamp as $materi)
                                    <label class="block p-5 leading-normal cursor-pointer sm:text-2xl text-xl text-start font-semibold mb-5 text-medium-black" for="tab-single-one">{{ $materi->description ?? '' }}</label>

                                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                                        @foreach($materi->detail_materi_bootcamp as $detail_materi)
                                        <p class="p-5 flex gap-4"><img src="{{ asset('assets/check.svg')}}" class="w-6 h-5" alt="check">{{ $detail_materi->description ?? '' }}</p>
                                        @endforeach
                                    </div>
                                    @endforeach
                                </div>
                                <div class="tab w-full overflow-hidden border-t">
                                    <input class="absolute opacity-0" id="tab-single-two" type="radio" name="tabs2">
                                    <label class="block p-5 leading-normal cursor-pointer sm:text-2xl text-xl text-start font-semibold mb-5 text-medium-black" for="tab-single-two">Day 2</label>
                                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                                        <p class="p-5 flex gap-4"><img src="{{ asset('assets/check.svg')}}" class="w-6 h-5" alt="check">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo perferendis nostrum</p>
                                        <p class="p-5 flex gap-4"><img src="{{ asset('assets/check.svg')}}" class="w-6 h-5" alt="check"> maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                                    </div>
                                </div>
{{--                                <div class="tab w-full overflow-hidden border-t">--}}
{{--                                    <input class="absolute opacity-0" id="tab-single-three" type="radio" name="tabs2">--}}
{{--                                    <label class="block p-5 leading-normal cursor-pointer sm:text-2xl text-xl text-start font-semibold mb-5 text-medium-blac" for="tab-single-three">Day 3</label>--}}
{{--                                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">--}}
{{--                                        <p class="p-5 flex gap-4"><img src="{{ asset('assets/check.svg')}}" class="w-6 h-5" alt="check">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo perferendis nostrum</p>--}}
{{--                                        <p class="p-5 flex gap-4"><img src="{{ asset('assets/check.svg')}}" class="w-6 h-5" alt="check"> maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="tab w-full overflow-hidden border-t">--}}
{{--                                    <input class="absolute opacity-0" id="tab-single-four" type="radio" name="tabs2">--}}
{{--                                    <label class="block p-5 leading-normal cursor-pointer sm:text-2xl text-xl text-start font-semibold mb-5 text-medium-blac" for="tab-single-four">Day 4</label>--}}
{{--                                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">--}}
{{--                                        <p class="p-5 flex gap-4"><img src="{{ asset('assets/check.svg')}}" class="w-6 h-5" alt="check">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo perferendis nostrum</p>--}}
{{--                                        <p class="p-5 flex gap-4"><img src="{{ asset('assets/check.svg')}}" class="w-6 h-5" alt="check"> maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="tab w-full overflow-hidden border-t">--}}
{{--                                    <input class="absolute opacity-0" id="tab-single-five" type="radio" name="tabs2">--}}
{{--                                    <label class="block p-5 leading-normal cursor-pointer sm:text-2xl text-xl text-start font-semibold mb-5 text-medium-blac" for="tab-single-five">Day 5</label>--}}
{{--                                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">--}}
{{--                                        <p class="p-5 flex gap-4"><img src="{{ asset('assets/check.svg')}}" class="w-6 h-5" alt="check">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo perferendis nostrum</p>--}}
{{--                                        <p class="p-5 flex gap-4"><img src="{{ asset('assets/check.svg')}}" class="w-6 h-5" alt="check"> maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}


                            </div>
                        </div>


                    <!-- <div class="container flex mx-auto justify-center">
    <div class="flex gap-6">
{{--        <img src="{{ asset('/assets/images/FotoDepan.jpg') }}" alt="ProfileLecturer" data-aos="fade-right">--}}
        <div class="flex-col">
            <h1 class="text-black-1 lg:leading-normal sm:text-4xl lg:text-5xl text-3xl mb-5 font-semibold lg:mt-20" data-aos="zoom-in">UI & UX Design</h1>
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <p>Kamu akan mempelajari secara menyeluruh berbagai keterampilan yang dibutuhkan seorang UI/UX Designer mulai dari fundamental UI/UX Design
                        hingga mampu mendesain website atau aplikasi yang berorientasi pada kebutuhan pengguna.</p>
                    </div>
                        <br>
                    <p>Benefit yang didapatkan :</p>
                    <br>
                        <li>Sistem E-Learning yang Praktis dan Lengkap</li>
                        <li>Keterampilan UI/UX Design Sesuai Kebutuhan Industri</li>
                        <li>Praktisi Terbaik di Industri</li>
                        <li>Praktisi Terbaik di Industr</li>
                        <li>Praktisi Terbaik di Industr</li>
                        <li>Praktisi Terbaik di Industr</li>
{{--                    <a href="{{ route('kelas.bootcamp.navbar.pages') }}">--}}
                    <button class="bg-serv-bg py-4 px-12">$9.99</button>
                    </a>
        </div>
    </div>-->
                        <!-- <div class="w-full"> -->
                    <!-- <img src="{{asset('assets/Vector8.png')}}" alt="Background"> -->
                        <!-- </div> -->
                        <!--</div> -->

@endsection