@extends('firebase.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col md 12">
                <div class="card">
                    <div class="card header">
                        <h4>Edit Seller
                            <a href="{{ url('sellers') }}" class="btn btn-sm btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card body">
                        <form action="{{ url('update-seller/' . $id) }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="fname">First Name</label>
                                <input type="text" name="fname" id="fname" class="form-control"
                                    value="{{ $seller['fname'] }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="lname">Last Name</label>
                                <input type="text" name="lname" id="lname" class="form-control"
                                    value="{{ $seller['lname'] }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control"
                                    value="{{ $seller['email'] }}">
                            </div>
                            <div class="form-group
                            mb-3">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control"
                                    value="{{ $seller['phone'] }}">
                            </div>
                            <div class="form-group
                            mb-3">
                                <label for="phone">Address</label>
                                <input type="text" name="address" id="address" class="form-control"
                                    value="{{ $seller['address'] }}">
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
