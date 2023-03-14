@extends('admin.master')
@section('admin')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                    <h5 style="float: left; font-weight:bold;">Clients' Dashboard</h5>
                    <a href="{{ route('client.add')}}" style="float: right;" class="btn btn-rounded btn-success mb-5">Add New Client</a>
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
                                <th>ID No</th>
                                <th>KRA</th>
                                <th width="15%">Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            
                            
                            @foreach ($clients  as $key => $client)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ $client->email }}</td>
                                    <td>{{ $client->mobile }}</td>
                                    <td>
                                        @if ($client->id_no)
                                            {{ $client->id_no }} 
                                        @else 
                                            -- 
                                        @endif
                                    </td>

                                    <td>
                                        @if ($client->kra)
                                            {{ $client->kra }} 
                                        @else 
                                            -- 
                                        @endif
                                    </td>
                                    
                                    <td>
                                        <a href="{{ route('client.edit', $client->id)}}" class="btn btn-info" ><i class="fa-solid fa-pen-to-square"></i></a>
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
                                <th>ID No</th>
                                <th>KRA</th>
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