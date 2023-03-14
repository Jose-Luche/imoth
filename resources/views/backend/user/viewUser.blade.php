@extends('admin.master')
@section('admin')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                    <h5 style="float: left; font-weight:bold;">Users Dashboard</h5>
                    <a href="{{route('user.add')}}" style="float: right;" class="btn btn-rounded btn-success mb-5">Add User</a>
                </h4>
                <h6 class="card-subtitle"></code>. 
                    
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th width="5%">SL</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Code</th>
                                <th width="15%">Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            
                            
                            @foreach ($data  as $key => $user)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->mobile }}</td>
                                    <td>{{ $user->code }}</td>
                                    <td>
                                        <a href="{{ route('user.edit', $user->id)}}" class="btn btn-info" ><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="" class="btn btn-danger" id="delete"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                
                                </tr>     
                            @endforeach
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th width="5%">SL</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Code</th>
                                <th width="15%">Action</th>
                                
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection