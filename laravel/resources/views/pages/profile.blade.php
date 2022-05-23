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
                        <div class="flex items-center justify-center">
                            <div class="col-span-12">
                                <div class="flex items-center mt-1">
                                    <img src="{{ asset('/assets/images/FotoDepan.jpg') }}" alt="profile" class="profilepic">
                                </div>
                                <div class="flex items-center mt-1">
                                    <label for="choose" class="lg:bg-ezb-services-bg px-3 py-2 ml-5 text-sm font-medium leading-4 text-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                        Choose File
                                    </label>

                                    <input type="file" accept="image/*" id="choose" name="photo" hidden>

                                    {{--                                                    <a href="{{ route('member.delete.photo.profile') }}" class="px-3 py-2 ml-5 text-sm font-medium leading-4 text-red-700 bg-transparent rounded-md hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"--}}
                                    <a href="#" class="px-3 py-2 ml-5 text-sm font-medium leading-4 text-red-700 bg-transparent rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                                       onclick="return confirm('Are you sure want delete your photo?')">
                                        Delete
                                    </a>
                                </div>

                                <div class="md:col-span-12 lg:col-span-3">
                                    <label for="name" class="block mb-3 font-medium text-gray-700 text-md">Full Name</label>
                                    <input placeholder="your name" type="text" name="name" id="name" autocomplete="name"
                                           class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                           value="#" required >
{{--                                            value="{{ $user->name ?? '' }}" required >--}}
                                    @if($errors->has('name'))
                                        <p class="text-red-500 mb-3 text-sm">{{ $errors->first('name') }}</p>
                                    @endif

                                </div>

                                <div class="md:col-span-12 lg:col-span-3">
                                    <label for="email" class="block mb-3 font-medium text-gray-700 text-md">Email</label>
                                    <input placeholder="your email" type="text" name="email" id="email" autocomplete="email"
                                           class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                           value="#" required >
{{--                                    value="{{ $user->name ?? '' }}" required >--}}
                                    @if($errors->has('email'))
                                        <p class="text-red-500 mb-3 text-sm">{{ $errors->first('email') }}</p>
                                    @endif

                                </div>

                                <div class="md:col-span-12 lg:col-span-3">
                                    <label for="password" class="block mb-3 font-medium text-gray-700 text-md">Password</label>
                                    <input placeholder="password" type="password" name="password" id="password" autocomplete="password"
                                           class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                           value="#" required >
{{--                                    value="{{ $user->name ?? '' }}" required >--}}
                                    @if($errors->has('password'))
                                        <p class="text-red-500 mb-3 text-sm">{{ $errors->first('password') }}</p>
                                    @endif

                                </div>

                                <div class="md:col-span-12 lg:col-span-3">
                                    <label for="occupation" class="block mb-3 font-medium text-gray-700 text-md">Pekerjaan</label>
                                    <input placeholder="Pekerjaan [Mahasiswa|Pelajar|DLL]" type="text" name="occupation" id="occupation" autocomplete="occupation"
                                           class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                           value="#" required >
{{--                                    value="{{ $user->name ?? '' }}" required >--}}
                                    @if($errors->has('occupation'))
                                        <p class="text-red-500 mb-3 text-sm">{{ $errors->first('occupation') }}</p>
                                    @endif

                                </div>

                                <div class="#">
                                    <a href="{{ '/' }}">
                                        <button class="mt-10 px-12 py-4 ml-23 mb-12 hover:bg-ezb-btn">Back</button>
                                    </a>
                                    <a href="#">
                                        <button class="lg:bg-ezb-services-bg mt-10 px-12 py-4 ml-23 mb-12">Simpan</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection