@extends('layouts.app')

@section('title', ' Show Bank Soal')

@section('content')

    <main class="h-full overflow-y-auto">
        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-12">
                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Show Bank Soal
                    </h2>
                    <p class="text-sm text-gray-400">
                        Show the Bank Soal
                    </p>
                </div>
            </div>
        </div>

        <!-- Show -->
        <nav class="mx-10 mt-8 text-sm" aria-label="Breadcrumb">
            <ol class="inline-flex p-0 list-none">
                <li class="flex items-center">
                    <a href="{{ route('admin.banksoal.index') }}" class="text-gray-400">Bank Soal</a>
                    <svg class="w-3 h-3 mx-3 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                    </svg>
                </li>
                <li class="flex items-center">
                    <p class="font-medium">Show Bank Soal</p>
                </li>
            </ol>
        </nav>

        <section class="container px-6 mx-auto mt-5">
            <div class="grid gap-5 md:grid-cols-12">
                <main class="col-span-12 p-4 md:pt-0">
                    <div class="px-2 py-2 mt-2 bg-white rounded-xl">

                        <div class="">
                            <div class="px-4 py-5 sm:p-6">
                                <div class="grid grid-cols-6 gap-6">

                                    <div class="col-span-6">
                                        <label for="title" class="block mb-3 font-medium text-gray-700 text-md">Judul Bank Soal</label>
                                        <p class="text-sm text-gray-600">{{ $banksoal->title }}</p>
                                    </div>

                                    <div class="col-span-6">
                                        <label for="soal" class="block mb-3 font-medium text-gray-700 text-md">Soal</label>
                                        <img src="{{ Storage::url($banksoal->soal) }}" width="100" alt="soal">
                                    </div>

                                    <div class="col-span-6">
                                        <label for="soal" class="block mb-3 font-medium text-gray-700 text-md">Jawaban</label>
                                        <img src="{{ Storage::url($banksoal->jawaban) }}" width="100" alt="jawaban">
                                    </div>
                                </div>
                            </div>

                            <div class="px-4 py-3 text-right sm:px-6">
                                <a href="{{ route('admin.banksoal.index') }}" type="button" class="inline-flex justify-center px-4 py-2 mr-4 text-sm font-medium text-gray-700 bg-white border border-gray-600 rounded-lg shadow-sm hover:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300">
                                    Back
                                </a>

                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </section>
    </main>

@endsection

{{--@extends('layouts.app')--}}

{{--@section('title', ' Create Belajar')--}}

{{--@section('content')--}}
{{--    <div class="row">--}}
{{--        <div class="col-lg-12 margin-tb">--}}
{{--            <div class="pull-left">--}}
{{--                <h2>Add New Belajar</h2>--}}
{{--            </div>--}}
{{--            <div class="pull-right">--}}
{{--                <a class="btn btn-primary" href="{{ route('admin.belajar.index') }}"> Back</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    @if ($errors->any())--}}
{{--        <div class="alert alert-danger">--}}
{{--            <strong>Whoops!</strong> There were some problems with your input.<br><br>--}}
{{--            <ul>--}}
{{--                @foreach ($errors->all() as $error)--}}
{{--                    <li>{{ $error }}</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    @endif--}}

{{--    <form action="{{ route('admin.belajar.store') }}" method="POST" enctype="multipart/form-data">--}}
{{--        @csrf--}}

{{--        <div class="row">--}}
{{--            <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                <div class="form-group">--}}
{{--                    <strong>Title:</strong>--}}
{{--                    <input type="text" name="title" class="form-control" placeholder="Title">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                <div class="form-group">--}}
{{--                    <strong>Cover:</strong>--}}
{{--                    --}}{{--                        <input type="file" name="cover" class="form-control" placeholder="image">--}}
{{--                    <input--}}
{{--                        type="file"--}}
{{--                        name="cover"--}}
{{--                        id="inputImage"--}}
{{--                        class="form-control @error('cover') is-invalid @enderror">--}}

{{--                    @error('cover')--}}
{{--                    <span class="text-danger">{{ $message }}</span>--}}
{{--                    @enderror--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                <div class="form-group">--}}
{{--                    <strong>Link:</strong>--}}
{{--                    <input type="text" name="link" class="form-control" placeholder="Link">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </form>--}}

{{--@endsection--}}
