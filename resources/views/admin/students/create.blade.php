@extends('admin.layout')

@section('content')
    <div style="height: 65vh">

        <div class="d-flex justify-content-between mb-3">
            <h6>Add new category</h6>
            <a href="{{ route('admin.students.index') }}" class="btn btn-sm btn-primary">Back</a>
        </div>
        @include('admin.inc.errors')
        <form class="form-inline" method="POST" action="{{ route('admin.students.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">name</label>
                <div class="mb-2">
                    <input type="text" id="nameInput" name="name" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="name">email</label>
                <div class="mb-2">
                    <input type="email" id="nameInput" name="email" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="name">specialty</label>
                <div class="mb-2">
                    <input type="text" id="nameInput" name="spec" class="form-control">
                </div>
            </div>
            <div class="mb-2">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
    </div>
@endsection
