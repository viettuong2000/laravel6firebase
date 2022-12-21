@extends('firebase.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col md 6">
                <div class="card">
                    <div class="card header">
                        <h4>Add Seller
                            <a href="{{ url('sellers') }}" class="btn btn-sm btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card body">
                        <form action="{{ url('add-seller') }}" method="POST">
                            @csrf

                            <div class="form-group mb-3">
                                <label>First Name</label>
                                <input type="text" name="first_name" class="form control">
                            </div>

                            <div class="form-group mb-3">
                                <label>Last Name</label>
                                <input type="text" name="last_name" class="form control">
                            </div>

                            <div class="form-group mb-3">
                                <label>Phone Number</label>
                                <input type="text" name="phone" class="form control">
                            </div>

                            <div class="form-group mb-3">
                                <label>Email Address</label>
                                <input type="text" name="email" class="form control">
                            </div>


                            <div class="form-group mb-3">
                                <label>Address</label>
                                <input type="text" name="address" class="form control">
                            </div>

                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
