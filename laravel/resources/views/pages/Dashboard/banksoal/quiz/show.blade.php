@extends('layouts.app')

@section('title', ' Detail Question')

@section('content')

    <main class="h-full overflow-y-auto">

        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-12">
                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Detail Question
                    </h2>
                    <ol class="inline-flex p-0 list-none">
                        <li class="flex items-center">
                            <a href="{{ route('admin.banksoal.index') }}" class="text-gray-400">Bank Soal</a>
                            <svg class="w-3 h-3 mx-3 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                            </svg>
                        </li>
                        <li class="flex items-center">
                            <a href="#" class="text-gray-400">Detail Quiz</a>
                            <svg class="w-3 h-3 mx-3 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                            </svg>
                        </li>
                        <li class="flex items-center">
                            <p class="font-medium">Detail Question</p>
                        </li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-8">
                <div class="col-span-4 lg:text-left">
                    <div class="relative mt-0 md:mt-4 inline-block">
                        <form action="{{route('admin.deleteQuestion',$question->id)}}" method="post">
                            @csrf
                            <button type="submit">
                                <a class="inline-block px-4 py-2 mt-2 text-left text-white rounded-xl bg-ezb-bg">
                                    Delete Question
                                </a>
                            </button>
                        </form>
{{--                        <a href="{{route('admin.createQuestion',$banksoal->id)}}" class="inline-block px-4 py-2 mt-2 text-left text-white rounded-xl bg-ezb-bg">--}}
{{--                            + Add Question--}}
{{--                        </a>--}}
                        {{--                        <a href="{{route('admin.createQuestion',$banksoal->id)}}" class="inline-block px-4 py-2 mt-2 text-left text-white rounded-xl bg-ezb-bg">--}}
                        {{--                            + Add Question--}}
                        {{--                        </a>--}}
                        {{--                        <a href="{{route('admin.banksoal.index')}}" class="inline-block px-4 py-2 mt-2 text-left text-white rounded-xl bg-ezb-bg">--}}
                        {{--                           Back--}}
                        {{--                        </a>--}}
                    </div>
                </div>
            </div>
        </div>

        <section class="container px-6 mx-auto mt-5">
            <div class="grid gap-5 md:grid-cols-12">
                <main class="col-span-12 p-4 md:pt-0">
                    <div class="px-6 py-2 mt-2 bg-white rounded-xl">
                        <table class="w-full" aria-label="Table">
                            <thead>
                            <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                                <th class="py-4" scope="">Items</th>
                                <th class="py-4" scope="">Details</th>
                            </tr>
                            </thead>
                            <tbody class="bg-white">
                            <tr>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                Name
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">{{ $question->question }}</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 ">
                                    <div class="flex items-center">
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                Explanation
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">{{ $question->explanation}}</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 ">
                                    <div class="flex items-center">
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                Status
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 ">
                                    <div class="text-sm text-gray-900">{{ $question->is_active === '1'  ? 'Active' : 'Not Active' }}</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                Details
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 ">
                                    <div class="text-sm text-gray-900">{{ $question->banksoal->title ?? '' }}</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 ">
                                    <div class="flex items-center">
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                Created By
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">{{ $question->user->name}}</div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </main>
            </div>

            <div class="grid gap-5 md:grid-cols-12">
                <main class="col-span-12 p-4 md:pt-0">
                    <div class="px-6 py-2 mt-2 bg-white rounded-xl">
                        <table class="w-full" aria-label="Table">
                            <thead>
                            <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                                <th class="py-4" scope="">Answer</th>
                                <th class="py-4" scope="">Choice</th>
                            </tr>
                            </thead>
                            <tbody class="bg-white">
                            @foreach($answers as $answer)
                            <tr>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $answer->answer}}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="@if($answer->is_checked === '1') justify-center mx-auto text-xs font-semibold bg-green-600 @endif justify-center mx-auto text-xs font-semibold  "> {{ $answer->is_checked === '1'  ? 'Correct' : 'Wrong' }}</div>
                                </td>
{{--                                <td class="px-6 py-4">--}}
{{--                                    {{ $answer->answe ?? ''}}--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4">--}}
{{--                                    <div class="@if($answer->is_checked === '1') bg-green-400 p-1 text-white rounded-xl @endif justify-center mx-auto text-xs font-extrabold  "> {{ $answer->is_checked === '1'  ? 'Correct' : 'Wrong' }}</div>--}}
{{--                                </td>--}}
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </main>
            </div>



        </section>

    </main>

@endsection