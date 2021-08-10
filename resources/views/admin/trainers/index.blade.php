@extends('admin.layout')

@section('content')

    <div class="d-flex justify-content-between mb-3">
        <h6>Categories</h6>
        <a href="{{ route('admin.trainers.create') }}" class="btn btn-sm btn-primary">Add new</a>
    </div>
    <div class="row">
        <div class="col-12">

            <table class="table table-hover">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category name</th>
                        <th scope="col">view</th>
                        <th scope="col">Edit</th>
                        <th scope="col">delete</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($cats as $c)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $c->name }}</td>
                            <td><a href="{{ route('admin.trainers.show', $c->id) }}" class="btn btn-outline-primary">view
                                    category</a></td>
                            <td>
                                <a href="{{ route('admin.trainers.edit', $c->id) }}" class="btn btn-outline-warning">Edit</a>
                            </td>
                            <td>
                                <a href="{{ route('admin.trainers.destroy', $c->id) }}"
                                    class="btn btn-outline-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
