<!DOCTYPE html>
<html lang="en">

<head>
 @include('frontend.includes.head')
</head>

<body>
<!------------------------
		main container for login-sign
------------------------------------->
<div class="container-fluid" style="margin-top:100px;">
	<div class="row">
		<div class="col-sm-4 text-center">
			<div class="jumbotron jumbotron-fluid">
				<div class="container">
					<h2>Get Professional Technicians</h2>
					<p>Hire a Technician </p>
					<a href="{{url('startup-customer')}}"><button class="btn btn-button bg-warning" style="border-radius:20px;">Hire a Technician</button></a>
				</div>
			</div>
		</div>
		<div class="col-sm-4 text-center" >
	
				<div class="second_seprator"></div>
				<span class="or">OR</span>
				<div class="first_seprator"></div>
			
		</div>
		<div class="col-sm-4 text-center">
			<div class="jumbotron jumbotron-fluid">
				<div class="container">
					<h2>Get a Business</h2>
					<p>here will be text </p>
					<a href="{{url('startup-technician')}}"><button  class="btn btn-button bg-warning" style="border-radius:20px;">Get a Business</button></a>

				</div>
			</div>
		</div>
	</div>
</div>
@include('frontend.includes.footer_includes')

</body>

</html>
