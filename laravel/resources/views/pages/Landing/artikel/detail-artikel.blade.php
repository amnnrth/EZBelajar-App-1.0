@extends('layouts.front')

@section('title', $post->title)

{{--<style>--}}
{{--    .display-comment .display-comment {--}}
{{--        margin-left: 40px--}}
{{--    }--}}
{{--</style>--}}
{{--@section('content')--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-body">--}}
{{--                        <p>{{ $post->title }}</p>--}}
{{--                    </div>--}}

{{--                    <div class="card-body">--}}
{{--                        <h5>Display Comments</h5>--}}

{{--                        @include('components.comment.partials_reply', ['comments' => $post->comments, 'post_id' => $post->id])--}}

{{--                        <hr />--}}
{{--                    </div>--}}

{{--                    <div class="card-body">--}}
{{--                        <h5>Leave a comment</h5>--}}
{{--                        <form method="post" action="{{ route('comment.add') }}">--}}
{{--                            @csrf--}}
{{--                            <div class="form-group">--}}
{{--                                <input type="text" name="comment" class="form-control" />--}}
{{--                                <input type="hidden" name="post_id" value="{{ $post->id }}" />--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <input type="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" value="Add Comment" />--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}

@section('content')

{{--    --}}
{{--    --}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-body">--}}
{{--                        <p>{{ $post->title }}</p>--}}
{{--                    </div>--}}

{{--                    <div class="card-body">--}}
{{--                        <h5>Display Comments</h5>--}}

{{--                        @include('components.comment.partials_reply', ['comments' => $post->comments, 'post_id' => $post->id])--}}

{{--                        <hr />--}}
{{--                    </div>--}}

{{--                    <div class="card-body">--}}
{{--                        <h5>Leave a comment</h5>--}}
{{--                        <form method="post" action="{{ route('admin.comment.store') }}">--}}
{{--                            @csrf--}}
{{--                            <div class="form-group">--}}
{{--                                <input type="text" name="comment" class="form-control" />--}}
{{--                                <input type="hidden" name="post_id" value="{{ $post->id }}" />--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <input type="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" value="Add Comment" />--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

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


        <!-- comment form -->
{{--        <div class="flex mx-auto items-center justify-center shadow-lg mt-56 mx-8 mb-4 max-w-lg">--}}
{{--            <form class="w-full max-w-xl bg-white rounded-lg px-4 pt-2">--}}
{{--                <div class="flex flex-wrap -mx-3 mb-6">--}}
{{--                    <h4>Display Comments</h4>--}}
{{--                    @foreach($post->comments as $comment)--}}
{{--                        <div class="display-comment">--}}
{{--                            <strong>{{ $comment->user->name }}</strong> <br>--}}
{{--                            <p>{{ $comment->comment }}</p>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}

{{--                    <form method="post" action="{{ route('comment.add') }}">--}}
{{--                        @csrf--}}
{{--                        <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Add a new comment</h2>--}}
{{--                        <div class="w-full md:w-full px-3 mb-2 mt-2">--}}
{{--                            <textarea class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white form-control" name="comment_body" placeholder='Type Your Comment' required></textarea>--}}
{{--                            <input type="hidden" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white form-control" name="post_id" value="{{ $post->id }}">--}}
{{--                        </div>--}}
{{--                        <div class="w-full md:w-full flex items-start md:w-full px-3">--}}
{{--                            <div class="flex items-start w-1/2 text-gray-700 px-2 mr-auto">--}}
{{--                                <svg fill="none" class="w-5 h-5 text-gray-600 mr-1" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>--}}
{{--                                </svg>--}}
{{--                                <p class="text-xs md:text-sm pt-px">Some HTML is okay.</p>--}}
{{--                            </div>--}}
{{--                            <div class="-mr-1">--}}
{{--                                <input type='submit' name="post_id" class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100 btn-center" value="Add Comment">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}

{{--            END MAIN--}}

{{--            <div class="container">--}}
{{--                <div class="row justify-content-center">--}}
{{--                    <div class="col-md-8">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-body">--}}
{{--                                <p><b>{{ $post->title }}</b></p>--}}
{{--                                <p>--}}
{{--                                    {{ $post->body }}--}}
{{--                                </p>--}}
{{--                                <hr />--}}
{{--                                <h4>Display Comments</h4>--}}
{{--                                @foreach($post->comments as $comment)--}}
{{--                                    <div class="display-comment">--}}
{{--                                        <strong>{{ $comment->user->name }}</strong>--}}
{{--                                        <p>{{ $comment->body }}</p>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                                <hr />--}}
{{--                                <h4>Add comment</h4>--}}
{{--                                <form method="post" action="{{ route('admin.comment.store') }}">--}}
{{--                                    @csrf--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input type="text" name="comment_body" class="form-control" />--}}
{{--                                        <input type="hidden" name="post_id" value="{{ $post->id }}" />--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input type="submit" class="btn btn-warning" value="Add Comment" />--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>
    </div>

@endsection
