@extends('testing.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Blog</h2>
            </div>
            <div class="pull-right">
                @can('product-create')
                    <a class="btn btn-success" href="{{ route('blog.create') }}"> Create New Blog Post</a>
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
            <th>Cateogry</th>
            <th>body</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($posts as $post)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $post->title }}</td>
{{--                @foreach ($categories as $category)--}}
                <td>{{ $post->category()->first()->name }}</td>
{{--                @endforeach--}}
                <td>{{ $post->body }}</td>
                <td>
                    <form action="{{ route('blog.destroy',$post->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('blog.show',$post->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('blog.edit',$post->id) }}">Edit</a>

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


@endsection
