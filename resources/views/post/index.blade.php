@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif
        <div>
            <div class="panel panel-default">
                <div class="panel-heading">All Posts</div>
                <div class="panel-body">
                  <table class="table table-hover table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Slug</th>
                      <th>Title</th>
                      <th>Content</th>
                      <th>Category</th>
                      <th>Thumbnails</th>
                      <th>Created At</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($posts as $post)
                    <tr>
                      <td>{{ $post->id }}</td>
                      <td>{{ $post->slug }}</td>
                      <td>{{ $post->title }}</td>
                      <td>{{ $post->content }}</td>
                      <td>{{ $post->category }}</td>
                      <td>{{ $post->thumbnails }}</td>
                      <td>{{ $post->created_at->format('M d, Y') }}</td>
                      <td><a href="{{ route('page.blog.show', $post->id) }}" class="btn btn-success btn-sm">View</a></td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
