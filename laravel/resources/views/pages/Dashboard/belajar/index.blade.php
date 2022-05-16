@extends('layouts.app')

@section('title', ' Belajar')

@section('content')

    @if (count($belajars))
        <main class="h-full overflow-y-auto">
            <div class="container mx-auto">
                <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                    <div class="col-span-8">
                        <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                            Belajar
                        </h2>
                        <p class="text-sm text-gray-400">
                            {{ auth()->user()->belajar()->count() }} Total Belajar
                        </p>
                    </div>
                    <div class="col-span-4 lg:text-right">
                        <div class="relative mt-0 md:mt-6">
                            <a href="{{ route('admin.belajar.create') }}" class="inline-block px-4 py-2 mt-2 text-left text-white rounded-xl bg-ezb-button">
                                + Add Belajar
                            </a>
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
                                    <th class="py-4" scope="">Judul Video</th>
                                    <th class="py-4" scope="">Tanggal Input</th>
                                    <th class="py-4" scope="">Admin</th>
                                    <th class="py-4" scope="">Action</th>
                                </tr>
                                </thead>
                                <tbody class="bg-white">

                                @forelse ($belajars as $key => $belajar)
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
                                            {{ $belajar->title ?? '' }}
                                        </td>
                                        <td class="px-1 py-5 text-sm">
                                            {{ $belajar->created_at->diffForHumans() ?? '' }}
                                        </td>
                                        <td class="px-1 py-5 text-sm text-green-500 text-md">
                                            {{ 'Active' }}
                                        </td>
                                        <form action="{{ route('admin.belajar.destroy',$belajar['id']) }}" method="POST">
                                            <td class="px-1 py-5 text-sm">
                                                <a href="{{ route('admin.belajar.edit', $belajar['id']) }}" class="px-4 py-2 mt-2 text-left text-white rounded-xl bg-ezb-email">
                                                    Show Belajar
                                                </a>
                                            </td>
                                            <td class="px-1 py-5 text-sm">
                                                <a href="{{ route('admin.belajar.edit', $belajar['id']) }}" class="px-4 py-2 mt-2 text-left text-white rounded-xl bg-ezb-email">
                                                    Edit Belajar
                                                </a>
                                            </td>

                                            @csrf
                                            @method('DELETE')
                                            <td class="px-1 py-5 text-sm">
                                                <a>
                                                    Delete Belajar
                                                </a>
                                            </td>
                                        </form>
                                    </tr>
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
                <img src="{{ asset('/assets/images/empty-illustration.svg') }}" alt="" class="w-48 mx-auto">
                <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                    There is No Requests Yet
                </h2>
                <p class="text-sm text-gray-400">
                    It seems that you haven’t provided any Belajar. <br>
                    Let’s create your first Belajar!
                </p>

                <div class="relative mt-0 md:mt-6">
                    <a href="{{ route('admin.belajar.create') }}" class="px-4 py-2 mt-2 text-left text-white rounded-xl bg-ezb-button">
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
