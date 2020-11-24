<!DOCTYPE html>
<html lang="en">

<head>
 @include('frontend.includes.head')
</head>

<body>
<!------------------------
		main container for login-sign
------------------------------------->
<div class="container P-2">
	<div class="card text-center p-5" style="margin-top:20%">
		<div class="card-header"><h4><b>Signup To Become An Expert </b></h4> </div>
		<div class="card-body ">
			<p>Already have an account ? <a href="" data-toggle="modal" data-target="#technician">Log In</a></p>
			<!-- <a href="{{url('auth\google')}}">
				<button class="btn btn-button bg-warning  btn-xl" style="border-radius:20px;"><i class="bx bxl-google bg-white"></i><span class="m-2">|</span>Continue With Google</button>
			</a> -->
			<!-- <a href="{{url('auth\google')}}">
				<div class="btn-group btn-lg" role="group" style="padding:0px;">
				  <button type="button" class="btn btn-button btn-outline-primary" style="background-color:white;"><img width="30" src="{{url('assets/img/google-logo.png')}}"/></button>
				  <button type="button" class="btn btn-primary">Continue With Google</button>
				</div>
			</a> -->
			<form method="POST" action="{{ route('technician.register.submit') }}">
				@csrf
				<div class="row">
					<div class="col-md-6">
						<div class="form-group text-left">
	                    <label for="technician_name">Name</label>
	                    <input type="text" class="form-control" id="technician_name" aria-describedby="emailHelp" placeholder="Enter Name" name="technician_name">
	                  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group text-left">
	                    <label for="technician_mobile">Mobile</label>
	                    <input type="text" class="form-control" id="technician_mobile" aria-describedby="emailHelp" placeholder="Enter Mobile" name="technician_mobile">
	                  </div>
					</div>
				</div>
                  
                 <div class="row">
                  	<div class="col-md-6">
                  		<div class="form-group text-left">
                    		<label for="technician_email">Email address</label>
                    		<input type="email" class="form-control" id="technician_email" aria-describedby="emailHelp" placeholder="Enter email" name="technician_email">
                  		</div>
                  	</div>
                  	<div class="col-md-6">
                  		<div class="form-group text-left">
                    		<label for="technician_password">Password</label>
                    		<input type="password" class="form-control" id="technician_password" placeholder="Password" name="technician_password">
                  		</div>
                  	</div>
              	</div>

              	<div class="row">
                  	<div class="col-md-6">
                  		<div class="form-group text-left">
                    		<label for="technician_address">Address</label>
                    		<input type="text" class="form-control" id="technician_address" aria-describedby="emailHelp" placeholder="Enter Address" name="technician_address" required>
                  		</div>
                  	</div>
                  	<div class="col-md-6">
                  		<div class="form-group text-left">
                    		<label for="technician_question">Do you have full time job or part time job in your field</label>
                    		<div class="form-check">
                      			<label class="form-check-label">
                      			<input type="radio" class="form-check-input" name="technician_question">Yes
                      			</label>
                    		</div>
                    		<div class="form-check">
                      			<label class="form-check-label">
                      			<input type="radio" class="form-check-input" name="technician_question">No
                      			</label>
                    		</div>
                  		</div>
                  	</div>
              	</div>
                 
                 <div class="form-group text-left">
                    <label for="technician_experience">Select Area in which you are exprienced</label>
                    <select class="form-control" name="technician_experience" 
                            id="technician_experience">
                      <option value="choose">Choose</option>
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
                      <option value="Home Theater Specialist"></option>   
                    </select>
                  </div>
                <div class="row">
                  	<div class="col-md-12">
                  		<div class="form-check text-left mt-5">
                    		<input type="checkbox" class="form-check-input" id="exampleCheck1">
                    		<label class="form-check-label" for="exampleCheck1">keep me sign in</label>
                  		</div>
                  	</div>
                </div>
                <button type="submit" class="btn btn-success ml-5 " >SIGNUP</button>
                </form>
		</div>
	</div>
</div>

<!--technician login modal -->
<div class="modal fade" id="technician" tabindex="-1" role="dialog"  aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
		    <div class="modal-header">
		        <h5 class="modal-title text-black">Get a Bussiness</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		    </div>
	        <div class="modal-body">
		        <div class="card text-center">
		            <div class="card-header bg-warning"> Technician Login </div>
			            <div class="card-body">
				            <form method="POST" action="{{ route('technician.login.submit') }}">
				            	@csrf
					            <div class="form-group text-left">
						            <label for="technician_email">Email address</label>
						            <input type="email" class="form-control" id="technician_email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
					            </div>
					            <div class="form-group text-left">
						            <label for="technician_password">Password</label>
						            <input type="password" class="form-control" id="technician_password" placeholder="Password" name="password">
					            </div>
					            <div class="form-check text-left">
						            <input type="checkbox" class="form-check-input" id="exampleCheck1">
						            <label class="form-check-label" for="exampleCheck1">Check me out</label>
					            </div>
				            	<!-- <button type="submit" class="btn btn-success" style="margin-top: -50px;"> Login </button> -->
				            	 <button type="submit" class="btn btn-primary">
                                 {{ __('Login') }}
                             </button>
				            </form> 

				            <!-- <div class="text-center mt-2">
		                  		<a href=""><button type="button" class="btn btn-primary btn-sm"><i class="bx bxl-google mr-2"></i><span>|</span><span class="m-3">Google Login </span></button></a>  
		                	</div> -->
			            </div>
		            <div class="card-footer text-muted p-3 bg-warning">
			            <div class="text-left">
			            	<button type="button" class="btn btn-secondary btn-xs" data-dismiss="modal">Cancel</button>
			            </div>
			            <div class="text-right" style="margin-top:-30px;">
			            	<span class="text-danger">Forgot <a style="color:white;" href="#">password?</a></span>
			            </div>
		            </div>
		        </div>
	       </div>
	    </div>
	 </div>
</div>
<!--end of technician login modal -->
@include('frontend.includes.footer_includes')

</body>

</html>
