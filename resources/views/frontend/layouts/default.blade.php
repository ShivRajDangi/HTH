<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HTH Everyone's Solution</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
  <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet"> -->

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  
</head>
<body>
  <nav class="navbar navbar-expand-lg sticky-top" style="background-color:#f0f1f3">
  <a class="navbar-brand" href="#">HTH</a>
  <button class="navbar-toggler bg-warning" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" style=""></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left:20%;">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">How It Works</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Team</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Help Forum</a>
      </li>
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
    <a href="{{url('startup')}}">
      <button class="btn btn-button btn-outline-success my-2 my-sm-0 btn-sm btn-success" type="submit" style="border-radius:30%;color:white;">SIGN IN</button>
    </a>
  </div>
</nav>
  
  <!-- ======= Header ======= -->
  <!-- <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
      
       <a href="index.html"><span> HTH </span></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#howitswork">How It Works</a></li>
          <li><a href="#contact">Team</a></li>
          <li><a href="#contact">Help Forum</a></li>

          <li class="book-a-table text-center mx-25">
            <a href="{{url('startup')}}">Sign In</a>
          </li>
        </ul>
      </nav>

    </div>
  </header> --><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1     800*800    -->
          <div class="carousel-item active bg-warning" style="background: url(assets/img/slide/slide-6.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h1><b>Get Answers To Your Queries <br> OR <br> Give Answers To Other's Queries</b></h1><br>
                <p class="lead">
                  <a class="btn btn-warning btn-md" href="{{url('startup')}}" role="button" style="border-radius:20px;">START NOW</a>
                </p>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item bg-success" style="background: url(assets/img/slide/slide-.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h1><b>Get Answers To Your Queries <br> OR <br> Give Answers To Other's Queries</b></h1><br>
                <p class="lead">
                    <a class="btn btn-success btn-md" href="{{url('startup')}}" role="button" style="border-radius:20px;">START NOW</a>
                </p> 
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item bg-danger" style="background: url(assets/img/slide/slide-.jpg);">
            <div class="carousel-background"><img src="assets/img/slide/slide-.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h1><b>Get Answers To Your Queries <br> OR <br> Give Answers To Other's Queries</b></h1><br>
                <p class="lead">
                  <a class="btn btn-danger btn-md" href="{{url('startup')}}" role="button" style="border-radius:20px;">START NOW</a>
                </p> 
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

<!-- <div class="container-fluid"  style="background-color:#f1f1f1; margin-bottom:30px;">
  <div class="container bg-light">
    <div style="height:400px;width:100%;">
      <img src="cinqueterre.jpg" class="rounded" alt="image not available"> 
    </div>
  </div>
</div> -->

<div class="container-fluid" id="howitswork">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <div class="jumbotron">
           <h2>
          <b>Use your knowledge to repair and earn, even  from the comfort of your  place </b>
        </h2><br>
        <p>At HTH, we aim to bring people with proficiency  in fixing and repairing, put their knowledge to use  by helping people and earn themselves a living. </p>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="jumbotron text-center" style="height:310px;width:100%;">
          <img src="assets\img\repair_earn.jpg" height="310px;" alt="image not available"> 
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <div class="jumbotron" style="height:450px;width:100%;">
          <img src="assets\img\query.jpg" class="rounded;" height="450px;" alt="image not available"> 
        </div>
      </div>
      <div class="col-sm-6">
        <div class="jumbotron">
           <h2>
              <b>Got some Query? Write it here and get it solved via text, call, or even a home service </b>
            </h2><br><br>
            <p>Connect to a consultant of your, and we assure you, we will be alongside you until your query is solved.
            </p>
        </div>
      </div>
    </div>
  </div>
</div>
<hr>
<!-- <div class="container-fluid" style="height:400px;width:100%;"> -->
  <img src="assets\img\setting.jpg" height="400px;" width="100%;" class="rounded" alt="image not available"> 
<!-- </div> -->


<div class="container-fluid mt-20">
  <div class="jumbotron" style="background-color:#f0f1f3;padding-left:10%;padding-right:10%;">
    <h2 class=""><b>How To Get Your Queries Solved</b></h2>
    <p class=""><b>TO GET YOUR QUERIES RESOLVED FOLLOW THESE STEPS :</b></p><br><br>
    <div class="row" style="margin-left:2%;">
      <div class="col-md-4">
        <b>01.</b>
        <b><p class="text-center steps-heading">Create Your Account</p></b>
        <p>Register your details with us , If you already have an account, login and proceed.</p>
        <div class="steps-line">
        </div>
      </div><br>
      <div class="col-md-4">
        <b>02.</b>
           <b><p class="text-center steps-heading">Enter Your Queries</p></b>
        <p>Submit query as detailed as possible and wait till the experts reach out.</p>
         <div class="steps-line">
        </div>
      </div><br>
      <div class="col-md-4">
      <b>03.</b>
         <b><p class=" text-center steps-heading">Choose An Expert</p></b>
        <p>Choose an expert of your own choice based on the “RATING OF THE EXPERT”.</p>
         <div class="steps-line">
        </div>
      </div>
    </div>
<br><br>
     <div class="row" style="margin-left:2%;">
      <div class="col-md-4">
      <b>04.</b>
        <b> <p class="text-center steps-heading">Choose Your Preffered Mode Of Commucication</p></b>
        <p>Choose from the various modes ofcommunication available (Call, Text,Home Service).</p>
         <div class="steps-line">
        </div>
    </div><br>
      <div class="col-md-4">
        <b>05.</b>
         <b><p class="text-center steps-heading ">Conect With The Expert</p></b>
        <p>The expert will connect with you and will try to solve your query. 
        Please be detailed inexplaining your query.</p>
        <div class="steps-line">
        </div>
      </div><br>
      <div class="col-md-4">
        <b>06.</b>
         <b><p class="text-center steps-heading">Provide A Feedback</p></b>
          <p>After your query is solved, please give your valued feedback. Be assured we won’t let you go without your query solved.</p>
           <div class="steps-line">
        </div>
      </div><br>
    </div>
  </div>
</div>

<!-- <div class="container-fluid" style="background-color:#f1f1f1; margin-bottom:30px;background-color:red;">
  <div class="bg-light" style="height:400px;width:100%;">
    <img src="cinqueterre.jpg" class="rounded" alt="image not available"> 
  </div>
</div> -->

<div class="cotainer-fluid" id="about">
  <div class="jumbotron">
    <h2 class="text-center"><b>About Us </b></h2><br>
    <p>HTH is a platform that aims to provide a source of income to those who possess knowledge in any domain by giving them a chance to help others who need help in their profession.  
    We all know that local technicians, electricians, plumbers, and many local people boast vast talent but still cannot make their ends meet due to lack of work. We aim to provide these people a chance to use their expertise in repairing, fixing, and troubleshooting by providing them work of helping others in need and make a living for themselves. 
    We stand forward for the vocal for local initiative by extending our support and work towards our local helpers' betterment.  
    </p>
    <h4><b>Support our initiative by posting your queries on our platform and contribute towards the betterment of Indian society.</b></h4>
  </div>
</div>
<hr>
<div class="container-fluid bg-light ">
  <div class="container bg-grey m-10">
     <h2><b>Our Team</b></h2>
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
             <div style="height:300px;width:100%;">
                <img src="cinqueterre.jpg" class="rounded" alt="image not available"> 
              </div>
             <p class="">Nitesh</p>
             <p class="">Founder,CEO,CTO</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
             <div style="height:300px;width:100%;">
                <img src="cinqueterre.jpg" class="rounded" alt="image not available"> 
              </div>
              <p class="">Ayush</p>
              <p class="">Co-founder , COO , CMO</p>
            </div>
          </div>
        </div>
      </div>
  </div>  
</div>
<hr>
<!--   @yield('content'); -->

<!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>HTH</h3>
      <p>you can pu any text here accordin to your need</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>HTH</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://shivwebsolutions.com/">shivwebsolutions</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>