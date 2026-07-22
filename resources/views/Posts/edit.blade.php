@extends('layouts.app')
@section('title') Edit Post @endsection

@section('content')

<form method="POST" action="{{ route('posts.update',$post->id) }}" >
@csrf
@method('PUT')
<div class="mb-3">
    <label class="form-label">Title</label>
    <input type="text" class="form-control" value="{{ $post->title }}" name="title" >
</div>
<div class="mb-3">
    <label class="form-label">Description</label>
    <textarea class="form-control" name="description">{{ $post->description }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">Post Creator</label>
    <select class="form-select" aria-label="Default select example" name="posted_by">
        @foreach ($users as $user)
        <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
</div>

<button type="submit" class="btn btn-primary">Update</button>

</form>


@endsection