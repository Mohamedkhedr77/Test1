@extends('layouts.app')
@section('title') Show Post @endsection
@section('content')

<div class="card">
  <div class="card-header">
    post info
  </div>
  <div class="card-body">
    <figure>
      <blockquote class="blockquote">
        <p>Title:{{ $post->title }} </p>
      </blockquote>
      <figcaption class="blockquote-footer">
          <p>Description:{{ $post->description }} </p>
      </figcaption>
    </figure>
  </div>
</div>


<div class="card">
  <div class="card-header">
    post creator info
  </div>
  <div class="card-body">
    <figure>
      <blockquote class="blockquote">
        <p>Name:{{ $post->posted_by }}</p>
      </blockquote>
      <figcaption class="blockquote-footer">
        <p>Created At: {{ $post->created_at }}</p>
      </figcaption>
    </figure>
  </div>
@endsection
