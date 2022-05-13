@extends('testing.layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Bank Soal Management</h2>
            </div>
            <div class="pull-right">
                @can('role-create')
                    <a class="btn btn-success" href="{{ route('category.create') }}"> Create Category</a>
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
            <th>Category</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($categories as $key => $category)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('category.show',$category->id) }}">Edit</a>
{{--                    <a class="btn btn-info" href="{{ route('category.show',$category->id) }}">Show</a>--}}
                    @can('category-edit')
                        <a class="btn btn-primary" href="{{ route('category.edit',$category->id) }}">Edit</a>
                    @endcan
                    @can('category-delete')
                        {!! Form::open(['method' => 'DELETE','route' => ['category.destroy', $category->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    @endcan
                </td>
            </tr>
        @endforeach
    </table>

{{--    {!! $category->render() !!}--}}

@endsection
