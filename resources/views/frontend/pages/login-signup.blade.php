<!DOCTYPE html>
<html lang="en">

<head>
	<style>

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
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
					<!-- <a href="{{url('startup-consumer')}}"> --><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="btn btn-button bg-warning">Hire a Technician</button><!-- </a> -->
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="jumbotron jumbotron-fluid" style="margin:20px;">
				<div class="container">
					<h2>Get a Business</h2>
					<p>here will be text </p>
					<!-- <a href="{{url('startup-consumer')}}"> --><button onclick="document.getElementById('technician').style.display='block'" style="width:auto;" class="btn btn-button bg-warning">Create Consumer Account</button><!-- </a> -->

				</div>
			</div>
		</div>
	</div>
</div>
<!--  Cosnumer login     -->
<div id="id01" class="modal">
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
      <h2>Consumer</h2>
    </div>
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        <br><br>
      <button class="btn btn-button bg-primary" type="submit">Login</button><br><br>

      <a href=""><button class="btn btn-button bg-danger"><span style="background-color:blue;"><i class="bx bxl-facebook"></span></i>Facebook</button></a><br><br>

	  <a href=""><button class="btn btn-button bg-warning"><span style="background-color:white;"><i class="bx bxl-google"></i></span>Google</button></a>
    </div>
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<!--  technician login     -->
<div id="technician" class="modal">
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('technician').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
      <h2>Technician</h2>
    </div>
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        <br><br>
      <button class="btn btn-button bg-primary" type="submit">Login</button><br><br>

      <a href=""><button class="btn btn-button bg-danger"><span style="background-color:blue;"><i class="bx bxl-facebook"></span></i>Facebook</button></a><br><br>

	  <a href=""><button class="btn btn-button bg-warning"><span style="background-color:white;"><i class="bx bxl-google"></i></span>Google</button></a>
    </div>
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('technician').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>


@include('frontend.includes.footer_includes')
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>

</html>
