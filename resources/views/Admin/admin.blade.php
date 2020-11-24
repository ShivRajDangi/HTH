@extends('layouts.admin-app')

@section('content')

<div class="container-fluid">
    <div class="tab-content" style="margin:20px;">
        <div class="tab-pane container-fluid active" id="admin_dashboard">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-body">
                                 Admin Area
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane container-fluid" id="admin_customer">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-body">
                                    <div class="container-fluid">
                                        <div class="table-responsive">          
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th>#id</th>
                                                    <th>#Name</th>
                                                    <th>Email</th>
                                                    <th>Mobile</th>
                                                    <th>Status</th>
                                                    <th>Address</th>
                                                
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($all_customers as $all_customers)
                                                  <tr>
                                                    <td>{{$all_customers->id}}</td>
                                                    <td>{{$all_customers->full_name}}</td>
                                                    <td> {{$all_customers->email}} </td>
                                                    <td>{{$all_customers->mobile}}</td>
                                                    @if($all_customers->status == true || $all_customers->status == '1')
                                                        <td>Active</td>
                                                    @else
                                                        <td>deactive</td>
                                                    @endif
                                                    <td>{{$all_customers->address}}</td>
                                                    <td></td>
                                                  </tr>
                                                  @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane container-fluid" id="admin_technician">
            <div class="container-fluid">
                <div class="table-responsive">          
                    <table class="table">
                        <thead>
                          <tr>
                            <th>#id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Status</th>
                            <th>Address</th>
                            <th>Profession</th>
                            <th>Action</th>

                          </tr>
                        </thead>
                        <tbody>
                            @foreach($all_technicians as $all_technicians)
                          <tr>
                            <td>{{$all_technicians->id}}</td>
                            <td>{{$all_technicians->full_name}}</td>
                            <td> {{$all_technicians->email}} </td>
                            <td>{{$all_technicians->mobile}}</td>
                            @if($all_technicians->status == true || $all_technicians->status == '1')
                                <td>Active</td>
                            @else
                                <td>deactive</td>
                            @endif
                            <td>{{$all_technicians->address}}</td>
                            <td>{{$all_technicians->field}}</td>
                            <td><button class="btn btn-button btn-primary btn-sm m-1">Activate</button>
                            <button class="btn btn-button btn-primary btn-sm m-1">Delete</button></td>
                            
                          </tr>
                          @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
                                
            </div>
        </div>
    
    </div>
</div>

@endsection