@extends('admin.layout')

@section('content')

    <div class="d-flex justify-content-between mb-3">
        <h6>Add new</h6>
        <a href="{{ route('admin.cats.index') }}" class="btn btn-sm btn-primary">Back</a>
    </div>
    @include('admin.inc.errors')
    <form class="form-inline" method="POST" action="{{ route('admin.cats.store') }}">
        @csrf
        <div class="form-group mb-2">
            <label for="nameInput" class="sr-only my-2">Category name</label>
            <input type="text" id="nameInput" name="name" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>

@endsection
