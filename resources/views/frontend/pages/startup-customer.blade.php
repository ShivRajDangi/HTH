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
		<div class="card-header"> <h4><b>Signup To Ask your Queries To An Expert </b></h4></div>
		<div class="card-body ">
			<p>Don't have an account ? <a href="" data-toggle="modal" data-target="#customer">Sign Up</a></p>
			<div class="row mt-2">
				<div class="col-md-6">
			        <div class="card text-center">
			            <div class="card-header"> Customer Login </div>
	              		<div class="card-body">
		           			<form method="POST" action="{{ route('login') }}">
		                	@csrf
		                  	<div class="form-group text-left">
			                    <label for="customer_email">Email address</label>
			                    <input type="email" class="form-control" id="customer_email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
		                  	</div>

		                  	<div class="form-group text-left">
			                    <label for="customer_password">Password</label>
			                    <input type="password" class="form-control" id="customer_password" placeholder="Enter Password" name="password">
		                  	</div>	                	 
	              		</div>
	              		<div class="card-footer text-muted p-3">
		               		<button type="submit" class="btn btn-primary">
	                                {{ __('Login') }}
	                        </button>
	            		</div>
		            		</form>
			        </div>
				</div>
				<div class="col-md-6">
					<a href="{{url('auth\google')}}">
						<div class="btn-group btn-lg" role="group" style="padding:0px;">
						  <button type="button" class="btn btn-button btn-outline-primary" style="background-color:white;"><img width="30" src="{{url('assets/img/google-logo.png')}}"/></button>
						  <button type="button" class="btn btn-primary">Continue With Google</button>
						</div>
					</a>
				</div>
			</div>
			<!-- <a href="{{url('auth\google')}}">
				<button class="btn btn-button bg-warning  btn-xl" style="border-radius:20px;" ><i class="bx bxl-google bg-white"></i><span class="m-2">|</span>Continue With Google</button> 
			</a> -->
			<!-- <div style="">
						<a href="{{url('auth\google')}}" style="position:relative;">
							<div class="" style="height:40px;width:250px;padding:0px;">
								<div style="background-color:white;float:left;padding:0px;border:1px solid blue;">
									<i class="bx bxl-google" style="font-size:30px;height:100%;width:100%;"></i>
								</div>
								<div class="text-center" style="background-color:blue;border:1px solid blue;height:90%;width:100%;">
									<p style="color:white;margin-top:6px;">Continue With Google</p>
								</div>
							</div>
						</a>
					</div> -->
					
		</div>
	</div>
</div>

<!--customer  login modal -->
<div class="modal fade" id="customer" tabindex="-1" role="dialog"  aria-hidden="true">
  	<div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title text-black">Get Solved your queries within a minutes</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
	      	<div class="modal-body">

		        <div class="card text-center">
		            <div class="card-header bg-warning"> Customer Sign Up </div>
	              		<div class="card-body">
		           			<form method="POST" action="{{ route('customer.register.submit') }}">
		                	@csrf
		                	<div class="form-group text-left">
			                    <label for="customer_name">Name</label>
			                    <input type="text" class="form-control" id="customer_name" aria-describedby="emailHelp" placeholder="Enter email" name="customer_name">
		                  	</div>
		                  	<div class="form-group text-left">
			                    <label for="customer_email">Email address</label>
			                    <input type="email" class="form-control" id="customer_email" aria-describedby="emailHelp" placeholder="Enter email" name="customer_email">
		                  	</div>

		                  	<div class="form-group text-left">
			                    <label for="customer_password">Password</label>
			                    <input type="password" class="form-control" id="customer_password" placeholder="Enter Password" name="customer_password">
		                  	</div>

		                  	<!-- <div class="form-check text-left">
			                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
			                    <label class="form-check-label" for="exampleCheck1">remember me</label>
		                  	</div> -->

		                  <button type="submit" class="btn btn-primary">
                                    {{ __('Sign Up') }}
                            </button>

		                </form> 
	              		</div>
	              	<div class="card-footer text-muted p-3 bg-warning">
		                <div class="text-left">
		                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
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
<!--end of customer login modal -->

@include('frontend.includes.footer_includes')

</body>

</html>
