@extends('admin.layout')

@section('content')

    <div style="height: 65vh;">
        <div class="d-flex justify-content-between mb-3">
            <h6 class="cat-name">{{ $student->name }}</h6>
            <div class="actions">
                <a href="{{ route('admin.students.index') }}" class="btn btn-lg btn-primary">Back to students</a>
                <a href="{{ route('admin.students.addCourse', $student->id) }}"
                    class="btn btn-lg btn-outline-warning ms-3">Assign course</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Course</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($student->courses as $c)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td scope="row">{{ $c->name }}</td>
                                <td scope="row">{{ $c->pivot->status }}</td>
                                <td scope="row">
                                    @if ($c->pivot->status !== 'approve')
                                        <a href="{{ route('admin.students.approve', [$student->id, $c->id]) }}"
                                            class="btn btn-outline-primary ms-2">Approve</a>
                                    @endif
                                    @if ($c->pivot->status !== 'reject')
                                        <a href="{{ route('admin.students.reject', [$student->id, $c->id]) }}"
                                            class="btn btn-outline-danger ms-2">Reject</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
