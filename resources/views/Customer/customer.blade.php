@extends('layouts.app')

@section('content')
 <div class="tab-content" style="margin:20px;">
    <div class="tab-pane container active" id="customer_feed">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <!-- <div class="card-header bg-white">Todays Feed</div> -->

                        <div class="card-body">
                             @foreach($all_query as $all_query)
                              <div class="card m-5">
                                <div class="card-header bg-white text-center">{{$all_query->query_background}}</div>

                                <div class="card-body text-center">
                                  <a href="{{url('customer/single-query')}}/{{$all_query->id}}">
                                     {{$all_query->query}}
                                   </a>
                                   @if($all_query->image)
                                   <div class="container m-2">
                                      <img class="img-responsive" src="{{url('uploads')}}/{{$all_query->image}}" height="50%" width="70%">
                                      <!-- <img class="img-responsive" src="" height="200" width="450"> -->
                                   </div>
                                   @endif
                                </div>
                              </div>
                             @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tab-pane container" id="customer_share">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                      <div class="card-body">
                          <form method="POST" action="{{ route('customer.profile.submit') }}" enctype="multipart/form-data">
                            @csrf
                              <div class="form-group text-left">
                                <label for="customer_name">Name</label>
                                <input type="text" class="form-control" id="customer_name" aria-describedby="emailHelp" placeholder="Enter Name" name="customer_name" value="{{$customer_details->full_name}}"/>
                              </div>   
                              <div class="form-group text-left">
                                <label for="customer_bio">Bio</label>
                                <textarea class="form-control" cols="5" rows="10" id="customer_bio" aria-describedby="emailHelp" placeholder="Enter bio" name="customer_bio" value="">{{$customer_details->bio}}</textarea>
                              </div>
                              <div class="form-group text-left">
                                <label for="customer_photo">profile-Photo</label>
                                <input type="file" class="form-control" id="customer_photo" placeholder="Enter photo" name="customer_photo">
                              </div>
                              <div class="form-group text-left">
                                <label for="customer_address">Address</label>
                                <input type="text" class="form-control" id="customer_address" aria-describedby="emailHelp" placeholder="Enter Address" name="customer_address" value="{{$customer_details->address}}">
                              </div>
                              <div class="form-group text-left">
                                <label for="customer_mobile">Mobile</label>
                                <input type="text" class="form-control" id="customer_mobile" aria-describedby="emailHelp" placeholder="Enter Mobile" name="customer_mobile" value="{{$customer_details->mobile}}">
                              </div>
                               <div class="card-footer text-muted text-center">
                                    <button type="submit" class="btn btn-success ml-5" >
                              Update Profle</button>
                                </div>
                            </form> 
                      </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if(count($all_query->toArray()) == 0)

<div class="modal fade" id="query_box" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
      <ul class="nav nav-tabs">
      <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#customer_query_tab">Add Query</a>
      </li>
      </ul>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>
    <div class="modal-body">
    <div class="card text-center">
    <div class="card-body">
    <div class="tab-content" style="margin:20px;">
    <div class="tab-pane container active" id="customer_query_tab">
    <form method="POST" action="{{ route('customer.query.submit') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group text-left">
    <label for="customer_"><b>Your Query</b></label>
    <textarea rows="10" cols="25" class="form-control" id="customer_query" aria-describedby="emailHelp" placeholder="Ask Your Query" name="myquery"></textarea>
    </div>  
    <div class="form-group text-left">
    <label for="technician_experience"><b>Select Field Related to Query</b></label>
    <select class="form-control" name="field">
    <option value="xzxz">Choose</option>
    <option value="Mobile repair specialist">Mobile repair specialist</option>
    <option value="Laptop(Hardware) specialist">Laptop(Hardware) specialist</option>
    <option value="Laptop(software) specialist">Laptop(software) specialist</option>
    <option value="Microwave ovens specialist">Microwave ovens specialist</option>
    <option value="Ac specialis">Ac specialis</option>
    <option value="Refridgerator specialist">Refridgerator specialist</option>
    <option value="Gas specialist"> Gas specialist</option>
    <option value="Chimneys specialist">Chimneys specialist</option>
    <option value="Plumber">Plumber</option>
    <option value="Electrician">Electrician</option>
    <option value="carpenter">carpenter</option>
    <option value="Sofa Specialist">Sofa Specialist</option>
    <option value="LED Specialist">LED Specialist</option>
    <option value="Home Theater Specialist">Home Theater Specialist</option>
    </select>
    </div>  
    <div class="form-group text-left">
    <label for="customer_image"><b>Image</b></label>
    <input type="file" class="form-control" id="customer_image" aria-describedby="emailHelp" placeholder="Ask Your Query" name="image">
    </div>
    <div class="card-footer text-center bg-success">
    <!-- <div class="text-left">
    <button type="button" class="btn btn-secondary btn-xs" data-dismiss="modal">Cancel</button>
    </div> -->
    <div class="text-right">
    <button type="submit" class="btn btn-primary" style="">
    Add Query
    </button>
    </div>
    </div>
    </form>
    </div>
    <!-- <div class="tab-pane container" id="customer_share_tab">

    </div> -->
    </div> 
    </div>
    </div>
    </div>
    </div>
  </div>
</div>
@endif

<div class="modal fade" id="box" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
      <ul class="nav nav-tabs">
      <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#customer_query_tab">Add Query</a>
      </li>
      </ul>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>
    <div class="modal-body">
    <div class="card text-center">
    <div class="card-body">
    <div class="tab-content" style="margin:20px;">
    <div class="tab-pane container active" id="customer_query_tab">
    <form method="POST" action="{{ route('customer.query.submit') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group text-left">
    <label for="customer_"><b>Your Query</b></label>
    <textarea rows="10" cols="25" class="form-control" id="customer_query" aria-describedby="emailHelp" placeholder="Ask Your Query" name="myquery"></textarea>
    </div>  
    <div class="form-group text-left">
    <label for="technician_experience"><b>Select Field Related to Query</b></label>
    <select class="form-control" name="field">
    <option value="xzxz">Choose</option>
    <option value="Mobile repair specialist">Mobile repair specialist</option>
    <option value="Laptop(Hardware) specialist">Laptop(Hardware) specialist</option>
    <option value="Laptop(software) specialist">Laptop(software) specialist</option>
    <option value="Microwave ovens specialist">Microwave ovens specialist</option>
    <option value="Ac specialis">Ac specialis</option>
    <option value="Refridgerator specialist">Refridgerator specialist</option>
    <option value="Gas specialist"> Gas specialist</option>
    <option value="Chimneys specialist">Chimneys specialist</option>
    <option value="Plumber">Plumber</option>
    <option value="Electrician">Electrician</option>
    <option value="carpenter">carpenter</option>
    <option value="Sofa Specialist">Sofa Specialist</option>
    <option value="LED Specialist">LED Specialist</option>
    <option value="Home Theater Specialist">Home Theater Specialist</option>
    </select>
    </div>  
    <div class="form-group text-left">
    <label for="customer_image"><b>Image</b></label>
    <input type="file" class="form-control" id="customer_image" aria-describedby="emailHelp" placeholder="Ask Your Query" name="image">
    </div>
    <div class="card-footer text-center bg-success">
    <!-- <div class="text-left">
    <button type="button" class="btn btn-secondary btn-xs" data-dismiss="modal">Cancel</button>
    </div> -->
    <div class="text-right">
    <button type="submit" class="btn btn-primary" style="">
    Add Query
    </button>
    </div>
    </div>
    </form>
    </div>
    <!-- <div class="tab-pane container" id="customer_share_tab">

    </div> -->
    </div> 
    </div>
    </div>
    </div>
    </div>
  </div>
</div>

@endsection
