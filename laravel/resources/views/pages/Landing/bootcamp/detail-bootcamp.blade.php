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
                                <button class="lg:bg-ezb-services-bg text-white text-lg font-semibold py-4 px-12 my-2 rounded-lg" data-aos="zoom-in">
                                    {{ 'Rp. '.number_format($post->price) ?? ''}}
                                </button>
                            </a>
                        </div>
                    </div>

{{--                    <div class="lg:flex-grow lg:w-1/2 flex flex-col lg:items-start lg:text-left mb-3 md:mb-12 lg:mb-0 items-center text-center">--}}
{{--                        <h1 class="text-black-1 lg:leading-normal sm:text-4xl lg:text-5xl text-3xl mb-5 font-semibold lg:mt-20" data-aos="zoom-in">--}}
{{--                            {{ $post->title ?? '' }}--}}
{{--                        </h1>--}}
{{--                        <p class="text-lg leading-relaxed text-serv-text font-light tracking-wide mb-10 lg:mb-18 " data-aos="zoom-in">--}}
{{--                            {{ $post->description ?? '' }}--}}
{{--                        </p>--}}
{{--                        <div class="md:flex contents items-center mx-auto lg:mx-0 lg:flex justify-center lg:space-x-8 md:space-x-2 space-x-0">--}}
{{--                            <a href="https://api.whatsapp.com/send?phone=6285312727272">--}}
{{--                                <button class="lg:bg-serv-services-bg text-white text-lg font-semibold py-4 px-12 my-2 rounded-lg" data-aos="zoom-in">--}}
{{--                                    {{ 'Rp. '.number_format($post->price) ?? ''}} }}--}}
{{--                                </button>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="w-full lg:w-1/2 text-center lg:justify-start justify-center flex pr-0">
                        <img class="bottom-0 lg:block lg:right-24 md:right-16 sm:right-8 right-8 w-auto"
                             src="{{ Storage::url($post->thumbnail_bootcamp) ?? '' }}" alt="" data-aos="zoom-in"/>
                    </div>

                </div>
            </div>

            <div class="hero">
                <div class="mx-auto flex pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 lg:flex-row flex-col">
                    <!-- Left Column -->
                    <div class="lg:flex-grow lg:w-1/2 flex flex-col lg:items-start lg:text-left mb-3 md:mb-12 lg:mb-0 items-center text-center">
                        <h1 class="text-black-1 lg:leading-normal sm:text-4xl lg:text-5xl text-3xl mb-5 font-semibold lg:mt-20" data-aos="zoom-in">
                            <span><strong>STUDY CASE :</strong></span> {{ $post->title_study_case ?? '' }}
                        </h1>
                        <p class="text-lg leading-relaxed text-serv-text font-light tracking-wide mb-10 lg:mb-18 " data-aos="zoom-in">
                            {{ $post->description_study_case ?? '' }}
                        </p>
{{--                        <div class="md:flex contents items-center mx-auto lg:mx-0 lg:flex justify-center lg:space-x-8 md:space-x-2 space-x-0">--}}
{{--                            <a href="https://api.whatsapp.com/send?phone=6285312727272">--}}
{{--                                <button class="lg:bg-ezb-services-bg text-white text-lg font-semibold py-4 px-12 my-2 rounded-lg" data-aos="zoom-in">--}}
{{--                                    {{ 'Rp. '.number_format($post->price) ?? ''}}--}}
{{--                                </button>--}}
{{--                            </a>--}}
{{--                        </div>--}}
                    </div>

                    {{--                    <div class="lg:flex-grow lg:w-1/2 flex flex-col lg:items-start lg:text-left mb-3 md:mb-12 lg:mb-0 items-center text-center">--}}
                    {{--                        <h1 class="text-black-1 lg:leading-normal sm:text-4xl lg:text-5xl text-3xl mb-5 font-semibold lg:mt-20" data-aos="zoom-in">--}}
                    {{--                            {{ $post->title ?? '' }}--}}
                    {{--                        </h1>--}}
                    {{--                        <p class="text-lg leading-relaxed text-serv-text font-light tracking-wide mb-10 lg:mb-18 " data-aos="zoom-in">--}}
                    {{--                            {{ $post->description ?? '' }}--}}
                    {{--                        </p>--}}
                    {{--                        <div class="md:flex contents items-center mx-auto lg:mx-0 lg:flex justify-center lg:space-x-8 md:space-x-2 space-x-0">--}}
                    {{--                            <a href="https://api.whatsapp.com/send?phone=6285312727272">--}}
                    {{--                                <button class="lg:bg-serv-services-bg text-white text-lg font-semibold py-4 px-12 my-2 rounded-lg" data-aos="zoom-in">--}}
                    {{--                                    {{ 'Rp. '.number_format($post->price) ?? ''}} }}--}}
                    {{--                                </button>--}}
                    {{--                            </a>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

                    <div class="w-full lg:w-1/2 text-center lg:justify-start justify-center flex pr-0">
                        <img class="bottom-0 lg:block lg:right-24 md:right-16 sm:right-8 right-8 w-auto"
                             src="{{ Storage::url($post->thumbnail_bootcamp_study_case) ?? '' }}" alt="" data-aos="zoom-in"/>
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
                                @foreach ($post->advantage_bootcamp as $advantage)
                                    <div class="flex gap-4">
                                        <img src="{{ asset('assets/check.svg')}}" class="w-6 h-6" alt="check">
                                        <p class="text-black font-semibold mb-4">{{ $advantage->description ?? ''}}</p><br>
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
                            @foreach ($post->main_bootcamp as $main_materi)
                            <button class="accordion block p-5 leading-normal cursor-pointer sm:text-2xl text-xl text-start font-semibold mb-5 text-medium-black" data-aos="fade-up">
                                {{ $main_materi->description ?? '' }}</button>
                            <div class="panel">
                                @foreach($main_materi->detail_materi_bootcamp as $detail_materi)
                                <p class="p-5 flex gap-4"><img src="{{ asset('assets/check.svg')}}" class="w-6 h-5" alt="check">{{ $detail_materi->description ?? '' }}</p>
{{--                                <p class="p-5 flex gap-4"><img src="{{ asset('assets/check.svg')}}" class="w-6 h-5" alt="check"> maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>--}}
                                @endforeach
                            </div>
                            @endforeach
{{--                            <button class="accordion block p-5 leading-normal cursor-pointer sm:text-2xl text-xl text-start font-semibold mb-5 text-medium-black" data-aos="fade-up">Day 2</button>--}}
{{--                            <div class="panel">--}}
{{--                                <p class="p-5 flex gap-4"><img src="{{ asset('assets/check.svg')}}" class="w-6 h-5" alt="check">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo perferendis nostrum</p>--}}
{{--                                <p class="p-5 flex gap-4"><img src="{{ asset('assets/check.svg')}}" class="w-6 h-5" alt="check"> maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>--}}
{{--                            </div>--}}
{{--                            <button class="accordion block p-5 leading-normal cursor-pointer sm:text-2xl text-xl text-start font-semibold mb-5 text-medium-black" data-aos="fade-up">Day 3</button>--}}
{{--                            <div class="panel">--}}
{{--                                <p class="p-5 flex gap-4"><img src="{{ asset('assets/check.svg')}}" class="w-6 h-5" alt="check">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo perferendis nostrum</p>--}}
{{--                                <p class="p-5 flex gap-4"><img src="{{ asset('assets/check.svg')}}" class="w-6 h-5" alt="check"> maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>--}}
{{--                            </div>--}}
{{--                            <button class="accordion block p-5 leading-normal cursor-pointer sm:text-2xl text-xl text-start font-semibold mb-5 text-medium-black" data-aos="fade-up">Day 4</button>--}}
{{--                            <div class="panel">--}}
{{--                                <p class="p-5 flex gap-4"><img src="{{ asset('assets/check.svg')}}" class="w-6 h-5" alt="check">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo perferendis nostrum</p>--}}
{{--                                <p class="p-5 flex gap-4"><img src="{{ asset('assets/check.svg')}}" class="w-6 h-5" alt="check"> maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>--}}
{{--                            </div>--}}
{{--                            <button class="accordion block p-5 leading-normal cursor-pointer sm:text-2xl text-xl text-start font-semibold mb-5 text-medium-black" data-aos="fade-up">Day 5</button>--}}
{{--                            <div class="panel">--}}
{{--                                <p class="p-5 flex gap-4"><img src="{{ asset('assets/check.svg')}}" class="w-6 h-5" alt="check">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo perferendis nostrum</p>--}}
{{--                                <p class="p-5 flex gap-4"><img src="{{ asset('assets/check.svg')}}" class="w-6 h-5" alt="check"> maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>--}}
{{--                            </div>--}}


                            <p class="sm:text-2xl text-xl text-start font-semibold mb-5 text-blue mt-11" data-aos="fade-up">
                                Informasi dan Jadwal</p>
                            <p class="text-start font-normal text-medium-black" data-aos="fade-up">
                                Belajar lebih efektif dengan <br>
                                jadwal yang telah disiapkan
                            </p>
                            @foreach($post->detail_bootcamp as $detail)
                            <div class="flex gap-6 mt-11">
                                <div class="flex-col justify-center px-4 py-2 bccard mt-9" data-aos="fade-up">
                                    <img src="{{ asset('/assets/Regis.svg') }}" alt="regisicon" class="w-20 mb-5">
                                    <h1 class="sm:text-2xl text-xl text-start font-semibold mb-5 text-medium-black">Registrasi</h1>
                                    <p class="text-start font-normal mb-5 text-medium-black">Waktu Pendaftaran Bootcamp</p>
                                    <p class="text-start font-normal mb-5 text-medium-black">{{ $detail->registration ?? '' }}</p>
                                </div>
                                <div class="flex-col justify-center px-4 py-2 bccard mt-9" data-aos="fade-up">
                                    <img src="{{ asset('/assets/Durasi.svg') }}" alt="regisicon" class="w-20 mb-5">
                                    <h1 class="sm:text-2xl text-xl text-start font-semibold mb-5 text-medium-black">Durasi</h1>
                                    <p class="text-start font-normal mb-5 text-medium-black">Durasi Pelaksanaan Bootcamp</p>
                                    <p class="text-start font-normal mb-5 text-medium-black">{{ $detail->duration ?? '' }}</p>
                                </div>
                                <div class="flex-col justify-center px-4 py-2 bccard mt-9" data-aos="fade-up">
                                    <img src="{{ asset('/assets/Jadwal.svg') }}" alt="regisicon" class="w-20 mb-5">
                                    <h1 class="sm:text-2xl text-xl text-start font-semibold mb-5 text-medium-black">Jadwal</h1>
                                    <p class="text-start font-normal mb-5 text-medium-black">Jadwal Pelaksanaan Bootcamp</p>
                                    <p class="text-start font-normal mb-5 text-medium-black">Senin,Selasa,Rabu (15:00-17:00)</p>
                                </div>
                            </div>
                            <div class="flex gap-6">
                                <div class="flex-col justify-center px-4 py-2 bccard mt-9" data-aos="fade-up">
                                    <img src="{{ asset('/assets/Tanggal.svg') }}" alt="regisicon" class="w-20 mb-5">
                                    <h1 class="sm:text-2xl text-xl text-start font-semibold mb-5 text-medium-black">Waktu Mulai</h1>
                                    <p class="text-start font-normal mb-5 text-medium-black">Tanggal dimulainya bootcamp</p>
                                    <p class="text-start font-normal mb-5 text-medium-black">{{ $detail->schedule ?? '' }}</p>
                                </div>
                                <div class="flex-col justify-center px-4 py-2 bccard mt-9" data-aos="fade-up">
                                    <img src="{{ asset('/assets/Media.svg') }}" alt="regisicon" class="w-20 mb-5">
                                    <h1 class="sm:text-2xl text-xl text-start font-semibold mb-5 text-medium-black">Media</h1>
                                    <p class="text-start font-normal mb-5 text-medium-black">Media Pelaksanaan Bootcamp</p>
                                    <p class="text-start font-normal mb-5 text-medium-black">{{ $detail->media ?? '' }}</p>
                                </div>
                                <div class="flex-col justify-center px-4 py-2 bccard mt-9" data-aos="fade-up">
                                    <img src="{{ asset('/assets/icondashboard/users.svg') }}" alt="regisicon" class="w-20 mb-5">
                                    <h1 class="sm:text-2xl text-xl text-start font-semibold mb-5 text-medium-black">Partisipan</h1>
                                    <p class="text-start font-normal mb-5 text-medium-black">Maksimal Partisipan pada Bootcamp</p>
                                    <p class="text-start font-normal mb-5 text-medium-black">{{ $detail->participant ?? '' }} orang</p>
                                </div>
                            </div>
                            @endforeach
                            <div class="flex justify-center items-center">
                                <div class="flex-col justify-center px-4 py-2 bootcampcard mt-9 pt-5 " data-aos="fade-up">
                                    <h1 class="sm:text-2xl text-xl text-center font-semibold mb-5 text-medium-black">{{ $post->title }}</h1>
                                    <p class="sm:text-2xl text-xl text-center font-semibold mb-5 disc-price blink mr-4" style="text-decoration-line: line-through;">
                                       <span>Rp. 5.000.000</span> </p>
                                    <p class="sm:text-2xl text-xl text-center font-semibold mb-5 text-medium-black">
                                        {{ 'Rp. '.number_format($post->price) ?? ''}}</p>
                                    <p class="text-lg leading-relaxed text-serv-text font-light tracking-wide mb-10 lg:mb-18">{{ substr($post->description, 0, 200) ?? '' }}</p>
                                    <hr class="solid">


                                    <div class="container mt-11">
                                        @foreach($post->advantage_bootcamp as $advantage)
                                        <div class="flex gap-4">
                                            <img src="{{ asset('assets/check.svg')}}" class="w-6 h-6" alt="check">
                                            <p class="text-black mb-4">{{ $advantage->description ?? '' }}</p> <br>
                                        </div>
                                        @endforeach
{{--                                        <div class="flex gap-4">--}}
{{--                                            <img src="{{ asset('assets/check.svg')}}" class="w-6 h-6" alt="check">--}}
{{--                                            <p class="text-black mb-4">Design project</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="flex gap-4">--}}
{{--                                            <img src="{{ asset('assets/check.svg')}}" class="w-6 h-6" alt="check">--}}
{{--                                            <p class="text-black mb-4">Konsultasi secara real-time</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="flex gap-4">--}}
{{--                                            <img src="{{ asset('assets/check.svg')}}" class="w-6 h-6" alt="check">--}}
{{--                                            <p class="text-black mb-4">Dan masih banyak lagi</p>--}}
{{--                                        </div>--}}
                                        <div class="md:flex contents items-center mx-auto lg:mx-0 lg:flex justify-center lg:space-x-8 md:space-x-2 space-x-0">
                                            <a href="https://api.whatsapp.com/send?phone=6285312727272">
                                                <button class="lg:bg-ezb-services-bg text-white text-lg font-semibold py-4 px-12 my-2 rounded-lg">
                                                    Daftar Sekarang
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('after-script')
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;
        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
@endpush