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
		<div class="card-header"> Signup To Hire a Technician </div>
		<div class="card-body ">
			<p>Already have an account ? <a href="" data-toggle="modal" data-target="#customer">Log In</a></p>
			<button class="btn btn-button bg-warning  btn-xl" ><i class="bx bxl-google bg-white"></i><span class="m-2">|</span>Continue With Google</button> 
		</div>
	</div>
</div>

<!--customer  login modal -->
<div class="modal fade" id="customer" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-black">Get Professional Technicians</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card text-center">
            <div class="card-header bg-warning"> Customer Login </div>
              <div class="card-body">
                <form>
                  <div class="form-group text-left">
                    <label for="customer_email">Email address</label>
                    <input type="email" class="form-control" id="customer_email" aria-describedby="emailHelp" placeholder="Enter email" name="customer_email">
                  </div>

                  <div class="form-group text-left">
                    <label for="customer_password">Password</label>
                    <input type="password" class="form-control" id="customer_password" placeholder="Enter Password" name="customer_password">
                  </div>

                  <div class="form-check text-left">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">remember me</label>
                  </div>

                  <button type="submit" class="btn btn-success" style="margin-top: -50px;" >
                  Login</button>

                </form> 

                <div class="text-center">
                  <a href=""><button type="button" class="btn btn-primary"><i class="bx bxl-google mr-2"></i><span>|</span><span class="m-3">Google Login </span></button></a>  
                </div>

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
