@extends('admin.layout')

@section('content')
    <div class="vh-100">
        <div class="d-flex justify-content-between mb-3">
            <h6 class="cat-name">{{ $trainer->name }}</h6>
            <div class="actions">
                <a href="{{ route('admin.trainers.index') }}" class="btn btn-lg btn-primary me-3">Back</a>
                <a href="{{ route('admin.trainers.edit', $trainer->id) }}" class="btn btn-lg btn-outline-warning ms-3">Edit</a>
            </div>
        </div>
        <div class="d-flex justify-content-start mb-3">
            <img src="{{ asset('uploads/trainers/'.$trainer->img) }}" class="img-fluid"
                alt="{{ $trainer->name }}">
        </div>
        <div class="row">
            <div class="col-12">

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Trainer name</th>
                            <th scope="col">Courses</th>
                            <th scope="col">Trainer speciality</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Specialty</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $trainer->name }}</td>
                            @if ($trainer->courses !== null)
                                <td>
                                    {{ count($trainer->courses) }}
                                </td>
                            @else
                                <td>Have no courses yet</td>
                            @endif
                            <td>{{ $trainer->spec }}</td>
                            @if ($trainer->phone !== null)
                                <td>{{ $trainer->phone }}</td>
                            @else
                                <td>No phone number</td>
                            @endif
                            <td>{{ $trainer->spec }}</td>
                        </tr>
                    </tbody>
                </table>
                @if (count($trainer->courses) > 0)
                    <div class="py-5">
                        <table class="table table-hover py-lg-5">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Course name</th>
                                    <th scope="col">Students count</th>
                                    <th scope="col">Go to course</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($trainer->courses as $c)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $c->name }}</td>
                                        <td>{{ count($c->students) }}</td>
                                        <td>
                                            <a href="#" class="btn btn-link">View</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                @else
                    <p class="btn-outline-success">{{ $trainer->name }} have no courses yet</p>
                @endif

            </div>
        </div>
    </div>
@endsection
