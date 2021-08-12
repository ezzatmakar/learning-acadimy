@extends('admin.layout')

@section('content')
    <div class="h-auto">
        <div class="d-flex justify-content-between mb-3">
            <h6>Trainers</h6>
            <a href="{{ route('admin.courses.create') }}" class="btn btn-sm btn-primary">Add new</a>
        </div>
        <div class="row">
            <div class="col-12">

                <table class="table table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Course pref</th>
                            <th scope="col">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $c)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td scope="row">
                                    <img src="{{ asset('uploads/courses/'. $c->img) }}" width="200px" height="150px"  alt="">
                                </td>
                                <td scope="row">{{ $c->name }}</td>
                                <td scope="row" style="width: 30%">
                                    <i>{{ $c->small_desc }}</i>
                                </td>
                                <td scope="row">
                                    <a href="{{ route('admin.courses.show', $c->id) }}"
                                       class="btn btn-outline-primary">view</a>
                                    <a href="{{ route('admin.courses.edit', $c->id) }}"
                                        class="btn btn-outline-warning ms-2">Edit</a>
                                    <a href="{{ route('admin.courses.destroy', $c->id) }}"
                                       class="btn btn-outline-danger ms-2">X</a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
