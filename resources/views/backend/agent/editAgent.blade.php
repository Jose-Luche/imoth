@extends('admin.master')
@section('admin')
    <div class="card card-body">
        <h3 class="mb-0">Sample Basic Forms</h3>
        <p class="text-muted mb-4 font-13"> Edit Agents </p>
        <div class="row">
            <div class="col-sm-6 col-xs-6">
                <form method="POST" action="{{route('ag.update', $editData->id)}}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" value="{{$editData->name}}" >
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" value="{{$editData->email}}"  >
                    </div>
                    <div class="form-group">
                        <label for="id_no">ID No</label>
                        <input type="text" class="form-control" name="id_no" value="{{$editData->id_no}}"  >
                    </div>
                    <div class="form-group">
                        <label for="company_name">Company Name</label>
                        <input type="text" class="form-control" name="company_name" value="{{$editData->company_name}}" >
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" value="{{$editData->address}}"  >
                    </div>

                    <div class="form-group">
                        <label for="kra">KRA</label>
                        <input type="text" class="form-control" name ="kra" value="{{$editData->kra}}"  >
                    </div>

                    <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input type="text" class="form-control" name="mobile" value="{{$editData->mobile}}" >
                    </div>

                    <div class="form-group">
                        <label for="comm_rate">Comm Rate</label>
                        <input type="text" class="form-control" name="comm_rate" value="{{$editData->comm_rate}}"  >
                    </div>
                    
                    <button type="submit" class="btn btn-success waves-effect waves-light mr-2">Update</button>
                    
                </form>
            </div>
        </div>
    </div>
@endsection