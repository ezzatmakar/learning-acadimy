@extends('admin.layout')

@section('content')

    <div class="d-flex justify-content-between mb-3">
        <h6>Edit {{$trainer->name }}</h6>
        <a href="{{ route('admin.trainers.index') }}" class="btn btn-sm btn-primary">Back</a>
    </div>
    @include('admin.inc.errors')
    <form class="form-inline" method="POST" action="{{ route('admin.trainers.update') }}">
        @csrf
        <input type="hidden" name="id" value="{{$trainer->id }}">
        <div class="d-flex justify-content-between">
            <label for="name" class="sr-only my-2">Category name</label>
            <div class="mb-2">
                <input type="text" value="{{$trainer->name }}" name="name" class="form-control">
            </div>
            <div class="mb-2">
                <button type="submit" class="btn btn-primary">Edit category</button>
            </div>
        </div>
    </form>

@endsection
