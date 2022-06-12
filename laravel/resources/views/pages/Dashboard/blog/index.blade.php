@extends('layouts.app')

@section('title', ' Artikel')

@section('content')

    @if (count($posts))
        <main class="h-full overflow-y-auto">
            <div class="container mx-auto">
                <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                    <div class="col-span-8">
                        <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                            Artikel
                        </h2>
                        <p class="text-sm text-gray-400">
{{--                            {{ auth()->user()->posts()->count() }} Total Aritkel--}}
                            {{ $posts->count() }} Total Artikel
                        </p>
                    </div>
{{--                    <div class="col-span-4 lg:text-right">--}}
{{--                        <div class="relative mt-0 md:mt-6">--}}
{{--                            <a href="{{ route('admin.artikel.create') }}" class="inline-block px-4 py-2 mt-2 text-left text-white rounded-xl bg-ezb-button">--}}
{{--                                + Add Artikel--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>

            <div class="container mx-auto">
                <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                    <div class="col-span-4 lg:text-left">
                        <div class="relative mt-0 md:mt-4 inline-block">
                            <a href="{{ route('admin.artikel.create') }}" class="inline-block px-4 py-2 mt-2 text-left text-white rounded-xl bg-ezb-bg">
                                + Add Artikel
                            </a>
                            <div class="inline-block ">
                                <form method="GET">
                                    <input type="text" name="search" class="px-4 py-2 w-80" placeholder="Search..." value="{{ request('search') }}">
                                    <button class="flex items-center justify-center px-4 border-l">
                                        {{--                                                    <svg class="w-6 h-6 text-gray-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg"--}}
                                        {{--                                                         viewBox="0 0 24 24">--}}
                                        {{--                                                        <path--}}
                                        {{--                                                                d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"> </path>--}}
                                        {{--                                                    </svg>--}}
                                    </button>
                                </form>
                            </div>
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
                                    <th class="py-4" scope="">No</th>
                                    <th class="py-4" scope="">Judul Aritkel</th>
                                    <th class="py-4" scope="">Tanggal Input</th>
                                    <th class="py-4" scope="">User</th>
                                    <th class="py-4" scope="">Action</th>
                                </tr>
                                </thead>
                                <tbody class="bg-white">

                                @forelse ($posts as $key => $post)
                                    <tr class="text-gray-700 border-b">
                                        <td class="w-2/6 px-1 py-5">
                                            <div class="flex items-center text-sm">
                                                <div>
                                                    <p class="font-medium text-black">
                                                        {{ ++$i }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-1 py-5 text-sm">
                                            {{ $post->title ?? '' }}
                                        </td>
                                        <td class="px-1 py-5 text-sm">
                                            {{ $post->created_at?? '' }}
                                        </td>
                                        <td class="px-1 py-5 text-sm">
                                            {{ auth()->user()->first()->name ?? '' }}
                                        </td>
                                            <td class="px-1 py-5 text-sm">
                                                <a href="{{ route('admin.artikel.show', $post->id) }}" class="px-4 py-2 mt-2 text-left text-white rounded-xl bg-ezb-email">
                                                    Show Artikel
                                                </a>
                                            </td>
                                            <td class="px-1 py-5 text-sm">
                                                <a href="{{ route('admin.artikel.edit', $post->id) }}" class="px-4 py-2 mt-2 text-left text-white rounded-xl bg-ezb-email">
                                                    Edit Artikel
                                                </a>
                                            </td>
                                        <form action="{{ route('admin.artikel.destroy',$post->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <td class="px-1 py-5 text-sm">
                                                <a>
                                                    <button class="badge bg-danger border-0" onclick="return confirm('Hapus Post?')"><span data-feather="x-circle">DELETE</span></button>
{{--                                                    Delete Artikel--}}
                                                </a>
                                            </td>
                                        </form>
                                    </tr>
                                    {{ $posts->links() }}
                                @empty

                                    {{-- empty --}}

                                @endforelse

                                </tbody>
                            </table>
                        </div>
                    </main>
                </div>
            </section>
        </main>
    @else
        <div class="flex h-screen">
            <div class="m-auto text-center">
                <img src="{{ asset('/assets/images/no_data.png') }}" alt="" class="mx-auto">
                <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                    There is No Artikel Yet
                </h2>
                <p class="text-sm text-gray-400">
                    It seems that you haven’t provided any Artikel. <br>
                    Let’s create your first Artikel!
                </p>

                <div class="relative mt-0 md:mt-6">
                    <a href="{{ route('admin.artikel.create') }}" class="px-4 py-2 mt-2 text-left text-white rounded-xl bg-ezb-bg">
                        + Add Belajar
                    </a>
                </div>
            </div>
        </div>
    @endif


    {{--    <div class="container px-6 mx-auto mt-16">--}}
    {{--        <div class="flex gap-6">--}}
    {{--            <a href="{{ route('admin.belajar.create') }}"><button class="lg:bg-ezb-upload-bg px-10 py-1 text-white mb-">Upload</button></a>--}}
    {{--            <form>--}}
    {{--                <input class="search" type="text" placeholder="Cari" required>--}}
    {{--                <button>--}}
    {{--                    <img src="{{ asset('/assets/search.svg') }}" alt="search">--}}
    {{--                </button>--}}
    {{--            </form>--}}
    {{--        </div>--}}
    {{--        <div class="p-6 mt-8 bg-white rounded-xl">--}}

    {{--            <table class="w-full mt-4" aria-label="Table">--}}
    {{--                <thead>--}}
    {{--                <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">--}}
    {{--                    <th class="py-4" scope="">No</th>--}}

    {{--                    <th class="py-4" scope="">Nama Video</th>--}}

    {{--                    <th class="py-4" scope="">Tanggal Input</th>--}}

    {{--                    <th class="py-4" scope="">Admin</th>--}}
    {{--                    <th class="py-4" width="280px" scope="">Aksi</th>--}}
    {{--                </tr>--}}
    {{--                </thead>--}}
    {{--                <tbody class="bg-white">--}}
    {{--                <tr>--}}
    {{--                    @foreach ($belajars as $belajar)--}}
    {{--                        <td>{{ ++$i }}</td>--}}
    {{--                        <td>{{$belajar->title}}</td>--}}
    {{--                        <td>{{$belajar->created_at->diffForHumans()}}</td>--}}
    {{--                        <td>Amin</td>--}}
    {{--                        <td class="flex gap-4">--}}
    {{--                            <form action="{{ route('admin.belajar.destroy',$belajar->id) }}" method="POST">--}}
    {{--                                <button class="bg-red-200 text-black py-1 px-8">--}}
    {{--                                    <a class="btn btn-info" href="{{ route('admin.belajar.show',$belajar->id) }}">Show</a>--}}
    {{--                                </button>--}}
    {{--                                <a class="btn btn-primary" href="{{ route('admin.belajar.edit',$belajar->id) }}">Edit</a>--}}

    {{--                                @csrf--}}
    {{--                                @method('DELETE')--}}

    {{--                                <button class="bg-red-200 text-black py-1 px-8">Delete</button>--}}
    {{--                            </form>--}}

    {{--                            <button class="bg-red-200 text-black py-1 px-8">Edit</button>--}}
    {{--                            <button class="lg:bg-ezb-upload-bg text-white py-1 px-8" onclick="toggleModal('DetailSoalModal')">Detail</button>--}}
    {{--                            <button class="bg-red-200 text-black py-1 px-8">Delete</button>--}}
    {{--                        </td>--}}
    {{--                        @empty--}}

    {{--                            Empty--}}

    {{--                    @endforeach--}}
    {{--                </tr>--}}
    {{--                </tbody>--}}
    {{--            </table>--}}
    {{--        </div>--}}
    {{--    </div>--}}

@endsection
