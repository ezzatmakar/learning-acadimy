@extends('admin.layout')

@section('content')

    <div class="d-flex justify-content-between mb-3">
        <h6>students</h6>
        <a href="{{ route('admin.students.create') }}" class="btn btn-sm btn-primary">Add new</a>
    </div>
    <div class="row">
        <div class="col-12">

            <table class="table table-hover">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Specialty</th>
                        <th scope="col">courses count</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $s)
                        <tr>
                            <td scope="row">{{ $loop->iteration }}</td>
                            <td scope="row">{{ $s->name }}</td>
                            <td scope="row">{{ $s->email }}</td>
                            @if ($s->spec !== null)
                                <td scope="row">{{ $s->spec }}</td>
                            @else
                                <td scope="row">No speciality set</td>
                            @endif
                            <td scope="row">{{ count($s->courses) }}</td>
                            <td scope="row">
                                <a href="{{ route('admin.students.edit', $s->id) }}"
                                    class="btn btn-outline-warning">Edit</a>
                                <a href="{{ route('admin.students.destroy', $s->id) }}"
                                    class="btn btn-outline-danger ms-2">X</a>
                                <a href="{{ route('admin.students.show', $s->id) }}"
                                    class="btn btn-outline-primary ms-2">courses</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
