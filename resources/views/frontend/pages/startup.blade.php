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
	<div class="row text-center">
		<div class="col-md-6">
			<div class="jumbotron jumbotron-fluid" style="margin:20px;">
				<div class="container">
					<h2>Get Professional Technicians</h2>
					<p>here will be text </p>
					<a href="{{url('startup-customer')}}"><button class="btn btn-button bg-warning">Hire a Technician</button></a>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="jumbotron jumbotron-fluid" style="margin:20px;">
				<div class="container">
					<h2>Get a Business</h2>
					<p>here will be text </p>
					<a href="{{url('startup-technician')}}"><button  class="btn btn-button bg-warning">Create Consumer Account</button></a>

				</div>
			</div>
		</div>
	</div>
</div>
@include('frontend.includes.footer_includes')

</body>

</html>
