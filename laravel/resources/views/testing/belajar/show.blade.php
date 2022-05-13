@extends('testing.layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-lg12 margin-tb">
                <div class="pull-left">
                    <h2>Show Bank Soal</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('banksoal.index') }}"> Back</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    {{ $bank_soal->title }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Soal:</strong>
                    <img src="{{ Storage::url($belajar->cover) }}" width="100" alt="" />
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Link:</strong>
                    {{ $belajar->link }}
                </div>
            </div>
        </div>

    </div>

@endsection
