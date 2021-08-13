@extends('admin.layout')

@section('content')
    <div class="vh-100">
        <div class="d-flex justify-content-between mb-3">
            <h6>Trainers</h6>
            <a href="{{ route('admin.trainers.create') }}" class="btn btn-sm btn-primary">Add new</a>
        </div>
        <div class="row">
            <div class="col-12">

                <table class="table table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Trainer image</th>
                            <th scope="col">Trainer name</th>
                            <th scope="col">view</th>
                            <th scope="col">Edit</th>
                            <th scope="col">delete</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trainers as $trainer)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td scope="row">
                                    <img src="{{ asset('uploads/trainers/'. $trainer->img) }}"  alt="">
                                </td>
                                <td scope="row">{{ $trainer->name }}</td>
                                <td scope="row"><a href="{{ route('admin.trainers.show', $trainer->id) }}"
                                        class="btn btn-outline-primary">view
                                        Trainer</a></td>
                                <td scope="row">
                                    <a href="{{ route('admin.trainers.edit', $trainer->id) }}"
                                        class="btn btn-outline-warning">Edit</a>
                                </td>
                                <td scope="row">
                                    <a href="{{ route('admin.trainers.destroy', $trainer->id) }}"
                                        class="btn btn-outline-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
