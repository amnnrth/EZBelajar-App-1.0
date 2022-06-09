{{--COMMENT FORM--}}
<div class="flex items-center justify-center shadow-lg my-5">
    <form action="{{ route('comment.addBelajar') }}" class="w-full max-w-xl bg-white rounded-lg px-4 pt-2" method="POST" enctype="multipart/form-data">
        {{--        <form action="{{ route('admin.artikel.store') }}" --}}
        @csrf
        <div class="flex flex-wrap -mx-3 mb-6">
            <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Add a new comment</h2>
            <div class="w-full md:w-full px-3 mb-2 mt-2">
                <textarea class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white form-control" name="comment" placeholder='Type Your Comment' required></textarea>
                <input type="hidden" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white form-control" name="belajar_id" value="{{ $post->id }}">
            </div>
            <div class="w-full md:w-full flex items-start md:w-full px-3">
                <div class="flex items-start w-1/2 text-gray-700 px-2 mr-auto">
                    <svg fill="none" class="w-5 h-5 text-gray-600 mr-1" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    {{--                    <p class="text-xs md:text-sm pt-px">Some HTML is okay.</p>--}}
                </div>
                <div class="-mr-1">
                    <input type='submit'class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100 btn-center">
                </div>
            </div>
        </div>
    </form>
</div>

{{--component--}}
<div class="antialiased mx-auto max-w-screen-sm">
    <h3 class="mb-4 text-lg font-semibold  text-gray-900">Komentar</h3>

    <div class="space-y-4">
        @foreach($comments as $comment)
            <div class="flex">
                <div class="flex-shrink-0 mr-3">
                    {{--                    @if($comment->user->detail_user->photo != null)--}}
                    @if(null)
                        {{--                        <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10 sm:h-10" src="{{ url(Storage::url($comment->user->detail_user->photo ?? '')) }}" alt="" loading="lazy" />--}}
                        <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10 sm:h-10" src="#" alt="" loading="lazy" />
                    @else
                        <svg class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10 sm:h-10" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    @endif
                    {{--                    <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10 sm:h-10" src="{{ url($comment->user->detail_user->first()->photo) ?? '' }}" alt="pic user komentar">--}}
                </div>
                <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py4 loading-relaxed">
                    <strong> {{ $comment->user->first()->name ?? '' }}</strong>
                    <span class="text-xs text-gray-400">{{ $comment->created_at->format('H:i A') ?? '' }}</span>
                    <p class="text-sm">
                        {{ $comment->comment ?? ''}}
                    </p>

                    <a href="" id="reply"></a>
                    <form method="post" action="{{ route('reply.add') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="comment_body" class="form-control" />
                            <input type="hidden" name="belajar_id" value="{{ $belajar_id }}" />
                            <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-warning" value="Reply" />
                        </div>
                    </form>

                    @if(count($comment->replies) > 0)
                        <h4 class="my-5 uppercase tracking-wide text-gray-400 font-bold text-xs">Replies</h4>

                        @foreach($comment->replies as $reply)
                            <div class="space-y-4 mb-2">
                                <div class="flex">
                                    <div class="flex-shrink-0 mr-3">
                                        {{--                    @if($comment->user->detail_user->photo != null)--}}
                                        @if(null)
                                            {{--                        <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10 sm:h-10" src="{{ url(Storage::url($comment->user->detail_user->photo ?? '')) }}" alt="" loading="lazy" />--}}
                                            <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10 sm:h-10" src="#" alt="" loading="lazy" />
                                        @else
                                            <svg class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10 sm:h-10" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                            </svg>
                                        @endif
                                        {{--                    <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10 sm:h-10" src="{{ url($comment->user->detail_user->first()->photo) ?? '' }}" alt="pic user komentar">--}}
                                    </div>
                                    <div class="flex-1 bg-gray-100 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                                        <strong> {{ $comment->user->first()->name ?? '' }}</strong>
                                        <span class="text-xs text-gray-400">{{ $comment->created_at->format('H:i A') ?? '' }}</span>
                                        <p class="text-sm">
                                            {{ $comment->parent_id ?? '' }}
                                        </p>

                                        <a href="" id="reply"></a>
                                        <form method="post" action="{{ route('reply.add') }}">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" name="comment" class="form-control" />
                                                <input type="hidden" name="belajar_id" value="{{ $belajar_id  ?? ''}}" />
                                                <input type="hidden" name="comment_id" value="{{ $comment->id ?? ''}}" />
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-sm btn-outline-danger py-0 this.disabled=true;this.form.submit();" style="font-size: 0.8em;" value="Reply" />
                                            </div>
                                        </form>

                                    </div>
                                </div>

                                @if(count($reply->replies) > 1)
                                    <div class="pl-12">
                                        <h4 class="my-5 uppercase tracking-wide text-gray-400 font-bold text-xs">Replies</h4>
                                        @foreach($reply->replies as $reply)
                                            <div class="space-y-4 mb-2">
                                                <div class="flex">
                                                    <div class="flex-shrink-0 mr-3">
                                                        {{--                    @if($comment->user->detail_user->photo != null)--}}
                                                        @if(null)
                                                            {{--                        <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10 sm:h-10" src="{{ url(Storage::url($comment->user->detail_user->photo ?? '')) }}" alt="" loading="lazy" />--}}
                                                            <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10 sm:h-10" src="#" alt="" loading="lazy" />
                                                        @else
                                                            <svg class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10 sm:h-10" fill="currentColor" viewBox="0 0 24 24">
                                                                <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                                            </svg>
                                                        @endif
                                                        {{--                    <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10 sm:h-10" src="{{ url($comment->user->detail_user->first()->photo) ?? '' }}" alt="pic user komentar">--}}
                                                    </div>
                                                    <div class="flex-1 bg-gray-100 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                                                        <strong> {{ $comment->user->first()->name ?? '' }}</strong>
                                                        <span class="text-xs text-gray-400">{{ $comment->created_at->format('H:i A') ?? '' }}</span>
                                                        <p class="text-sm">
                                                            {{ $comment->comment ?? ''}}
                                                        </p>

                                                        <a href="" id="reply"></a>
                                                        <form method="post" action="{{ route('reply.add') }}">
                                                            @csrf
                                                            <div class="form-group">
                                                                <input type="text" name="comment" class="form-control" />
                                                                <input type="hidden" name="belajar_id" value="{{ $parent_id  ?? ''}}" />
                                                                <input type="hidden" name="comment_id" value="{{ $comment->id ?? ''}}" />
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="submit" class="btn btn-sm btn-outline-danger py-0 this.disabled=true;this.form.submit();" style="font-size: 0.8em;" value="Reply" />
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif

                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>