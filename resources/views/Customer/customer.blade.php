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

                                <div class="card-body">
                                     {{$all_query->query}}
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
                        <div class="card-header bg-white"></div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="query_box" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <!-- <h5 class="modal-title text-black">Get Solved Your Queries In A Minutes</h5> -->
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#customer_query_tab">Add Query</a>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#customer_share_tab">Share</a>
                  </li> -->
                </ul>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card text-center">
                    <!-- <div class="card-header bg-warning"> Ask Your Queries To A Expert </div> -->
                        <div class="card-body">
                            <div class="tab-content" style="margin:20px;">
                                <div class="tab-pane container active" id="customer_query_tab">
                                    <form method="POST" action="{{ route('customer.query.submit') }}">
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
