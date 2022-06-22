@foreach($comments as $comment)
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
    <div class="display-comment">
        <strong>{{ $comment->user->name ?? ''}}</strong>
        <p>{{ $comment->comment ?? ''}}</p>
        <a href="" id="reply"></a>
        <form method="post" action="{{ route('reply.addVideo') }}">
            @csrf
            <div class="form-group">
                <input type="text" name="comment_body" class="form-control" />
                <input type="hidden" name="post_id" value="{{ $belajar_id }}" />
                <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-warning" value="Reply" />
            </div>
        </form>
        @include('components.comment.partials_reply_video', ['comments' => $comment->replies])
    </div>
@endforeach

{{--@foreach($comments as $comment)--}}
{{--    <div class="display-comment">--}}
{{--        <strong>{{ $comment->user->name }}</strong>--}}
{{--        <p>{{ $comment->comment }}</p>--}}
{{--        <a href="" id="reply"></a>--}}
{{--        <form method="post" action="{{ route('reply.add') }}">--}}
{{--            @csrf--}}
{{--            <div class="form-group">--}}
{{--                <input type="text" name="comment" class="form-control" />--}}
{{--                <input type="hidden" name="post_id" value="{{ $post_id }}" />--}}
{{--                <input type="hidden" name="comment_id" value="{{ $comment->id }}" />--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <input type="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" value="Reply" />--}}
{{--            </div>--}}
{{--        </form>--}}
{{--        @include('components.comment.partials_reply', ['comments' => $comment->replies])--}}
{{--    </div>--}}
{{--@endforeach--}}