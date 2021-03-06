@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if ($post->exists)
    <form method="POST" action="{{ route('admin.posts.update', $post->id) }}" novalidate>
        @method('PUT')
    @else
    <form method="POST" action="{{ route('admin.posts.store') }}" novalidate>
@endif
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
                @error('content')
                    <div class="invalid-feedback">
                        ASD
                    </div>
                @enderror
            </div>

            <div class="col-12 mb-3 form-group">
                <label for="image">Image Url: </label>
                <input class="form-control" type="text" name="image" id="image" value="{{ old('image', $post->image) }}">
            </div>
            
            <div class="d-flex justify-content-end col-12">
                {{-- Back to List --}}
                <a class="btn btn-secondary mr-3" href="{{ route('admin.posts.index')}}">Back</a>
                {{-- Save --}}
                <button type="submit" class="btn btn-primary">Save</button>
            </div>

        </div>

    </form>