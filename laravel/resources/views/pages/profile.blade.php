@extends('layouts.front')

@section('title', ' Home')

@section('content')

    <div class="content">
        <div class="bg-ezb-bg-explore overflow-hidden">
            <div class="pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 mx-auto">

                <div class="text-center mb-5">
                    <div class="flex items-center justify-center">
                        <div class="col-span-12">
                            <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                                Edit My Profile
                            </h2>
                            <p class="text-sm text-gray-400">
                                Enter your data Correctly & Properly
                            </p>
                        </div>
                    </div>
                </div>
                <section class="container px-6 mx-auto mt-5">
                    <div class="text-center mb-5">
                        <form action="{{ route('admin.profile.update', [Auth::user()->id]) }}" method="POST" enctype="multipart/form-data">

                            @method('PUT')
                            @csrf
                            <div class="flex items-center justify-center">
                                <div class="col-span-12">


                                    <div class="flex items-center mt-1">
                                        @if (auth()->user()->detail_user()->first()->photo != NULL)
                                            <img src="{{ url(Storage::url(auth()->user()->detail_user()->first()->photo)) }}" alt="photo profile" class="rounded-full profilepic">
                                        @else
                                            <span class="inline-block overflow-hidden bg-gray-100 rounded-full">
                                                        <svg class="w-full h-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                                            <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                                        </svg>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="flex items-center mt-1">
                                        <label for="choose" class="lg:bg-ezb-services-bg px-3 py-2 ml-5 text-sm font-medium leading-4 text-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                            Choose File
                                        </label>

                                        <input type="file" accept="image/*" id="choose" name="photo" hidden>

                                        <a href="{{ route('admin.delete.photo.profile') }}" class="px-3 py-2 ml-5 text-sm font-medium leading-4 text-red-700 bg-transparent rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                                           onclick="return confirm('Are you sure want delete your photo?')">
                                            Delete
                                        </a>
                                    </div>

                                    <div class="md:col-span-12 lg:col-span-3">
                                        <label for="name" class="block mt-4 mb-3 font-medium text-gray-700 text-md">Full Name</label>
                                        <input placeholder="your name" type="text" name="name" id="name" autocomplete="name"
                                               class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                                value="{{ $user->name ?? '' }}" required >
                                        @if($errors->has('name'))
                                            <p class="text-red-500 mb-3 text-sm">{{ $errors->first('name') }}</p>
                                        @endif

                                    </div>

                                    <div class="md:col-span-12 lg:col-span-3">
                                        <label for="email" class="block mt-4 mb-3 font-medium text-gray-700 text-md">Email</label>
                                        <input placeholder="your email" type="text" name="email" id="email" autocomplete="email"
                                               class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                                value="{{ $user->email ?? '' }}" required >
                                        @if($errors->has('email'))
                                            <p class="text-red-500 mb-3 text-sm">{{ $errors->first('email') }}</p>
                                        @endif

                                    </div>

                                    <div class="md:col-span-12 lg:col-span-3">
                                        <label for="sex" class="block mt-4 mb-3 font-medium text-gray-700 text-md">Jenis Kelamin</label>

                                        <select id="sex" name="sex" autocomplete="sex" class="block w-full mt-1 px-3 py-3 pr-10 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                            <option>Jenis Kelamin:</option>
                                            <option value="Laki-Laki" {{ $user->detail_user->sex == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                                            <option value="Perempuan" {{ $user->detail_user->sex == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                        </select>

                                        @if ($errors->has('sex'))
                                            <p class="text-red-500 mb-3 text-sm">{{ $errors->first('sex') }}</p>
                                        @endif

                                    </div>

{{--                                    <div class="md:col-span-12 lg:col-span-3">--}}
{{--                                        <label for="occupation" class="block mt-4 mb-3 font-medium text-gray-700 text-md">Pekerjaan</label>--}}
{{--                                        <input placeholder="Pekerjaan" type="text" name="occupation" id="occupation" autocomplete="occupation"--}}
{{--                                               class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"--}}
{{--                                               value="{{ auth()->user()->detail_user()->first()->occupation ?? '' }}" required >--}}
{{--                                        @if($errors->has('occupation'))--}}
{{--                                            <p class="text-red-500 mb-3 text-sm">{{ $errors->first('occupation') }}</p>--}}
{{--                                        @endif--}}

{{--                                    </div>--}}

                                    <div class="md:col-span-12 lg:col-span-3">
                                        <label for="occupation" class="block mt-4 mb-3 font-medium text-gray-700 text-md">Pekerjaan</label>
                                        <input placeholder="Pekerjaan [Mahasiswa|Pelajar|DLL]" type="text" name="occupation" id="occupation" autocomplete="occupation"
                                               class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                               value="{{ $user->detail_user->occupation ?? '' }}" required >
                                        @if($errors->has('occupation'))
                                            <p class="text-red-500 mb-3 text-sm">{{ $errors->first('occupation') }}</p>
                                        @endif

                                    </div>

{{--                                    <div class="md:col-span-12 lg:col-span-3">--}}
{{--                                        <label for="password" class="block mt-4 mb-3 font-medium text-gray-700 text-md">Password</label>--}}
{{--                                        <input placeholder="password" type="password" name="password" id="password" autocomplete="password"--}}
{{--                                               class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"--}}
{{--                                               value="#" >--}}
{{--                                        --}}{{--                                    value="{{ $user->name ?? '' }}" required >--}}
{{--                                        @if($errors->has('password'))--}}
{{--                                            <p class="text-red-500 mb-3 text-sm">{{ $errors->first('password') }}</p>--}}
{{--                                        @endif--}}
{{--                                    </div>--}}

{{--                                    <div class="#">--}}
{{--                                        <a href="{{ '/' }}">--}}
{{--                                            <button class="mt-10 px-12 py-4 ml-23 mb-12 hover:bg-ezb-btn">Back</button>--}}
{{--                                        </a>--}}
{{--                                        <a href="#">--}}
{{--                                            <button class="lg:bg-ezb-services-bg mt-10 px-12 py-4 ml-23 mb-12">Simpan</button>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
                                    <div class="md:col-span-12 lg:col-span-3 px-4 py-3 sm:px-6">
                                        <a href={{ route('tentangkami') }} type="button" class="inline-flex justify-center px-4 py-2 mr-4 text-sm font-medium text-gray-700 bg-white border border-gray-600 rounded-lg shadow-sm hover:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300" onclick="return confirm('Are you sure want to cancel?, Any changes you make will not be saved.')">
                                            Batal
                                        </a>

                                        <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white lg:bg-ezb-services-bg border border-transparent rounded-lg shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" onclick="return confirm('Are you sure want to submit this data ?')">
                                            Simpan
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection