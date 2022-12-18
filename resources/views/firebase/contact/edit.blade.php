@extends('firebase.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col md 12">
                <div class="card">
                    <div class="card header">
                        <h4>Edit Contact
                            <a href="{{ url('contact') }}" class="btn btn-sm btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card body">
                        <form action="{{ url('update-contact/' . $id) }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="fname">First Name</label>
                                <input type="text" name="fname" id="fname" class="form-control"
                                    value="{{ $user['fname'] }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="lname">Last Name</label>
                                <input type="text" name="lname" id="lname" class="form-control"
                                    value="{{ $user['lname'] }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control"
                                    value="{{ $user['email'] }}">
                            </div>
                            <div class="form-group
                            mb-3">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control"
                                    value="{{ $user['phone'] }}">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-sm btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
