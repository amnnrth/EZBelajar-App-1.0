@extends('layouts.app')

@section('title', ' Create Materi Bootcamp')

@section('content')

    <main class="h-full overflow-y-auto">
        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-12">
                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Add Bootcamp
                    </h2>
                    <p class="text-sm text-gray-400">
                        Create a Materi Bootcamp
                    </p>
                </div>
            </div>
        </div>

        <!-- breadcrumb -->
        <nav class="mx-10 mt-8 text-sm" aria-label="Breadcrumb">
            <ol class="inline-flex p-0 list-none">
                <li class="flex items-center">
                    <a href="{{ route('admin.bootcamp.index') }}" class="text-gray-400">Bootcamp</a>
                    <svg class="w-3 h-3 mx-3 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                    </svg>
                    <a href="#" class="text-gray-400">Detail Bootcamp</a>
                    <svg class="w-3 h-3 mx-3 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                    </svg>
                </li>
                <li class="flex items-center">
                    <p class="font-medium">Add Materi Bootcamp</p>
                </li>
            </ol>
        </nav>

        <div class="max-w-7xl m-4 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white mt-4 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="mx-auto bg-blue-200">
                    <h2 class="text-2xl font-bold card bg-blue-600 p-4 text-gray-100 rounded-t-lg mx-auto">New Bootcamp</h2>
                    <div class="mt-2 max-w-auto mx-auto card p-4 bg-white rounded-b-lg shadow-md">
                        <div class="grid grid-cols-1 gap-6">
                            <form action="{{route('admin.storeMateriBootcamp', $bootcamp)}}" method="post">
                                @csrf

                                <div class="col-span-6">
                                    <label for="description" class="block mb-2 font-medium text-gray-700 text-md">Main Materi Bootcamp</label>

                                    {{--                                            <p class="block mb-3 text-sm text-gray-700">--}}
                                    {{--                                                Main Materi?--}}
                                    {{--                                            </p>--}}

                                    <input placeholder="Main Materi" type="text" name="description" id="description" autocomplete="description" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" value="{{ old('description') }}" required>
                                    <input placeholder="Detail Main Materi Bootcmap" type="text" name="detail-materi-bootcamp[]" id="detail-materi-bootcamp" autocomplete="detail-materi-bootcamp" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                                    <input placeholder="Detail Main Materi Bootcmap" type="text" name="detail-materi-bootcamp[]" id="detail-materi-bootcamp" autocomplete="detail-materi-bootcamp" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>

                                    {{--                                            <input placeholder="Keunggulan Service 2" type="text" name="main-materi-bootcamp[]" id="main-materi-bootcamp" autocomplete="main-materi-bootcamp" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" value="{{ old('main-materi-bootcamp[]') }}" required>--}}

                                    {{--                                            <input placeholder="Keunggulan Service 3" type="text" name="main-materi-bootcamp[]" id="main-materi-bootcamp" autocomplete="main-materi-bootcamp" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" value="{{ old('main-materi-bootcamp[]') }}" required>--}}

                                    <div id="newDetailMainMenuRow"></div>

                                    <button type="button" class="inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="addDetailMainMenuRow">
                                        Tambahkan Detail Main Materi Bootcamp +
                                    </button>

{{--                                    <div id="newMainMenuRow"></div>--}}
{{--                                    <button type="button" class="inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="addMainMenuRow">--}}
{{--                                        Tambahkan Main Materi Bootcamp +--}}
{{--                                    </button>--}}

                                </div>

{{--                                <div class="col-span-6">--}}
{{--                                    <label for="question" class="block mb-3 font-medium text-gray-700 text-md">Question</label>--}}

{{--                                    <input placeholder="question" value="{{ old('question') }}" type="text" name="question" id="question" autocomplete="question" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm ml-2" required>--}}

{{--                                    @if ($errors->has('question'))--}}
{{--                                        <p class="text-red-500 mb-3 text-sm">{{ $errors->first('question') }}</p>--}}
{{--                                    @endif--}}
{{--                                </div>--}}

{{--                                <div class="col-span-6">--}}
{{--                                    <label for="explanation" class="block mt-2 mb-3 font-medium text-gray-700 text-md">Explanation</label>--}}

{{--                                    <textarea placeholder="Explanation" type="text" name="explanation" id="explanation" autocomplete="explanation" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm ml-2" required>--}}
{{--                                        {{ old('explanation') }}--}}
{{--                                    </textarea>--}}

{{--                                    @if ($errors->has('explanation'))--}}
{{--                                        <p class="text-red-500 mb-3 text-sm">{{ $errors->first('explanation') }}</p>--}}
{{--                                    @endif--}}
{{--                                </div>--}}

{{--                                <div class="col-span-6">--}}
{{--                                    <label for="active" class="block mt-2 mb-3 font-medium text-gray-700 text-md">Is this question active?</label>--}}

{{--                                    <select name="is_active" value="{{ old('is_active') }}" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm ml-2">--}}
{{--                                        <option value="1">Yes</option>--}}
{{--                                        <option value="0">No</option>--}}
{{--                                    </select>--}}

{{--                                    @if ($errors->has('explanation'))--}}
{{--                                        <p class="text-red-500 mb-3 text-sm">{{ $errors->first('explanation') }}</p>--}}
{{--                                    @endif--}}
{{--                                </div>--}}

{{--                                <div class="grid grid-cols-1 my-5">--}}
{{--                                    <label for="asnwer" class="block mt-2 mb-3 font-medium text-gray-700 text-md">Fill the Answer</label>--}}

{{--                                    <label class="flex items-center">--}}
{{--                                        <input type="hidden" value="0" name="answers[0][is_checked]">--}}
{{--                                        <input type="checkbox" value="1" name="answers[0][is_checked]">--}}
{{--                                        <input name="answers[0][answer]" value="{{ old('answers.0.answer') }}" type="text" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm ml-2 ml-2" />--}}
{{--                                        @error('answers.0.answer')--}}
{{--                                        <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>--}}
{{--                                        @enderror--}}
{{--                                    </label>--}}
{{--                                    <label class="flex items-center">--}}
{{--                                        <input type="hidden" value="0" name="answers[1][is_checked]">--}}
{{--                                        <input type="checkbox" value="1" name="answers[1][is_checked]">--}}
{{--                                        <input name="answers[1][answer]" value="{{ old('answers.1.answer') }}" type="text" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm ml-2" />--}}
{{--                                        @error('answers.0.answer')--}}
{{--                                        <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>--}}
{{--                                        @enderror--}}
{{--                                    </label>--}}
{{--                                    <label class="flex items-center">--}}
{{--                                        <input type="hidden" value="0" name="answers[2][is_checked]">--}}
{{--                                        <input type="checkbox" value="1" name="answers[2][is_checked]">--}}
{{--                                        <input name="answers[2][answer]" value="{{ old('answers.2.answer') }}" type="text" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm ml-2" />--}}
{{--                                        @error('answers.0.answer')--}}
{{--                                        <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>--}}
{{--                                        @enderror--}}
{{--                                    </label>--}}
{{--                                    <label class="flex items-center">--}}
{{--                                        <input type="hidden" value="0" name="answers[3][is_checked]">--}}
{{--                                        <input type="checkbox" value="1" name="answers[3][is_checked]">--}}
{{--                                        <input name="answers[3][answer]" value="{{ old('answers.3.answer') }}" type="text" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm ml-2" />--}}
{{--                                        @error('answers.0.answer')--}}
{{--                                        <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>--}}
{{--                                        @enderror--}}
{{--                                    </label>--}}
{{--                                </div>--}}
                                <div class="px-4 py-3 text-right sm:px-6">
                                    <a href="{{ route('admin.banksoal.index') }}" type="button" class="inline-flex justify-center px-4 py-2 mr-4 text-sm font-medium text-gray-700 bg-white border border-gray-600 rounded-lg shadow-sm hover:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300" onclick="return confirm('Are you sure want to cancel? , Any changes you make will not be saved.')">
                                        Cancel
                                    </a>

                                    <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white  border border-transparent rounded-lg shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 bg-ezb-bg" onclick="return confirm('Are you sure want to submit this data ?')">
                                        Create Bootcamp
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

@push('after-script')
{{--    <script type="text/javascript">--}}
{{--			// add row--}}
{{--			$("#addMainMateriRow").click(function() {--}}
{{--				var html = '';--}}
{{--				html += '<input placeholder="Main Materi Bootcamp" type="text" name="main-materi-bootcamp[]" id="advantage-service" autocomplete="advantage-service" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>';--}}

{{--				$('#newMainMateriRow').append(html);--}}
{{--			});--}}

{{--			// remove row--}}
{{--			$(document).on('click', '#removeMainMenyRow', function() {--}}
{{--				$(this).closest('#inputFormServicesRow').remove();--}}
{{--			});--}}
{{--    </script>--}}

<script src="{{ url('https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js') }}"></script>

    <script type="text/javascript">
			// add row
			$("#addDetailMainMenuRow").click(function() {
				var html = '';
				html += '<input placeholder="Detail Main Materi Bootcmap" type="text" name="detail-materi-bootcamp[]" id="detail-materi-bootcamp" autocomplete="detail-materi-bootcamp" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>';

				$('#newDetailMainMenuRow').append(html);
			});

			// remove row
			$(document).on('click', '#removeMainMenyRow', function() {
				$(this).closest('#inputFormServicesRow').remove();
			});
    </script>
@endpush