@extends('admin.layout')

@section('content')
    <div class="container h-100">
        <div class="row">
            <div class="col-12">
                <h4 class="text-capitalize text-center">Welcome to Learning Academy dashboard</h4>
            </div>
            <div class="col-12 h-100">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col">
                        <div class="card my-5">
                            <h5 class="card-header">Categories</h5>
                            <div class="card-body">
                                <h5 class="card-title">We have {{ count($cats) }} Categories</h5>
                                <ol class="list-group list-group-numbered">
                                    @foreach ($cats as $cat)
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div class="ms-2 me-auto">
                                                <div class="fw-bold">{{ $cat->name }}</div>
                                            </div>
                                            <span class="badge bg-info rounded-pill">{{ count($cat->courses) }}
                                                courses</span>
                                        </li>
                                    @endforeach
                                </ol>
                                <a href="{{ route('admin.cats.index') }}" class="btn btn-outline-primary mt-4">Go
                                    categories</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card my-5">
                            <h5 class="card-header">Trainers</h5>
                            <div class="card-body">
                                <h5 class="card-title">We have {{ count($trainers) }} trainers</h5>
                                <ol class="list-group list-group-numbered">
                                    @foreach ($trainers as $t)
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div class="ms-2 me-auto">
                                                <div class="fw-bold">{{ $t->name }}</div>
                                            </div>
                                            <span class="badge bg-info rounded-pill">{{ count($t->courses) }}
                                                courses</span>
                                        </li>
                                    @endforeach
                                </ol>
                                <a href="{{ route('admin.trainers.index') }}" class="btn btn-outline-primary mt-4">Go
                                    Trainers</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card my-5">
                            <h5 class="card-header">Students</h5>
                            <div class="card-body">
                                <h5 class="card-title">We have {{ count($students) }} students</h5>
                                <div class="list-group">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold"></div>
                                    </div>

                                </div>
                                <a href="{{ route('admin.students.index') }}" class="btn btn-outline-primary mt-4">Go
                                    students</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
