@extends('admin.layout')

@section('content')

    <div class="row justify-content-center">
        <div class="col-12">
            <table class="table table-hover">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Count</th>
                        <th scope="col">Category name</th>
                        <th scope="col">view</th>
                        <th scope="col">Edit</th>
                        <th scope="col">delete</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($cats as $c)
                        <tr>
                            <th scope="row">{{ @$loop->iteration }}</th>
                            <td>{{ $c->name }}</td>
                            <td>
                                <button type="button" class="btn btn-outline-info">view category</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-outline-warning">Warning</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-outline-danger">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
