@extends('layouts.livewire-mod')

@section('title', ' Detail Soal')

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}" defer></script>

@section('content')

    <div class="content">
        <div class="bg-gray-50 py-16 px-4 sm:grid sm:grid-cols-12">
            <livewire:user-quizlv />
        </div>
    </div>

@endsection