@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-3">Create a new post</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="{{ route('admin.posts.store') }}">
            @csrf

            <div class="row">

                <div class="col-12 mb-3 form-group">
                    <label for="title">Title: </label>
                    <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}">
                </div>
                
                <div class="col-12 mb-3 form-group">
                    <div class="label">Content: </div>
                    <textarea class="form-control" type="text"
                    rows="5"  name="content" id="content"> {{ old('content') }}</textarea>
                </div>

                <div class="col-12 mb-3 form-group">
                    <label for="image">Image Url: </label>
                    <input class="form-control" type="text" name="image" id="image" value="{{ old('image') }}">
                </div>
                
                <div class="d-flex justify-content-end col-12">
                    {{-- Back to List --}}
                    <a class="btn btn-secondary mr-3" href="{{ route('admin.posts.index')}}">Back</a>
                    {{-- Create --}}
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>

            </div>

        </form>
    </div>
@endsection