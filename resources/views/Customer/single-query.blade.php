<!DOCTYPE html>
<html lang="en">

<head>
 @include('frontend.includes.head')
</head>

<body>

	<div class="container-fluid p-10 m-10">
    <div class="row justify-content-center">
        <div class="col-sm-8 col-2 fixed-top" id="single_query_column">
            <div class="card text-center">
               <div class="card-header bg-white text-center">{{$single_query_details->query_background}}
               </div>
               <div class="card-body">
                 {{$single_query_details->query}}

                  @if($single_query_details->image)
                  <div class="">
                    <img class="img-responsive" src="{{url('uploads')}}/{{$single_query_details->image}}" height="400" width="70%" alt="Image not available">
                  </div>
                  @endif
               </div>
               <div class="card-footer">footer</div>
            </div>   
        </div>
        <div class="col-sm-4 offset-sm-8" id="interested_technician_column">
          <div class="card">
            <div class="card-header bg-white text-center"><h2><b>Intrested Experts</h2></div>
            <div class="card-body">
                 @foreach($all_technicians as $all_technicians)
                  <div class="card m-2">
                    <div class="card-header bg-white text-center">{{$all_technicians->field}}</div>

                    <div class="card-body text-center">
                      <div class="m-2">
                        <img style="border-radius:30px;" class="img-circle" src="{{url('uploads')}}/{{$all_technicians->profile_photo}}" height="70" width="80">
                      </div>
                      <div class="m-2">
                        <p>Name:{{$all_technicians->technician_name}}</p>
                      </div>
                      <div class="m-2">
                        <p>Experience: {{$all_technicians->technician_experience}} years</p>
                      </div>
                      <div class="m-2">
                        <p>Area Of Experience: {{$all_technicians->technician_field}}</p>
                      </div>
                    </div>
                    <div class="card-footer text-center">
                      <button class="btn btn-button btn-success btn-sm" data-toggle="modal" data-target="#way_of_commucication" id="choose_Expert">Choose Expert</button>
                    </div>
                  </div>
                 @endforeach
            </div>
          </div>
        </div>
    </div>
  </div>



<!--way of communication-->

<div class="modal fade" id="way_of_commucication" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        Way Of Communication
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card text-center">
            <div class="card-header bg-white text-center">Select Communication Mode</div>
            <div class="card-body text-center">
              <div class="row m-2">
                <div class="col-md-6"> <button type="button" class="btn btn-warning m-2">Voice Call</button></div>
                <div class="col-md-6"><button type="button" class="btn btn-info m-2">Text</button></div>
              </div>
              <div class="row m-2">
                <div class="col-md-6"><button type="button" class="btn btn-primary m-2">Video Call</button></div>
                <div class="col-md-6"><button type="button" class="btn btn-danger m-2">Home Service</button></div>
              </div>
            </div> 
            <div class="card-footer text-center">
        
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
            </div>
          </div>
        </div>
    </div> 
  </div>
</div>
   
@include('frontend.includes.footer_includes')

<script>
function myFunction(x) {
  if (x.matches) { // If media query matches
    /*document.body.style.backgroundColor = "yellow";*/
    $('#interested_technician_column').removeClass('offset-sm-8');
    $('#single_query_column').removeClass('col-2');
    $('#single_query_column').removeClass('fixed-top');
  } else {
   /*document.body.style.backgroundColor = "pink";*/
   $('#interested_technician_column').addClass('offset-sm-8');
   $('#single_query_column').addClass('col-2');
    $('#single_query_column').addClass('fixed-top');
  }
}

var x = window.matchMedia("(max-width: 576px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes
</script>

</body>

</html>