@extends('layouts.app')

@section('content')
    <div class="container">
        <header>
            <h1>I miei post</h1>
        </header>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col">Creato il</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>

                @forelse($posts as $post)

                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->slug }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td class="d-flex justify-content-center align-items-center">
                      {{-- Back --}}
                      <a class="btn btn-primary mr-1" href="{{ route('admin.posts.show', $post->id) }}">Details</a>
                      {{-- Edit --}}
                      <a class="btn btn-secondary mr-1"href="{{ route('admin.posts.edit', $post->id) }}">Edit</a>
                      {{-- Delete --}}
                      <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" class="delete-form" data-name="{{ $post->title }}">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger mr-1" type="submit">Delete</button>
                      </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="5"> Non ci sono Post</td></tr>
                @endforelse
            </tbody>
          </table>
    </div>
@endsection