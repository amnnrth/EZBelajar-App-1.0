@extends('testing.layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Bank Soal</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('banksoal.index') }}"> Back</a>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title:</strong> <br>
            {{ $banksoal->title }}
        </div>
        <div class="form-group">
            <strong>Soal: </strong> <br>
            {{ Storage::url($banksoal->soal)  }}
        </div>
        <div class="form-group">
            <strong>Jawaban: </strong> <br>
            {{ Storage::url($banksoal->jawaban) }}
        </div>
    </div>
{{--    <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--        <div class="form-group">--}}
{{--            <strong>Permissions:</strong>--}}
{{--            @if(!empty($rolePermissions))--}}
{{--                @foreach($rolePermissions as $v)--}}
{{--                    <label class="label label-success">{{ $v->name }},</label>--}}
{{--                @endforeach--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </div>--}}
</div>
@endsection
