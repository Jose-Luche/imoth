@extends('admin.master')
@section('admin')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                    <h5 style="float: left; font-weight:bold;">Agents' Dashboard</h5>
                    <a href="{{ route('ag.add')}}" style="float: right;" class="btn btn-rounded btn-success mb-5">Add New Agent</a>
                </h4>
                <h6 class="card-subtitle"></code>. 
                    
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th width="5%">SL</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>ID No</th>
                                <th>Code</th>
                                <th>Company Name</th>
                                <th>KRA</th>
                                <th>Rate</th>
                                <th width="15%">Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            
                            
                            @foreach ($agents  as $key => $ag)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $ag->name }}</td>
                                    <td>{{ $ag->email }}</td>
                                    <td>{{ $ag->mobile }}</td>
                                    <td>
                                        @if ($ag->id_no)
                                            {{ $ag->id_no }} 
                                        @else 
                                            -- 
                                        @endif
                                    </td>

                                    <td>
                                        @if ($ag->code)
                                            {{ $ag->code }} 
                                        @else 
                                            -- 
                                        @endif
                                    </td>

                                    <td>
                                        @if ($ag->company_name)
                                            {{ $ag->company_name }} 
                                        @else 
                                            -- 
                                        @endif
                                    </td>

                                    <td>
                                        @if ($ag->kra)
                                            {{ $ag->kra }} 
                                        @else 
                                            -- 
                                        @endif
                                    </td>

                                    <td>
                                        @if ($ag->comm_rate)
                                            {{ $ag->comm_rate }} 
                                        @else 
                                            -- 
                                        @endif
                                    </td>
                                    
                                    <td>
                                        <a href="{{route('ag.edit', $ag->id)}}" class="btn btn-info" ><i class="fa-solid fa-pen-to-square"></i></a>
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
                                <th>Mobile</th>
                                <th>ID No</th>
                                <th>Code</th>
                                <th>Company Name</th>
                                <th>KRA</th>
                                <th>Rate</th>
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