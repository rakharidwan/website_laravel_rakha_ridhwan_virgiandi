@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h2>Users</h2>
                    <div class="d-gri d-md-flex justify-content-md-end mb-3">
                        <a href="{{ url('/users/create') }}" class="btn btn-primary">Create</a>
                    </div>
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        @forelse ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="{{ url('/users/edit'.$user->id) }}" class="btn btn-warning">Edit</a>
                                </td>
                            </tr>
                        @empty

                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
