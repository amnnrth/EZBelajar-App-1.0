@extends('layouts.front')

@section('title', ' Tentang Kami')

@section('content')

    <div class="content">
        <!-- services -->
        <div class="bg-serv-bg-explore overflow-hidden">
            <div class="pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 mx-auto">
                <div class="text-center mb-5">
                    <img src=" {{ asset('/assets/images/logo.svg') }}" alt="About Us Image">
                </div>
            </div>
            <div class="pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2">
                    <div class="flex justify-center px-4 py-2">
                        <img src="{{ asset('/assets/images/article/article-1.png') }}" style="height: 300px" alt="">
                    </div>
                    <div class="flex justify-center px-4 py-2">
                        <div class="py-4">
                            <h1 class="text-3xl font-bold">Memberikan Kebutuhan Belajar lebih Mudah</h1>
                            <p class="text-base font-semibold py-2">Kami adalah sekelompok orang yang ingin memberikan
                                pengalaman belajar yang lebih mudah. Dengan materi yang
                                mudah didapatkan dan mudah dipahami oleh orang-orang
                                yang ingin mendapatkan ilmu yang bermanfaat.
                                Dengan harapan aplikasi ini bisa membuat orang-orang
                                mempunyai wawasan yang lebih luas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
