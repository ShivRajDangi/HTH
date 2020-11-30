@extends('layouts.technician-app')

@section('content')
<div class="tab-content" style="margin:20px;">
    <div class="tab-pane container active" id="technician_all">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                             @foreach($all_queries as $all_queries)
                            <div class="card m-5">
                                <div class="card-header bg-white text-center">{{$all_queries->query_background}}</div>

                                <div class="card-body text-center">
                                  <div class="container m-2">
                                  <!-- <a href="{{url('customer/single-query')}}/{{$all_queries->id}}"> -->
                                     {{$all_queries->query}}
                                  <!--  </a> -->
                                </div>
                                  @if($all_queries->image)
                                   <div class="container m-2">
                                      <img class="img-responsive" src="{{url('uploads')}}/{{$all_queries->image}}" height="50%" width="70%">
                                      
                                   </div>
                                   @endif
                                   <a href="{{url('technician/interested-query')}}/{{$all_queries->id}}">  
                                        <button class="btn btn-button btn-danger btn-sm">Interested</button>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="tab-pane container" id="technician_profile">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-center">Update Profile</div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('technician.profile.submit') }}" enctype="multipart/form-data">
                            @csrf
                              <div class="form-group text-left">
                                <label for="technician_name">Name</label>
                                <input type="text" class="form-control" id="customer_name" aria-describedby="emailHelp" placeholder="Enter Name" name="technician_name" value="{{$technician_details->full_name}}"/>
                              </div>   
                              <div class="form-group text-left">
                                <label for="technician_bio">Bio</label>
                                <textarea class="form-control" cols="5" rows="10" id="technician_bio" aria-describedby="emailHelp" placeholder="Enter bio" name="technician_bio" >{{$technician_details->bio}}</textarea>
                              </div>
                              <div class="form-group text-left">
                                <label for="technician_photo">profile-Photo</label>
                                <input type="file" class="form-control" id="technician_photo" placeholder="Enter photo" name="technician_photo">
                              </div>
                              <div class="form-group text-left">
                                <label for="customer_address">Address</label>
                                <input type="text" class="form-control" id="customer_address" aria-describedby="emailHelp" placeholder="Enter Address" name="technician_address" value="{{$technician_details->address}}">
                              </div>
                              <div class="form-group text-left">
                                <label for="technician_mobile">Mobile</label>
                                <input type="text" class="form-control" id="technician_mobile" aria-describedby="emailHelp" placeholder="Enter Mobile" name="technician_mobile" value="{{$technician_details->mobile}}">
                              </div>
                              <div class="form-group text-left">
                                <label for="technician_field">Profession</label>
                                <input type="text" class="form-control" id="technician_field" aria-describedby="emailHelp" placeholder="Enter Mobile" name="technician_field" value="{{$technician_details->field}}">
                              </div>
                              <div class="form-group text-left">
                                <label for="technician_experience">Year Of Experience</label>
                                <input type="text" class="form-control" id="technician_experience" aria-describedby="emailHelp" placeholder="Enter Year of Experience " name="technician_experience" value="{{$technician_details->experience}}">
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
@endsection