@extends('layouts.onlyheader')

@section('title', ' Bank Soal')

@section('content')

    <style>
        input[type=search] {
            outline: none;
            border: none;
            background: #C4C4C4;
        }

        input[type=search]::-moz-focus-inner {
            border: 0;
        }

        input[type=search]:focus {
            outline: none;
        }

        .share-button button {
            background: #C4C4C4;
            border: none;
        }

        .share-button button:active {
            background: #C4C4C4;
            border: none !important;
            outline: none !important;
        }

        .share-button button:focus {
            background: #C4C4C4;
            border: none !important;
            outline: none !important;
        }

    </style>

    <div class="content">
        <!-- Bank Soal -->
        <div class="bg-ezb-bg-explore overflow-hidden">
            <div class="pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 mx-auto">
                <div class="text-center mb-5">
                    <div class="flex items-center justify-center">
                        <div class="flex w-full lg:w-1/2 rounded-lg" style="background: #C4C4C4">
                            <input type="search" class="px-4 py-2 w-full rounded-lg" placeholder=" Search...">
                            <div class="share-button flex">
                                <button class="flex items-center justify-center px-4 rounded-lg">
                                    <svg class="w-6 h-6 text-gray-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 24 24">
                                        <path
                                            d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center my-3 md:flex gap-4">
                    <div class="cotainer">
                        <a href="#">
                            <img src="{{ asset('/assets/FilePDF.svg') }}" alt="FilePDF">
                            <p class="text-black font-semibold">Data Structure : AVL Tree</p>
                        </a>
                    </div>
                    <div class="cotainer">
                        <a href="#">
                            <img src="{{ asset('/assets/FilePDF.svg') }}" alt="FilePDF">
                            <p class="text-black font-semibold">Data Structure : AVL Tree</p>
                        </a>
                    </div>
                    <div class="cotainer">
                        <a href="#">
                            <img src="{{ asset('/assets/FilePDF.svg') }}" alt="FilePDF">
                            <p class="text-black font-semibold">Data Structure : AVL Tree</p>
                        </a>
                    </div>
                    <div class="cotainer">
                        <a href="#">
                            <img src="{{ asset('/assets/FilePDF.svg') }}" alt="FilePDF">
                            <p class="text-black font-semibold">Data Structure : AVL Tree</p>
                        </a>
                    </div>
                    <div class="cotainer">
                        <a href="#">
                            <img src="{{ asset('/assets/FilePDF.svg') }}" alt="FilePDF">
                            <p class="text-black font-semibold">Data Structure : AVL Tree</p>
                        </a>
                    </div>

                </div>
                <div class="flex justify-center my-3 md:flex gap-4">
                    <div class="cotainer">
                        <a href="#">
                            <img src="{{ asset('/assets/FilePDF.svg') }}" alt="FilePDF">
                            <p class="text-black font-semibold">Data Structure : AVL Tree</p>
                        </a>
                    </div>
                    <div class="cotainer">
                        <a href="#">
                            <img src="{{ asset('/assets/FilePDF.svg') }}" alt="FilePDF">
                            <p class="text-black font-semibold">Data Structure : AVL Tree</p>
                        </a>
                    </div>
                    <div class="cotainer">
                        <a href="#">
                            <img src="{{ asset('/assets/FilePDF.svg') }}" alt="FilePDF">
                            <p class="text-black font-semibold">Data Structure : AVL Tree</p>
                        </a>
                    </div>
                    <div class="cotainer">
                        <a href="#">
                            <img src="{{ asset('/assets/FilePDF.svg') }}" alt="FilePDF">
                            <p class="text-black font-semibold">Data Structure : AVL Tree</p>
                        </a>
                    </div>
                    <div class="cotainer">
                        <a href="#">
                            <img src="{{ asset('/assets/FilePDF.svg') }}" alt="FilePDF">
                            <p class="text-black font-semibold">Data Structure : AVL Tree</p>
                        </a>
                    </div>
                </div>
                <div class="flex justify-center my-3 md:flex gap-4">
                    <div class="cotainer">
                        <a href="#">
                            <img src="{{ asset('/assets/FilePDF.svg') }}" alt="FilePDF">
                            <p class="text-black font-semibold">Data Structure : AVL Tree</p>
                        </a>
                    </div>
                    <<div class="cotainer">
                        <a href="#">
                            <img src="{{ asset('/assets/FilePDF.svg') }}" alt="FilePDF">
                            <p class="text-black font-semibold">Data Structure : AVL Tree</p>
                        </a>
                    </div>
                    <div class="cotainer">
                        <a href="#">
                            <img src="{{ asset('/assets/FilePDF.svg') }}" alt="FilePDF">
                            <p class="text-black font-semibold">Data Structure : AVL Tree</p>
                        </a>
                    </div>
                    <div class="cotainer">
                        <a href="#">
                            <img src="{{ asset('/assets/FilePDF.svg') }}" alt="FilePDF">
                            <p class="text-black font-semibold">Data Structure : AVL Tree</p>
                        </a>
                    </div>
                    <div class="cotainer">
                        <a href="#">
                            <img src="{{ asset('/assets/FilePDF.svg') }}" alt="FilePDF">
                            <p class="text-black font-semibold">Data Structure : AVL Tree</p>
                        </a>
                    </div>

                </div>
                <div class="flex justify-center my-3 md:flex gap-4">
                    <div class="cotainer">
                        <a href="#">
                            <img src="{{ asset('/assets/FilePDF.svg') }}" alt="FilePDF">
                            <p class="text-black font-semibold">Data Structure : AVL Tree</p>
                        </a>
                    </div>
                    <div class="cotainer">
                        <a href="#">
                            <img src="{{ asset('/assets/FilePDF.svg') }}" alt="FilePDF">
                            <p class="text-black font-semibold">Data Structure : AVL Tree</p>
                        </a>
                    </div>
                    <div class="cotainer">
                        <a href="#">
                            <img src="{{ asset('/assets/FilePDF.svg') }}" alt="FilePDF">
                            <p class="text-black font-semibold">Data Structure : AVL Tree</p>
                        </a>
                    </div>
                    <div class="cotainer">
                        <a href="#">
                            <img src="{{ asset('/assets/FilePDF.svg') }}" alt="FilePDF">
                            <p class="text-black font-semibold">Data Structure : AVL Tree</p>
                        </a>
                    </div>
                    <div class="cotainer">
                        <a href="#">
                            <img src="{{ asset('/assets/FilePDF.svg') }}" alt="FilePDF">
                            <p class="text-black font-semibold">Data Structure : AVL Tree</p>
                        </a>
                    </div>

                </div>
                <div class="flex justify-center my-3 md:flex gap-4">
                    <div class="cotainer">
                        <a href="#">
                            <img src="{{ asset('/assets/FilePDF.svg') }}" alt="FilePDF">
                            <p class="text-black font-semibold">Data Structure : AVL Tree</p>
                        </a>
                    </div>
                    <div class="cotainer">
                        <a href="#">
                            <img src="{{ asset('/assets/FilePDF.svg') }}" alt="FilePDF">
                            <p class="text-black font-semibold">Data Structure : AVL Tree</p>
                        </a>
                    </div>
                    <div class="cotainer">
                        <a href="#">
                            <img src="{{ asset('/assets/FilePDF.svg') }}" alt="FilePDF">
                            <p class="text-black font-semibold">Data Structure : AVL Tree</p>
                        </a>
                    </div>
                    <div class="cotainer">
                        <a href="#">
                            <img src="{{ asset('/assets/FilePDF.svg') }}" alt="FilePDF">
                            <p class="text-black font-semibold">Data Structure : AVL Tree</p>
                        </a>
                    </div>
                    <div class="cotainer">
                        <a href="#">
                            <img src="{{ asset('/assets/FilePDF.svg') }}" alt="FilePDF">
                            <p class="text-black font-semibold">Data Structure : AVL Tree</p>
                        </a>
                    </div>
            </div>
        </div>
    </div>

@endsection
