@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>Post Soft Deleted</strong></div>

                <div class="card-body text-center">
                  @if ($posts->count() > 0)
                    <table class="table table-striped">
                        <thead class="text-center">
                          <tr>
                            <th scope="col">#ID</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Title</th>
                            <th scope="col">Create Date</th>
                            <th scope="col">Control</th>
                          </tr>
                        </thead>
                        <tbody class="text-center">
                          @foreach ($posts as $post)
                            <tr>
                              <th scope="row">{{ $post->id }}</th>
                              <td><img src="{{ $post->photo }}" alt="{{ $post->title }}" class="img-thumbnail" width="100" height="100"></td>
                              <td>{{ $post->title }}</td>
                              <td>{{ $post->created_at }}</td>
                              <td>
                                <a class="btn btn-primary" href="{{ route('post.restore',$post->id) }}"><i class="fas fa-edit"></i></a>
                                <a class="btn btn-danger" href="{{ route('post.hdelete',$post->id) }}"><i class="far fa-trash-alt"></i></a>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                  @else
                    <strong>No Trashed Posts</strong>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
