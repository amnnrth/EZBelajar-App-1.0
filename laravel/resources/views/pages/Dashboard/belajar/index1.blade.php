@extends('layouts.app')

@section('title', ' Belajar')

@section('content')
    <div class="container px-6 mx-auto mt-16">
        <div class="flex gap-6">
            <a href="{{ route('admin.belajar.create') }}"><button class="lg:bg-serv-upload-bg px-10 py-1 text-white mb-">Upload</button></a>
            <form>
                <input class="search" type="text" placeholder="Cari" required>
                <button>
                    <img src="{{ asset('/assets/search.svg') }}" alt="search">
                </button>
            </form>
        </div>
        <div class="p-6 mt-8 bg-white rounded-xl">

            <table class="w-full mt-4" aria-label="Table">
                <thead>
                <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                    <th class="py-4" scope="">Nomor</th>

                    <th class="py-4" scope="">Nama video</th>

                    <th class="py-4" scope="">Tanggal Input</th>

                    <th class="py-4" scope="">Admin</th>
                </tr>
                <tr>
                    @foreach ($belajars as $belajar)
                        <td>{{ ++$i }}</td>--}}
                        <td>{{$belajar->title}}</td>
                        <td>{{$belajar->created_at->diffForHumans()}}</td>
                        <td>Amin</td>
                        <td class="flex gap-4">
                        <form action="{{ route('admin.belajar.destroy',$belajar->id) }}" method="POST">
                            <button class="bg-red-200 text-black py-1 px-8">
                            <a class="btn btn-info" href="{{ route('admin.belajar.show',$belajar->id) }}">Show</a>
                            </button>
                            <a class="btn btn-primary" href="{{ route('admin.belajar.edit',$belajar->id) }}">Edit</a>
    {{----}}
                            @csrf
                            @method('DELETE')
    {{----}}
                            <button class="bg-red-200 text-black py-1 px-8">Delete</button>
                        </form>
                    @endforeach
                </tr>

                </thead>
                <tbody class="bg-white">
            </table>
        </div>
    </div>

@endsection
