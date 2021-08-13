@extends('admin.layout')

@section('content')

    <div class="d-flex justify-content-between mb-3">
        <h6>Add new Course</h6>
        <a href="{{ route('admin.courses.index') }}" class="btn btn-sm btn-primary">Back</a>
    </div>
    @include('admin.inc.errors')
    <form method="POST" action="{{ route('admin.courses.store') }}" class="my-4 py-4" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6 py-2">
                <select name="cat_id" class="form-select" aria-label="Default select example">
                    <option disabled selected>Select category</option>
                    @foreach ($cats as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-6 py-2">
                <select name="trainer_id" class="form-select" aria-label="Default select example">
                    <option selected disabled>Select trainer</option>
                    @foreach ($trainers as $trainer)
                        <option value="{{ $trainer->id }}">{{ $trainer->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12 py-2">
                <input type="text" name="name" class="form-control" placeholder="name">
            </div>
            <div class="col-12 py-2">
                <input type="text" name="small_desc" class="form-control" placeholder="small desc">
            </div>
            <div class="col-12 py-2">
                <textarea name="desc" class="form-control" cols="30" rows="10" placeholder="description"></textarea>
            </div>
            <div class="col-12 py-2">
                <input type="number" name="price" class="form-control" placeholder="price">
            </div>
            <div class="col-12 py-2">
                <img id="output" src="" height="130px" class="my-3" alt="" />
                <input type="file" name="img" class="custom-file-input" id="customFile" accept="image/*"
                    onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                <label class="custom-file-label" for="customFile">Choose img</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary my-3">Add Course</button>
    </form>

@endsection
