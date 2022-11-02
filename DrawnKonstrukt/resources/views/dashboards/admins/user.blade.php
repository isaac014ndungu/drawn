@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Settings')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Registered users</h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->role }}</td>
                              <td><a href="/edituser/{{ $item->id }}" class="btn btn-outline-primary">Update</a></td>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="float-end">
                        {{ $user->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection











