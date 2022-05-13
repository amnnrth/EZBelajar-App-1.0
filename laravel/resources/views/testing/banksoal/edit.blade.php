@extends('testing.layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Bank Soal</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('banksoal.index') }}"> Back</a>
        </div>
    </div>
</div>


@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('banksoal.update',$banksoal->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="title" value="{{ $banksoal->title }}" class="form-control" placeholder="Post Title">
                @error('title')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Soal:</strong> <br>
                <input type="file" name="soal" class="form-control" id="soal">
                @error('soal')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jawaban:</strong> <br>
                <input type="file" name="jawaban" class="form-control" id="jawaban">
                @error('jawaban')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>


{{--{!! Form::model($banksoal, ['method' => 'PATCH','route' => ['banksoal.update', $banksoal->id]]) !!}--}}
{{--<div class="row">--}}
{{--    <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--        <div class="form-group">--}}
{{--            <strong>Name:</strong>--}}
{{--            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--        <div class="form-group">--}}
{{--            <strong>Permission:</strong>--}}
{{--            <br/>--}}
{{--            @foreach($permission as $value)--}}
{{--                <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}--}}
{{--                {{ $value->name }}</label>--}}
{{--            <br/>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="col-xs-12 col-sm-12 col-md-12 text-center">--}}
{{--        <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--    </div>--}}
{{--</div>--}}
{{--{!! Form::close() !!}--}}


{{--<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>--}}
@endsection
