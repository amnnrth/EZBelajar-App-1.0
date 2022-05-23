@extends('layouts.front')

@section('title', 'Artikel')

@section('content')

    <div class="content">
        <!-- services -->
        <div class="bg-serv-bg-explore overflow-hidden">
            <div class="pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 mx-auto">

                <div class="text-center mb-5">
                    <div class="flex items-center justify-center">
                        <div class="flex w-full lg:w-1/2 rounded-lg" style="background: #C4C4C4">
                            <form method="{{ '/artikel' }}" class="flex w-full rounded-lg" style="background: #C4C4C4">
                                <input type="search" name="search" class="px-4 py-2 w-full rounded-lg" placeholder=" Search..." value="{{ request('search') }}" style="background: #C4C4C4">
                                <div class="share-button flex">
                                    <button class="flex items-center justify-center px-4 rounded-lg">
                                        <svg class="w-6 h-6 text-gray-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 24 24">
                                            <path
                                                    d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="mt-12 grid gap-5 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">
                    @foreach ($posts as $post)
                        <a href="{{ route('detailartikel',$post->slug) }}">
                            {{-- Post --}}
                            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                                {{-- Header --}}
                                <div class="flex-shrink-0">
                                    <img class="h-48 w-full object-cover" src="{{ Storage::url($post->imagePath) }}" alt="blog image">
                                </div>

                                {{-- Contet --}}
                                <div class="flex-1 p-6 flex flex-col justify-between">
                                    <div class="flex-1">
                                        <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">{{ $post->title }}</h3>
                                        <p class="mt-3 text-base leading-6 text-gray-500">
                                            @if (strlen($post->text) > 200)
                                                {{ substr($post->text, 0, 200) }}...
                                            @else
                                                {{ $post->text }}
                                            @endif
                                        </p>
                                    </div>

                                    <div class="mt-6 flex items-center">
                                        <div class="flex-shrink-0">
                                            <img class="h-10 w-10 rounded-full" src="{{ url('https://unsplash.com/photos/IF9TK5Uy-KI')}}" alt="author avatar">
                                        </div>

                                        <div class="ml-3">
                                            <p class="text-sm leading-5 font-medium text-gray-900">{{ $post->user()->first()->name }}</p>
                                            <div class="flex text-sm leading-5 text-gray-500">
                                                <time datetime="{{ $post->created_at }}">
                                                    {{ $post->created_at->diffForHumans() }}
                                                </time>
                                                <span class="mx-1">&middot;</span>
                                                <span>{{ ceil(strlen($post->text) / 863) }} min read</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>



{{--                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">--}}
{{--                    @foreach($posts as $post)--}}
{{--                    <div class="flex justify-center px-4 py-2">--}}
{{--                        <a href="{{ route('detailartikel',$post->slug) }}">--}}
{{--                            <img src="{{ Storage::url($post->imagePath) }}" style="height: 300px" alt="">--}}
{{--                            <div class="text-center py-4">--}}
{{--                                <h1 class="text-3xl font-semibold">{{ $post->title}}</h1>--}}
{{--                                <p class="text-base font-semibold">{{ $post->body }}.</p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    @endforeach--}}
{{--                    <div class="flex justify-center px-4 py-2">--}}
{{--                        <a href="#">--}}
{{--                            <img src="{{ asset('/assets/images/article/article-2.png') }}" style="height: 300px" alt="">--}}
{{--                            <div class="text-center py-4">--}}
{{--                                <h1 class="text-3xl font-semibold">AVL Tree</h1>--}}
{{--                                <p class="text-base font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing elit.--}}
{{--                                    Eget donec vel vitae rhoncus--}}
{{--                                    ullamcorper id enim hendrerit. Praesent ultrices porttitor velit consequat adipiscing--}}
{{--                                    morbi habitasse diam. Lorem vulputate a commodo vel sapien sed augue. Hendrerit turpis--}}
{{--                                    diam cursus amet, tortor a. Pellentesque tempor, non accumsan neque, morbi ac massa--}}
{{--                                    cursus interdum. Duis condimentum sed interdum commodo mauris mus.</p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="flex justify-center px-4 py-2">--}}
{{--                        <a href="#">--}}
{{--                            <img src="{{ asset('/assets/images/article/article-3.png') }}" style="height: 300px" alt="">--}}
{{--                            <div class="text-center py-4">--}}
{{--                                <h1 class="text-3xl font-semibold">AVL Tree</h1>--}}
{{--                                <p class="text-base font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing elit.--}}
{{--                                    Eget donec vel vitae rhoncus--}}
{{--                                    ullamcorper id enim hendrerit. Praesent ultrices porttitor velit consequat adipiscing--}}
{{--                                    morbi habitasse diam. Lorem vulputate a commodo vel sapien sed augue. Hendrerit turpis--}}
{{--                                    diam cursus amet, tortor a. Pellentesque tempor, non accumsan neque, morbi ac massa--}}
{{--                                    cursus interdum. Duis condimentum sed interdum commodo mauris mus.</p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>

@endsection
