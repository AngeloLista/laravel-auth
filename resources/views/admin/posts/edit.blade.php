@extends('layouts.app')

@section('content')
<section id="post-edit" class="container d-flex justify-content-center align-items-center">
    <form method="post" action="{{ route('admin.posts.update', $post->id) }}">
        @csrf

        <div class="row">

            <div class="col-12 mb-3 form-group">
                <label for="title">Title: </label>
                <input class="form-control" type="text" name="title" id="title" value="{{ old('title', $post->title) }}">
            </div>
            
            <div class="col-12 mb-3 form-group">
                <div class="label">Content: </div>
                <textarea class="form-control" type="text"
                rows="5"  name="content" id="content">{{ old('content', $post->content) }}</textarea>
            </div>

            <div class="col-12 mb-3 form-group">
                <label for="image">Image Url: </label>
                <input class="form-control" type="text" name="image" id="image" value="{{ old('image', $post->image) }}">
            </div>
            {{-- Save --}}
            <div class="d-flex justify-content-end col-12">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>

        </div>

    </form>
</section>
@endsection