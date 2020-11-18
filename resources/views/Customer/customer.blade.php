@extends('layouts.app')

@section('content')
 <div class="tab-content" style="margin:20px;">
    <div class="tab-pane container active" id="customer_feed">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-white">Todays Feed</div>

                        <div class="card-body">
                             Hi there, regular customer
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

                        <div class="card-body">
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="query_box" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
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
                                    <form method="POST" action="{{ route('technician.query.submit') }}">
                                    @csrf
                                        <div class="form-group text-left">
                                            <label for="customer_">Your Query</label>
                                            <textarea rows="10" cols="25" class="form-control" id="customer_query" aria-describedby="emailHelp" placeholder="Ask Your Query" name="query"></textarea>
                                        </div>    
                                    
                                        <div class="card-footer text-center">
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
