@extends('testing.layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Blog Post</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('blog.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="title"><span>Title</span></label>
        <input type="text" id="title" name="title" value="{{ old('title') }}" />
        @error('title')
        {{-- The $attributeValue field is/must be $validationRule --}}
        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
        @enderror
    <!-- Image -->
        <label for="image"><span>Image</span></label>
        <input type="file" id="image" name="image" />
        @error('image')
        {{-- The $attributeValue field is/must be $validationRule --}}
        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
        @enderror

    <!-- Drop down -->
        <label for="categories"><span>Choose a category:</span></label>
        <select name="category_id" id="categories">
            <option selected disabled>Select option </option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category_id')
        {{-- The $attributeValue field is/must be $validationRule --}}
        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
        @enderror

    <!-- Body-->
        <label for="body"><span>Body</span></label>
        <textarea id="body" name="body">{{ old('body') }}</textarea>
        @error('body')
        {{-- The $attributeValue field is/must be $validationRule --}}
        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
    @enderror
    <!-- Button -->
        <input type="submit" value="Submit" />

    </form>

@endsection
