@extends('testing.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Belajar</h2>
            </div>
            <div class="pull-right">
                @can('product-create')
                    <a class="btn btn-success" href="{{ route('belajar.create') }}"> Create New Belajar</a>
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
            <th>Cover</th>
            <th>Link</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($belajars as $belajar)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $belajar->title }}</td>
{{--                <td><img src="{{ asset('assets/cover-image/'.$belajar->cover) }}" height="75" width="100" alt="" title="" /> </td>--}}
                <td><img src="{{ Storage::url($belajar->cover) }}" height="75" width="75" alt="" /></td>
                <td>{{ $belajar->link }}</td>
                <td>
                    <form action="{{ route('belajar.destroy',$belajar->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('belajar.show',$belajar->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('belajar.edit',$belajar->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

{{--                    <form action="{{ route('belajar.destroy',$belajar->id) }}" method="POST">--}}
{{--                        <a class="btn btn-info" href="{{ route('belajar.show',$belajar->id) }}">Show</a>--}}
{{--                        @can('belajar-edit')--}}
{{--                            <a class="btn btn-primary" href="{{ route('belajar.edit',$belajar->id) }}">Edit</a>--}}
{{--                        @endcan--}}


{{--                        @csrf--}}
{{--                        @method('DELETE')--}}
{{--                        @can('belajar-delete')--}}
{{--                            <button type="submit" class="btn btn-danger">Delete</button>--}}
{{--                        @endcan--}}
{{--                    </form>--}}
                </td>
            </tr>
        @endforeach
    </table>


    {!! $belajars->links() !!}
@endsection
