@extends('layouts.app')

@section('title', ' Detail Soal')

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}" defer></script>

<!-- Styles -->
<link rel="stylesheet" href="{{ mix('css/app.css') }}">

@section('content')

    <main class="h-full overflow-y-auto">
        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-12">
                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Show Quiz
                    </h2>
                    <p class="text-sm text-gray-400">
                        Show the Quiz
                    </p>
                </div>
            </div>
        </div>

        <!-- Show -->
        <nav class="mx-10 mt-8 text-sm" aria-label="Breadcrumb">
            <ol class="inline-flex p-0 list-none">
                <li class="flex items-center">
                    <a href="{{ route('admin.userQuizHome') }}" class="text-gray-400">Quiz</a>
                    <svg class="w-3 h-3 mx-3 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                    </svg>
                </li>
                <li class="flex items-center">
                    <p class="font-medium">Show Detail Quiz </p>
                </li>
            </ol>
        </nav>

        <div class="overflow-hidden shadow-m sm:rounded-lg">
            <div class="max-w-7xl m-4 mx-auto sm:px-6 lg:px-8">
                <!-- QUIZ HEADER START -->

                <div class="bg-white border-2 border-gray-300 shadow overflow-hidden sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h1 class="text-sm leading-6 font-medium text-gray-900">
                            Quiz Information
                        </h1>
                        <p class="mt-1 max-w-2xl text-sm text-gray-700">

                            <!-- \Carbon\Carbon::isDayOff($userQuizDetails->updated_at) -->
                            You took this quiz {{$userQuizDetails->updated_at->diffForHumans()}} on <span class="text-bold bg-green-300 px-2 rounded-lg"> {{$userQuizDetails->updated_at}} </span>
                        </p>
                    </div>
                    <div class="border-t border-gray-300">
                        <dl>
                            <div class="bg-gray-50 px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-700">
                                    Section Title
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{--                            {{$userQuizDetails->banksoal->title}}--}}
                                    <p class="mt-1 max-w-2xl text-sm text-gray-700">
                                        {{--                                {{$userQuizDetails->banksoal->description}}--}}
                                    </p>
                                </dd>
                            </div>
                            <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-700">
                                    Quiz Completion Status
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{$userQuizDetails->completed ? 'Completed' : 'Not Completed'}}
                                </dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-700">
                                    Total Quiz Questions
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{$userQuizDetails->quiz_size}}
                                </dd>
                            </div>
                            <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-700">
                                    Quiz Score
                                </dt>
                                @if($userQuizDetails->score < 70) <dd class="mt-1 px-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 bg-red-300 rounded-lg">
                                    {{$userQuizDetails->score .' %'}}
                                </dd>
                                @else
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 bg-green-300 rounded-lg">
                                        {{$userQuizDetails->score .' %'}}
                                    </dd>
                                @endif
                            </div>
                            <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-700">
                                    Quiz Duration
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{$userQuizDetails->updated_at->diffInMinutes($userQuizDetails->created_at) .' Minutes'}}
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>

                <!-- QUIZ HEADER END -->
                @foreach($quizQuestions as $key => $question)
                    @php
                        $userAnswer = $userQuiz[$key];
                    @endphp
                    <div class="bg-white shadow overflow-hidden sm:rounded-lg mt-6">
                        <div class="px-4 py-5 sm:px-6">
                            <h3 class="text-lg leading-6 mb-2 font-medium text-gray-900">
                                <span class="mr-2 font-extrabold"> {{$key + 1}}</span> {{$question->question}}
                                <div x-data={show:false} class="block text-xs">
                                    <div class="p-1" id="headingOne">
                                        <button @click="show=!show" class="underline text-blue-500 hover:text-blue-700 focus:outline-none text-xs " type="button">
                                            Explanation
                                        </button>
                                    </div>
                                    <div x-show="show" class="block p-2 bg-green-100 text-xs">
                                        {{$question->explanation}}
                                    </div>
                                </div>
                            </h3>
                            @foreach($question->answers as $key => $answer)
                                @if(($userAnswer->is_correct==='1') && ($answer->is_checked ==='1'))
                                    <div class="mt-1 max-w-auto text-sm px-2 rounded-lg text-white bg-none bg-green-500">
                                        <span class="mr-2 font-extrabold">{{$choice->values()->get($key)}} </span> {{$answer->answer}}
                                    </div>
                                @elseif(($userAnswer->answer_id === $answer->id) && ($answer->is_checked === '0'))
                                    <div class="mt-1 max-w-auto text-sm px-2 rounded-lg text-white bg-red-600 font-extrabold ">
                                        <span class="mr-2 font-extrabold">{{$choice->values()->get($key)}} </span> {{$answer->answer}}
                                    </div>
                                @elseif($answer->is_checked && $userAnswer->is_correct === '0')
                                    <div class="mt-1 max-w-auto text-sm px-2 rounded-lg text-white bg-green-500 font-extrabold ">
                                        <span class="mr-2 font-extrabold">{{$choice->values()->get($key)}} </span> {{$answer->answer}} <span class="p-1 font-extrabold">(Correct Answer)</span>
                                    </div>
                                @else
                                    <div class="mt-1 max-w-auto text-sm px-2 rounded-lg text-gray-500 font-extrabold ">
                                        <span class="mr-2 font-extrabold">{{$choice->values()->get($key)}} </span> {{$answer->answer}}
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </main>
@endsection
