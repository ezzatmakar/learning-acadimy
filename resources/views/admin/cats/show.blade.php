@extends('admin.layout')

@section('content')

    <div style="height: 65vh;">
        <div class="d-flex justify-content-between mb-3">
            <h6 class="cat-name">{{ $cat->name }}</h6>
            <div class="actions">
                <a href="{{ route('admin.cats.index') }}" class="btn btn-lg btn-primary">Back</a>
                <a href="{{ route('admin.cats.edit', $cat->id) }}" class="btn btn-lg btn-outline-warning ms-3">Edit</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                @if (count($cat->courses) > 0)
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Course name</th>
                                <th scope="col">Students count</th>
                                <th scope="col">Trainer name</th>
                                <th scope="col">Trainer speciality</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cat->courses as $course)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $course->name }}</td>
                                    <td>{{ count($course->students) }}</td>
                                    <td>{{ $course->trainer->name }}</td>
                                    <td>{{ $course->trainer->spec }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p class="btn-outline-success">{{ $cat->name }} have no courses yet</p>
                @endif

            </div>
        </div>
    </div>
@endsection
