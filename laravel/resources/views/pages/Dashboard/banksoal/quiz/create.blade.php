@extends('layouts.app')

@section('title', ' Create Quiz')

@section('content')

    <main class="h-full overflow-y-auto">
        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-12">
                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Add Question
                    </h2>
                    <p class="text-sm text-gray-400">
                        Upload the Bank Soal
                    </p>
                </div>
            </div>
        </div>

        <!-- breadcrumb -->
        <nav class="mx-10 mt-8 text-sm" aria-label="Breadcrumb">
            <ol class="inline-flex p-0 list-none">
                <li class="flex items-center">
                    <a href="{{ route('admin.banksoal.index') }}" class="text-gray-400">Bank Soal </a>
                    <svg class="w-3 h-3 mx-3 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                    </svg>
                    <a href="#" class="text-gray-400">Quiz</a>
                    <svg class="w-3 h-3 mx-3 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                    </svg>
                </li>
                <li class="flex items-center">
                    <p class="font-medium">Add Quiz</p>
                </li>
            </ol>
        </nav>

        <div class="max-w-7xl m-4 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white mt-4 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="mx-auto bg-blue-200">
                    <h2 class="text-2xl font-bold card bg-blue-600 p-4 text-gray-100 rounded-t-lg mx-auto">New Question</h2>
                    <div class="mt-2 max-w-auto mx-auto card p-4 bg-white rounded-b-lg shadow-md">
                        <div class="grid grid-cols-1 gap-6">
                            <form action="{{route('admin.storeQuestion', $banksoal)}}" method="post">
                                @csrf
                                <div class="col-span-6">
                                    <label for="question" class="block mb-3 font-medium text-gray-700 text-md">Question</label>

                                    <input placeholder="question" value="{{ old('question') }}" type="text" name="question" id="question" autocomplete="question" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm ml-2" required>

                                    @if ($errors->has('question'))
                                        <p class="text-red-500 mb-3 text-sm">{{ $errors->first('question') }}</p>
                                    @endif
                                </div>

                                <div class="col-span-6">
                                    <label for="explanation" class="block mt-2 mb-3 font-medium text-gray-700 text-md">Explanation</label>

                                    <textarea placeholder="Explanation" type="text" name="explanation" id="explanation" autocomplete="explanation" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm ml-2" required>
                                        {{ old('explanation') }}
                                    </textarea>

                                    @if ($errors->has('explanation'))
                                        <p class="text-red-500 mb-3 text-sm">{{ $errors->first('explanation') }}</p>
                                    @endif
                                </div>

                                <div class="col-span-6">
                                    <label for="active" class="block mt-2 mb-3 font-medium text-gray-700 text-md">Is this question active?</label>

                                    <select name="is_active" value="{{ old('is_active') }}" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm ml-2">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>

                                    @if ($errors->has('explanation'))
                                        <p class="text-red-500 mb-3 text-sm">{{ $errors->first('explanation') }}</p>
                                    @endif
                                </div>

                                <div class="grid grid-cols-1 my-5">
                                    <label for="asnwer" class="block mt-2 mb-3 font-medium text-gray-700 text-md">Fill the Answer</label>

                                    <label class="flex items-center">
                                        <input type="hidden" value="0" name="answers[0][is_checked]">
                                        <input type="checkbox" value="1" name="answers[0][is_checked]">
                                            <input name="answers[0][answer]" value="{{ old('answers.0.answer') }}" type="text" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm ml-2 ml-2" />
                                        @error('answers.0.answer')
                                        <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                        @enderror
                                    </label>
                                    <label class="flex items-center">
                                        <input type="hidden" value="0" name="answers[1][is_checked]">
                                        <input type="checkbox" value="1" name="answers[1][is_checked]">
                                            <input name="answers[1][answer]" value="{{ old('answers.1.answer') }}" type="text" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm ml-2" />
                                        @error('answers.0.answer')
                                        <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                        @enderror
                                    </label>
                                    <label class="flex items-center">
                                        <input type="hidden" value="0" name="answers[2][is_checked]">
                                        <input type="checkbox" value="1" name="answers[2][is_checked]">
                                            <input name="answers[2][answer]" value="{{ old('answers.2.answer') }}" type="text" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm ml-2" />
                                        @error('answers.0.answer')
                                        <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                        @enderror
                                    </label>
                                    <label class="flex items-center">
                                        <input type="hidden" value="0" name="answers[3][is_checked]">
                                        <input type="checkbox" value="1" name="answers[3][is_checked]">
                                            <input name="answers[3][answer]" value="{{ old('answers.3.answer') }}" type="text" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm ml-2" />
                                        @error('answers.0.answer')
                                        <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                        @enderror
                                    </label>
                                </div>
                                <div class="px-4 py-3 text-right sm:px-6">
                                    <a href="{{ route('admin.banksoal.index') }}" type="button" class="inline-flex justify-center px-4 py-2 mr-4 text-sm font-medium text-gray-700 bg-white border border-gray-600 rounded-lg shadow-sm hover:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300" onclick="return confirm('Are you sure want to cancel? , Any changes you make will not be saved.')">
                                        Cancel
                                    </a>

                                    <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white  border border-transparent rounded-lg shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 bg-ezb-bg" onclick="return confirm('Are you sure want to submit this data ?')">
                                        Create Quiz
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
