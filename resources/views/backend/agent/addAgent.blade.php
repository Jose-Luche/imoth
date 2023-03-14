@extends('admin.master')
@section('admin')
    <div class="card card-body">
        <h3 class="mb-0">Sample Basic Forms</h3>
        <p class="text-muted mb-4 font-13"> Add Agents </p>
        <div class="row">
            <div class="col-sm-6 col-xs-6">
                <form method="POST" action="{{route('ag.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name"  placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email"  placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="id_no">ID No</label>
                        <input type="text" class="form-control" name="id_no"  placeholder="Enter ID">
                    </div>
                    <div class="form-group">
                        <label for="company_name">Company Name</label>
                        <input type="text" class="form-control" name="company_name" placeholder="Enter Company Name">
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address"  placeholder="Enter address">
                    </div>

                    <div class="form-group">
                        <label for="kra">KRA</label>
                        <input type="text" class="form-control" name ="kra"  placeholder="Enter KRA PIN">
                    </div>

                    <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input type="text" class="form-control" name="mobile"  placeholder="Enter Mobile Number">
                    </div>

                    <div class="form-group">
                        <label for="comm_rate">Agent Commission</label>
                        <input type="text" class="form-control" name="comm_rate"  placeholder="Enter Agent Commission">
                    </div>
                    
                    <button type="submit" class="btn btn-success waves-effect waves-light mr-2">Submit</button>
                    
                </form>
            </div>
        </div>
    </div>
@endsection