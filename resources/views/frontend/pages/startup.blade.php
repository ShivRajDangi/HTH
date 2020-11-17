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
					<h2><b>Ask Your Query To An Expert</b></h2>
					<p>Get connected to an expert and get your query solved in a minutes</p>
					<a href="{{url('startup-customer')}}"><button class="btn btn-button bg-warning" style="border-radius:20px;background-color:#6f4e37 !important">Ask A Query</button></a>
				</div>
			</div>
		</div>
		<div class="col-sm-4 text-center" >
	
				<div class="second_seprator"></div>
				<span class="or">OR</span>
				<div class="first_seprator"></div>

				<div class="hidden_content">---------------- OR ---------------</div>
		</div>
		<div class="col-sm-4 text-center">
			<div class="jumbotron jumbotron-fluid">
				<div class="container">
					<h2><b>Become An Expert Yourself</b></h2>
					<p>Use your expertise and become a professional expert for other's queries </p>
					<a href="{{url('startup-technician')}}"><button  class="btn btn-button bg-warning" style="border-radius:20px;background-color:#6f4e37 !important;">Become An Expert</button></a>

				</div>
			</div>
		</div>
	</div>
</div>
@include('frontend.includes.footer_includes')

</body>

</html>
