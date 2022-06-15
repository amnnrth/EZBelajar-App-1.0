@extends('layouts.front')

@section('title', $post->title)

@section('content')

{{--sMain--}}
    <div class="bg-gray-50 py-16 px-4 sm:grid sm:grid-cols-12">
        <div class="sm:col-start-4 sm:col-span-6">
            <a href="{{ route('artikel') }}">
                <div class="bg-white text-center px-4 py-3 rounded-sm shadow-sm hover:shadow-md">Back</div>
            </a>


            <div class="bg-white mt-4 px-4 py-6 rounded-sm shadow-sm">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        @if($post->user->detail_user->first()->photo != null)
                            <img class="inline ml-3 h-10 w-10 rounded-full" src="#" alt="" loading="lazy" />
                        @else
                            <svg class="inline ml-3 h-10 w-10 rounded-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        @endif
                    </div>

                    <div class="ml-3">
                            <p class="text-sm leading-5 font-medium text-gray-900">{{ $post->user()->first()->name ?? ''}}</p>
                            <div class="flex text-sm leading-5 text-gray-500">
                                <time datetime="{{ $post->created_at ?? ''}}">
                                    {{ $post->created_at->diffForHumans() ?? ''}}
                                </time>
                                <span class="mx-1">&middot;</span>
                                <span>{{ ceil(strlen($post->body) / 863) ?? ''}} min read</span>
                            </div>
                    </div>
                </div>

                        <div class="mt-4 rounded-sm overflow-hidden">
                            <img class="w-full object-cover" src="{{ Storage::url($post->imagePath) ?? '' }}" alt="blog image">
                        </div>

                        <h2 class="mt-6 md:text-4xl leading-10 tracking-tight font-bold text-gray-900 text-center">{{ $post->title ?? ''}}</h2>
{{--                        <p class="mt-6 leading-6 text-gray-500">{!! $post->trix('body') !!}</p>--}}
                <trix-editor class="trix-content">
                            <div class="trix-content">{!! $post->body ?? ''!!}</div>
                </trix-editor>


            </div>

            @include('components.comment.index',['comments' => $post->comments, 'post_id' => $post->id])

        </div>
    </div>

@endsection
