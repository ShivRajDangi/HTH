@if(\Illuminate\Support\Facades\Auth::guard('admin')->check())
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>HTH Admin Dashboard</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container-fluid">

    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/admin') }}">
             <!--    {{ config('app.name', 'Laravel') }} -->
             Admin
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                 
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#admin_dashboard" id="admin_tab">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#admin_customer" id="customer_tab">Customers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#admin_technician" id="technician_tab">Technicians</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#admin_queries" id="queries_tab">Queries</a>
                    </li>
                </ul>
                
                <ul class="navbar-nav ml-auto">
               
                    @if(\Illuminate\Support\Facades\Auth::guard('admin')->check())
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->email }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('admin.logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

<div class="container-fluid">
    <div class="tab-content" style="margin:20px;">
        <div class="tab-pane container-fluid active" id="admin_dashboard">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                 Admin Area
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane container-fluid" id="admin_customer">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
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

        <div class="tab-pane container-fluid" id="admin_technician">
            <div class="container-fluid">
                @if(session()->has('message'))
                    <div class=" m-1 alert alert-success alert-dismissible text-center">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ session()->get('message') }}
                    </div>
                    <script>
                        window.addEventListener("load", function(){
                            $("#technician_tab").addClass('active');
                            $("#admin_technician").addClass('active');
                            $("#admin_tab").removeClass('active');
                            $("#admin_dashboard").removeClass('active');
                        });   
                    </script>
                    @else
                        <script>
                        window.addEventListener("load", function(){
                            $("#admin_tab").addClass('active');
                            $("#admin_dashboard").addClass('active');
                        });
                        
                    </script>
                @endif
                <div class="table-responsive">          
                    <table class="table">
                        <thead class="text-center">
                          <tr>
                            <th>#id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Status</th>
                            <th>Address</th>
                            <th>Profession</th>
                            <th>Photo</th>
                            <th>Action</th>

                          </tr>
                        </thead>
                        <tbody class="text-center">
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
                            <td><img src="{{url('uploads')}}/{{$all_technicians->profile_photo}}" class="" width="60" height="60"/></td>

                            @if($all_technicians->status == true || $all_technicians->status == '1')
                                <td rowspan="1">
                                    <form method="POST" action="{{url('admin/technician-update')}}/{{$all_technicians->status}}">
                                    @csrf
                                        <input type="hidden" name="id" value="{{$all_technicians->id}}"/>
                                        <button type="submit" class="btn btn-button btn-primary btn-sm m-1">Deactivate</button>
                                    </form>
                            @else
                                <td rowspan="1">
                                    <form method="POST" action="{{url('admin/technician-update')}}/{{$all_technicians->status}}">
                                    @csrf
                                        <input type="hidden" name="id" value="{{$all_technicians->id}}"/>
                                        <button type="submit" class="btn btn-button btn-primary btn-sm m-1">Activate</button>
                                    </form>
                            @endif
                            <button class="btn btn-button btn-primary btn-sm m-1">Delete</button></td>
                            
                          </tr>
                          @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
                                
            </div>
            <div class="tab-pane container-fluid" id="admin_queries">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                                                    <div class="container-fluid">
                                    <div class="table-responsive">          
                                        <table class="table">
                                            <thead>
                                              <tr>
                                                <th>#id</th>
                                                <th>Query</th>
                                                <th>Field</th>
                                                <th>Status</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            
                                              </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($all_queries as $all_queries)
                                              <tr>
                                                <td>{{$all_queries->id}}</td>
                                                <td>{{$all_queries->query}}</td>
                                                <td>{{$all_queries->query_background}}</td>
                                                <td>{{$all_queries->status}}</td>
                                                <td><img src="{{url('uploads')}}/{{$all_queries->image}}" height="50" width="50"/></td>
                                                <td rowpan="">
                                                    <form method="POST" action="{{url('admin/delete-query')}}">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$all_queries->id}}"/>
                                                    <button type="submit" class="btn btn-button btn-primary btn-sm m-1">Delete</button>
                                                </form>
                                                </td>
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
         
    </div>
</div>
</div>

</body>
</html>
@endif
