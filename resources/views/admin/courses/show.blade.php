@extends('admin.layout')

@section('content')
    <div class="vh-100">
        <div class="d-flex justify-content-between mb-3">
            <h6 class="cat-name">{{ $course->name }}</h6>
            <a href="{{ route('admin.courses.index') }}" class="btn btn-sm btn-primary">Back</a>
        </div>
        <div class="row">
            <div class="col-3 pb-5 mb-3">
                <h4>Course Category - {{ $course->cat->name }}</h4>
            </div>
            <div class="col-3 pb-5 mb-3">
                <h4>Students - {{ count($course->students) }}</h4>
            </div>
            <div class="col-3 pb-5 mb-3">
                <h4>Price - {{ $course->price }}</h4>
            </div>
            <div class="col-3 pb-5 mb-3">
                <h4>{{$course->trainer->name}}</h4>
            </div>
            <div class="col-6">
                <i class="alert-dark">Description</i>
                <p class="justify-content-start">{{$course->desc}}</p>
            </div>
            <div class="col-6">
                <img src="{{ asset('uploads/courses/' . $course->img) }}" class="img-fluid" alt="{{ $course->name }}">
            </div>
        </div>
    </div>
@endsection
