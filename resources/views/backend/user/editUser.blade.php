@extends('admin.master')
@section('admin')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit User</h4>
                    
                </div>
                
                <form class="form-horizontal" method = "POST" action="{{ route('user.update', $editData->id)}}">
                    @csrf
                    <div class="card-body">
                        <h4 class="card-title">Personal User Info</h4>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" placeholder="Name Here" value="{{ $editData->name }}">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="email" placeholder="Email Here" value="{{ $editData->email }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Phone Number</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="mobile" placeholder="Mobile No Here" value="{{ $editData->mobile }}">
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <div class="form-group mb-0 text-right">
                            <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection