@extends('admin.layout')

@section('content')

    <div style="height: 65vh">
        <div class="d-flex justify-content-between mb-3">
            <h6>Assign course to {{ $student->name }}</h6>
            <a href="{{ route('admin.students.index') }}" class="btn btn-sm btn-primary">Back</a>
        </div>
        @include('admin.inc.errors')
        <form class="form-inline" method="POST" action="{{ route('admin.students.storeCourse', $student->id) }}">
            @csrf
            <input type="hidden" name="id" value="{{ $student->id }}">
            <div class="form-group">
                <select name="course_id" class="form-select" aria-label="Default select example">
                    @foreach ($courses as $c)
                        <option value="{{ $c->id }}">{{ $c->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-group btn-primary my-2">Submit</button>
        </form>
    </div>

@endsection
