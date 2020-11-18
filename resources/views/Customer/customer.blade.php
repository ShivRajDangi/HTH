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
                <h5 class="modal-title text-black">Get Solved Your Queries In A Minutes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card text-center">
                    <div class="card-header bg-warning"> Ask Your Queries To A Expert </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('query.submit') }}">
                                @csrf
                                <div class="form-group text-left">
                                    <label for="customer_query">Your Query</label>
                                    <textarea rows="5" cols="10" class="form-control" id="customer_query" aria-describedby="emailHelp" placeholder="Ask Your Query" name="query"></textarea>
                                </div>
                                <!-- <div class="form-group text-left">
                                    <label for="technician_password">Password</label>
                                    <input type="password" class="form-control" id="technician_password" placeholder="Password" name="password">
                                </div> -->
                                 <button type="submit" class="btn btn-primary">
                                 Submit Query
                             </button>
                            </form> 
                        </div>
                    <div class="card-footer text-muted p-3 bg-warning">
                        <div class="text-left">
                            <button type="button" class="btn btn-secondary btn-xs" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
           </div>
        </div>
     </div>
</div>
@endsection
