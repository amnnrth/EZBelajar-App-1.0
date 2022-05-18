@extends('testing.layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Bank Soal Management</h2>
        </div>
        <div class="pull-right">
        @can('role-create')
            <a class="btn btn-success" href="{{ route('banksoal.create') }}"> Create New Role</a>
            @endcan
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif


<table class="table table-bordered">
  <tr>
     <th>No</th>
     <th>Title</th>
      <th>Soal</th>
      <th>Jawaban</th>
     <th width="280px">Action</th>
  </tr>
    @foreach ($bank_soals as $key => $bank_soal)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $bank_soal->title }}</td>
{{--        <td>{{ route('getFile',$bank_soal->soal) }}</td>--}}
        <td>{{ Storage::url($bank_soal->soal) }}</td>
        <td>{{ Storage::url($bank_soal->jawaban) }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('banksoal.show',$bank_soal->id) }}">Show</a>
            @can('bank_soal-edit')
                <a class="btn btn-primary" href="{{ route('banksoal.edit',$bank_soal->id) }}">Edit</a>
            @endcan
            @can('bank_soal-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['banksoal.destroy', $bank_soal->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            @endcan
        </td>
    </tr>
    @endforeach
</table>


{!! $bank_soals->render() !!}

@endsection
