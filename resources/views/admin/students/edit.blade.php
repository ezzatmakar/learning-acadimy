@extends('admin.layout')

@section('content')

    <div style="height: 65vh">
        <div class="d-flex justify-content-between mb-3">
            <h6>{{ $student->name }}</h6>
            <a href="{{ route('admin.cats.index') }}" class="btn btn-sm btn-primary">Back</a>
        </div>
        @include('admin.inc.errors')
        <form class="form-inline" method="POST" action="{{ route('admin.students.update') }}">
            @csrf
            <input type="hidden" name="id" value="{{ $student->id }}">
            <div class="form-group">
                <label for="name" class="sr-only my-2">name</label>
                <div class="mb-2">
                    <input type="text" value="{{ $student->name }}" name="name" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="sr-only my-2">email</label>
                <div class="mb-2">
                    <input type="email" value="{{ $student->email }}" name="email" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="spec" class="sr-only my-2">specialty</label>
                <div class="mb-2">
                    <input type="text" value="{{ $student->spec }}" name="name" class="form-control">
                </div>
            </div>
            <div class="form-group mb-2">
                <button type="submit" class="btn btn-primary">Edit student</button>
            </div>
        </form>
    </div>

@endsection
