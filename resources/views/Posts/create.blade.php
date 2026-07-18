@extends('layouts.app')
@section('title') create post @endsection

@section('content')

<form method="POST" action="{{ route('posts.store') }}" >
@csrf

<div class="mb-3">
    <label class="form-label">Title</label>
    <input type="text" class="form-control" name="title">
</div>
<div class="mb-3">
    <label  class="form-label">Description</label>
    <textarea class="form-control" name="description"></textarea>
</div>

<div class="mb-3">
    <label class="form-label">Post Creator</label>
    <select class="form-select" aria-label="Default select example" name="posted_by">
        <option selected>Open this select menu</option>
        <option value="1">mhmd</option>
        <option value="2">ahmed</option>
        <option value="3">ali</option>
      </select>
</div>

<button type="submit" class="btn btn-success">Submit</button>

</form>









@endsection