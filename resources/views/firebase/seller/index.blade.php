@extends('firebase.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col md 12">

                {{-- if have status --}}
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="card">
                    <div class="card header">
                        <h4>Seller List
                            <a href="{{ url('add-seller') }}" class="btn btn-sm btn-primary float-end">Add Seller</a>
                        </h4>
                    </div>
                    <div class="card body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                                @forelse ($sellers as $key => $item)
                                    <tr>
                                        <td>{{ $key }}</td>
                                        <td>{{ $item['fname'] }}</td>
                                        <td>{{ $item['lname'] }}</td>
                                        <td>{{ $item['email'] }}</td>
                                        <td>{{ $item['phone'] }}</td>
                                        <td>{{ $item['address'] }}</td>
                                        <td><a href="{{ url('edit-seller/' . $key) }}"
                                                class="btn btn-sm btn-primary">Edit</a>
                                        </td>
                                        <td><a href="{{ url('delete-seller/' . $key) }}"
                                                class="btn btn-sm btn-danger">Delete</a>
                                    </tr>

                                @empty
                                    <tr>
                                        <td colspan="7">No record found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
