@extends('admin.layout')

@section('content')

    <div class="d-flex justify-content-between mb-3">
        <h6>Edit {{ $course->name }}</h6>
        <a href="{{ route('admin.courses.index') }}" class="btn btn-sm btn-primary">Back</a>
    </div>
    @include('admin.inc.errors')
    <form method="POST" action="{{ route('admin.courses.update') }}" class="my-4 py-4" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $course->id }}">
        <div class="row">
            <div class="col-6 py-2">
                <select name="cat_id" class="form-select" aria-label="Default select example">
                    @foreach ($cats as $cat)
                        <option value="{{ $cat->id }}" @if ($course->cat_id == $cat->id) selected @endif>{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-6 py-2">
                <select name="trainer_id" class="form-select" aria-label="Default select example">
                    @foreach ($trainers as $tr)
                        <option value="{{ $tr->id }}" @if ($course->trainer_id == $tr->id) selected @endif>{{ $tr->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-6 py-2">
                <input type="text" name="name" class="form-control" placeholder="name" value="{{ $course->name }}">
            </div>
            <div class="col-6 py-2">
                <input type="text" name="small_desc" class="form-control" placeholder="small desc"
                    value="{{ $course->small_desc }}">
            </div>
            <div class="col-12 py-2">
                <textarea name="desc" class="form-control" cols="30" rows="10"
                    placeholder="description">{{ $course->desc }}</textarea>
            </div>
            <div class="col-12 py-2">
                <input type="number" name="price" class="form-control" placeholder="price" value="{{ $course->price }}">
            </div>
            <div class="col-12 py-2">
                <img id="output" src="{{ asset('uploads/courses/' . $course->img) }}" height="130px" class="my-3"
                    alt="" />
                <input type="file" name="img" class="custom-file-input" id="customFile" accept="image/*"
                    onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                <label class="custom-file-label" for="customFile">Choose img</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary my-3">Edit Course</button>
    </form>

@endsection
