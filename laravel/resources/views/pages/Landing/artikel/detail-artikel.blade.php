@extends('layouts.front')

@section('title', $post->title)

@section('content')


    <div class="bg-gray-50 py-16 px-4 sm:grid sm:grid-cols-12">
        <div class="sm:col-start-4 sm:col-span-6">
            <a href="{{ route('artikel') }}">
                <div class="bg-white text-center px-4 py-3 rounded-sm shadow-sm hover:shadow-md">Back</div>
            </a>


            <div class="bg-white mt-4 px-4 py-6 rounded-sm shadow-sm">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full" src="{{ url('https://unsplash.com/photos/7YVZYZeITc8')}}" alt="author avatar">
                    </div>

                    <div class="ml-3">
                            <p class="text-sm leading-5 font-medium text-gray-900">{{ auth()->user()->first()->name }}</p>
                            <div class="flex text-sm leading-5 text-gray-500">
                                <time datetime="{{ $post->created_at }}">
                                    {{ $post->created_at->diffForHumans() }}
                                </time>
                                <span class="mx-1">&middot;</span>
                                <span>{{ ceil(strlen($post->body) / 863) }} min read</span>
                            </div>
                    </div>
                </div>

                        <div class="mt-4 rounded-sm overflow-hidden">
                            <img class="w-full object-cover" src="{{ Storage::url($post->imagePath) }}" alt="blog image">
                        </div>

                        <h2 class="mt-6 md:text-4xl leading-10 tracking-tight font-bold text-gray-900 text-center">{{ $post->title }}</h2>
                        <p class="mt-6 leading-6 text-gray-500">{{ $post->body }}</p>

                </div>


        <!-- comment form -->
        <div class="flex mx-auto items-center justify-center shadow-lg mt-56 mx-8 mb-4 max-w-lg">
            <form class="w-full max-w-xl bg-white rounded-lg px-4 pt-2">
                <div class="flex flex-wrap -mx-3 mb-6">
                    <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Add a new comment</h2>
                    <div class="w-full md:w-full px-3 mb-2 mt-2">
                        <textarea class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" name="body" placeholder='Type Your Comment' required></textarea>
                    </div>
                    <div class="w-full md:w-full flex items-start md:w-full px-3">
                        <div class="flex items-start w-1/2 text-gray-700 px-2 mr-auto">
                            <svg fill="none" class="w-5 h-5 text-gray-600 mr-1" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <p class="text-xs md:text-sm pt-px">Some HTML is okay.</p>
                        </div>
                        <div class="-mr-1">
                            <input type='submit' class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100 btn-center" value='Post Comment'>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>

{{--    <div class="content">--}}
{{--        <!-- ezbices -->--}}
{{--        <div class="bg-ezb-bg-explore overflow-hidden">--}}
{{--            <div class="pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 mx-auto">--}}
{{--                <div class="text-center">--}}
{{--                    <h1 class="text-3xl font-normal mb-1">{{ $post->title }}</h1>--}}
{{--                    <img src="{{ Storage::url($post->imagePath)  }}" class="rounded-lg"--}}
{{--                         alt="About Us Image">--}}
{{--                </div>--}}
{{--                <div class="text-justify py-2">--}}
{{--                    <p class="text-base font-normal mb-1">--}}
{{--                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Placerat accumsan scelerisque sit consequat--}}
{{--                        suscipit vel arcu. Sit ullamcorper in vel euismod pulvinar lectus a at. Pharetra nibh neque--}}
{{--                        consectetur cursus. Ridiculus pharetra arcu eget diam in metus ipsum nibh. Est semper volutpat--}}
{{--                        risus, at. Semper habitasse faucibus porttitor sollicitudin imperdiet mauris.--}}
{{--                        Nulla id at lorem eget mattis pellentesque. Quis tincidunt fringilla adipiscing at mauris. Id lectus--}}
{{--                        elit est est a tincidunt odio. Volutpat venenatis blandit ut nulla enim sapien morbi. A malesuada--}}
{{--                        magna fermentum, vitae blandit pellentesque. Consectetur odio eget elementum sed tristique vitae--}}
{{--                        suspendisse. Etiam neque, sit orci sed. Varius eleifend nibh diam eget non. Feugiat mi massa--}}
{{--                        dignissim turpis mauris mattis. Posuere tellus vitae adipiscing nullam proin vitae, amet.--}}
{{--                        Tincidunt vulputate nullam elit tempor mauris sit nibh neque. Pharetra, pellentesque adipiscing--}}
{{--                        quisque cursus. Nunc venenatis vitae tincidunt in elit tellus tincidunt turpis. Nisl euismod felis--}}
{{--                        fermentum, lectus auctor nisl montes, nunc, semper. Sed nunc tincidunt varius amet. Venenatis, nisi--}}
{{--                        at pellentesque egestas diam lacus tellus vitae consectetur. Senectus volutpat nunc lectus--}}
{{--                        elementum. Lobortis arcu volutpat quis amet. Venenatis risus sit pulvinar tellus nisl malesuada.--}}
{{--                        Non amet sollicitudin sed justo. Quam malesuada mauris enim diam sed et. Pellentesque aliquet--}}
{{--                        molestie enim sapien volutpat tempor vestibulum convallis. At eu tellus vitae lacus egestas--}}
{{--                        porttitor mi elementum ut. Risus, sagittis et tincidunt lacus, tortor aliquam suspendisse cursus.--}}
{{--                        Enim, eu congue amet fringilla tempor lobortis facilisi. Nisl praesent sollicitudin at turpis--}}
{{--                        malesuada faucibus in id aliquam. Malesuada etiam dignissim sagittis augue. Tempus, facilisi at mi--}}
{{--                        sed lorem. Sapien in eleifend velit tortor nunc.--}}
{{--                        Tristique porttitor fusce magna elit. Convallis sit congue venenatis hac in sit ut congue duis. Arcu--}}
{{--                        consequat dictum bibendum cursus. At scelerisque sit sit metus sed nisl mauris lobortis ac. Gravida--}}
{{--                        odio id suspendisse mauris enim. Neque consectetur vitae turpis a. Nullam viverra augue tincidunt--}}
{{--                        nisl. Eu faucibus nunc facilisi nec. Amet nulla augue ipsum nibh donec morbi. Ultrices augue sed--}}
{{--                        imperdiet phasellus ut vulputate vel. Phasellus libero dapibus gravida tellus interdum laoreet. At--}}
{{--                        nisi dignissim et mauris egestas semper.--}}
{{--                        Consectetur sit in molestie rhoncus lectus gravida. Tempus aliquet egestas lacus, cursus. Ipsum--}}
{{--                        massa duis quis auctor elit egestas nisi est. Fames pharetra integer scelerisque ac mi morbi mauris.--}}
{{--                        Duis a, euismod eget tortor volutpat justo. Sed tellus tempus nisl lorem nisi nec arcu suspendisse.--}}
{{--                        Lacus mi suspendisse feugiat in ipsum suspendisse velit ac duis.--}}
{{--                        Elementum a faucibus non dictum. Ipsum nibh tristique amet mattis sit et mattis. Vitae ac aliquet--}}
{{--                        varius dictumst elementum justo, nunc. Nisi, lectus sed arcu odio convallis fringilla neque--}}
{{--                        pellentesque varius. Habitant eget faucibus posuere ut accumsan. Tincidunt eu interdum dolor purus.--}}
{{--                        Vivamus in tincidunt ut lorem porttitor pretium ut. Nec cras vitae malesuada blandit a maecenas--}}
{{--                        integer ultrices. Pulvinar quis risus est id aliquet. Enim pellentesque eleifend mi donec amet.--}}
{{--                        Feugiat non libero sed tortor suscipit ultricies morbi sed pretium. Faucibus aliquam viverra tortor--}}
{{--                        sed semper aenean imperdiet. Mi in volutpat vitae sit pharetra pellentesque varius. Cursus purus eu--}}
{{--                        eros lectus id tristique gravida purus. Maecenas laoreet euismod aliquam mauris mus diam. Nisl nulla--}}
{{--                        diam, a elementum ac et.--}}
{{--                        Magnis scelerisque tincidunt posuere tincidunt dignissim id. In sed proin tellus cursus pulvinar.--}}
{{--                        Viverra duis lacus, adipiscing sit curabitur augue orci. Semper aliquam, ultrices sed metus, dictum--}}
{{--                        arcu viverra. Lobortis nibh mi tortor, scelerisque netus amet adipiscing. Dignissim amet, vel elit--}}
{{--                        sit porttitor nisl arcu vulputate. Nibh elementum potenti egestas arcu convallis in mattis est. Eu--}}
{{--                        senectus massa facilisi in pulvinar. Vitae neque est commodo eget integer. Nunc, urna, nisi, mattis--}}
{{--                        nunc adipiscing cursus. Feugiat tellus volutpat cras id elit auctor risus elementum fermentum.--}}
{{--                        Tincidunt cras ipsum id euismod fermentum senectus purus eu viverra. Fusce et risus, dui, sodales in--}}
{{--                        consequat, aliquam. Ut justo, quam fermentum aliquet posuere nibh.--}}
{{--                        Lorem praesent amet augue venenatis gravida gravida gravida. Massa iaculis lacus viverra a in mauris--}}
{{--                        volutpat. Venenatis praesent viverra elementum sapien cursus mi scelerisque suspendisse semper. Quis--}}
{{--                        rhoncus, pulvinar phasellus ornare semper mauris magna quis. Fermentum nisl arcu vitae nunc. Ut--}}
{{--                        egestas et ac mi massa in semper rhoncus. Id sed viverra fringilla ipsum porta nunc, nunc.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- comment form -->--}}
{{--            <div class="flex mx-auto items-center justify-center shadow-lg mt-56 mx-8 mb-4 max-w-lg">--}}
{{--                <form class="w-full max-w-xl bg-white rounded-lg px-4 pt-2">--}}
{{--                    <div class="flex flex-wrap -mx-3 mb-6">--}}
{{--                        <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Add a new comment</h2>--}}
{{--                        <div class="w-full md:w-full px-3 mb-2 mt-2">--}}
{{--                            <textarea class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" name="body" placeholder='Type Your Comment' required></textarea>--}}
{{--                        </div>--}}
{{--                        <div class="w-full md:w-full flex items-start md:w-full px-3">--}}
{{--                            <div class="flex items-start w-1/2 text-gray-700 px-2 mr-auto">--}}
{{--                                <svg fill="none" class="w-5 h-5 text-gray-600 mr-1" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>--}}
{{--                                </svg>--}}
{{--                                <p class="text-xs md:text-sm pt-px">Some HTML is okay.</p>--}}
{{--                            </div>--}}
{{--                            <div class="-mr-1">--}}
{{--                                <input type='submit' class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100" value='Post Comment'>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}

@endsection
