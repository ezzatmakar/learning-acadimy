@extends('admin.layout')

@section('content')

    <div class="d-flex justify-content-between mb-3">
        <h6>Edit {{$trainer->name }}</h6>
        <a href="{{ route('admin.trainers.index') }}" class="btn btn-sm btn-primary">Back</a>
    </div>
    @include('admin.inc.errors')
    <form method="POST" action="{{ route('admin.trainers.update') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $trainer->id }}">
        <div class="col-6">
            <label for="name" class="sr-only my-2">Trainer name</label>
            <div class="mb-2">
                <input type="text" value="{{$trainer->name }}" name="name" class="form-control">
            </div>
        </div>
        <div class="col-6">
            <label for="name" class="sr-only my-2">Trainer name</label>
            <div class="mb-2">
                <input type="text" value="{{$trainer->phone }}" name="phone" class="form-control">
            </div>
        </div>

        <div class="col-6">
            <label for="name" class="sr-only my-2">Trainer name</label>
            <div class="mb-2">
                <input type="text" value="{{$trainer->spec }}" name="spec" class="form-control">
            </div>
        </div>
        <div class="col-6">
            <img id="output" src="{{ asset('uploads/trainers/'. $trainer->img) }}" height="100px" id="image" alt="">
        </div>
        <div class="col-6">
            <label for="name" class="sr-only my-2">Trainer name</label>
            <div class="mb-2">
                <input type="file" name="img" class="custom-file-input" id="customFile"
                       accept="image/*"
                       onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                <label class="custom-file-label" for="customFile">Choose img</label>
            </div>
        </div>

        <div class="mb-2">
            <button type="submit" class="btn btn-primary">Edit category</button>
        </div>
    </form>

@endsection
