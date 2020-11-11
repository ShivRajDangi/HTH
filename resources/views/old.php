
  <!------------------------
    main container for login-sign
------------------------------------->
<div class="container-fluid">
  <div class="card" id="startup">
    <div class="card-header text-center">HTH EVERYONE'S SOLUTION</div>
    <div class="row text-center">
      <div class="col-md-6">
        <div class="jumbotron jumbotron-fluid" style="margin:20px;">
          <div class="container">
            <h2>Get Professional Technicians</h2>
            <p>here will be text </p>
            <button data-toggle="modal" data-target="#customer" class="btn btn-button bg-warning">Hire a Technician</button>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="jumbotron jumbotron-fluid" style="margin:20px;">
          <div class="container">
            <h2>Get a Business</h2>
            <p>here will be text </p>
            <button data-toggle="modal" data-target="#technician" class="btn btn-button bg-warning">Create Technician Account</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <!------------------------
   end of  main container for login-sign
------------------------------------->

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
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#customer_login">LOGIN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#customer_signup">SIGNUP</a>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content" style="margin:20px;">
          <div class="tab-pane container active" id="customer_login">
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
          <div class="tab-pane container fade" id="customer_signup">
            <div class="card text-center">
              <div class="card-header bg-warning">Signup For Customer</div>
              <div class="card-body">
                <form>
                  <div class="form-group text-left">
                    <label for="customer_name">Name</label>
                    <input type="email" class="form-control" id="customer_name" aria-describedby="emailHelp" placeholder="Enter Name" name="customer_name">
                  </div>   
                  <div class="form-group text-left">
                    <label for="customer_email">Email address</label>
                    <input type="email" class="form-control" id="customer_email" aria-describedby="emailHelp" placeholder="Enter email" name="customer_email">
                  </div>
                  <div class="form-group text-left">
                    <label for="customer_password">Password</label>
                    <input type="password" class="form-control" id="customer_password" placeholder="Enter Password" name="customer_password">
                  </div>
                  <div class="form-group text-left">
                    <label for="customer_address">Address</label>
                    <input type="email" class="form-control" id="customer_address" aria-describedby="emailHelp" placeholder="Enter Address" name="customer_address">
                  </div>
                  <div class="form-group text-left">
                    <label for="customer_mobile">Mobile</label>
                    <input type="email" class="form-control" id="customer_mobile" aria-describedby="emailHelp" placeholder="Enter Mobile" name="customer_mobile">
                  </div>
                  <div class="form-check text-left">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">keep me signin</label>
                  </div>
                  <button type="submit" class="btn btn-success ml-5" style="margin-top: -50px;" >
                  SIGNUP</button>
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
  </div>
</div>
<!--end of customer login modal -->


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
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#technician_login">LOGIN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#technician_singup">SIGNUP</a>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content" style="margin:20px;">
          <div class="tab-pane container active" id="technician_login">
            <div class="card text-center">
            <div class="card-header bg-warning">
            Technician Login
            </div>
            <div class="card-body">
            <form>
            <div class="form-group text-left">
            <label for="technician_email">Email address</label>
            <input type="email" class="form-control" id="technician_email" aria-describedby="emailHelp" placeholder="Enter email" name="technician_email">
            </div>
            <div class="form-group text-left">
            <label for="technician_password">Password</label>
            <input type="password" class="form-control" id="technician_password" placeholder="Password" name="technician_password">
            </div>
            <div class="form-check text-left">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-success" style="margin-top: -50px;" >Login</button>
            </form> 
            <div class="text-center">
            <a href=""><button type="button" class="btn btn-primary"><i class="bx bxl-google mr-2"></i><span>|</span><span class="m-3">Google Login </span></button></a>  
            </div>
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
          <div class="tab-pane container fade" id="technician_singup">
            <div class="card text-center">
              <div class="card-header bg-warning"> Signup For Technician </div>
              <div class="card-body">
                <form>
                  <div class="form-group text-left">
                    <label for="technician_name">Name</label>
                    <input type="email" class="form-control" id="technician_name" aria-describedby="emailHelp" placeholder="Enter Name" name="technician_name">
                  </div>
                  <div class="form-group text-left">
                    <label for="technician_mobile">Mobile</label>
                    <input type="email" class="form-control" id="technician_mobile" aria-describedby="emailHelp" placeholder="Enter Mobile" name="technician_mobile">
                  </div>
                  <div class="form-group text-left">
                    <label for="technician_email">Email address</label>
                    <input type="email" class="form-control" id="technician_email" aria-describedby="emailHelp" placeholder="Enter email" name="technician_email">
                  </div>
                  <div class="form-group text-left">
                    <label for="technician_password">Password</label>
                    <input type="password" class="form-control" id="technician_password" placeholder="Password" name="technician_password">
                  </div>
                  <div class="form-group text-left">
                    <label for="technician_address">Address</label>
                    <input type="text" class="form-control" id="technician_address" aria-describedby="emailHelp" placeholder="Enter Address" name="technician_address">
                  </div>
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
                  <div class="form-group text-left">
                    <label for="technician_experience">Select Area in which you are exprienced</label>
                    <select class="form-control" name="technician_experience" 
                            id="technician_experience">
                      <option>Choose</option>
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
                      <option value=""></option>
                      
                    </select>
                  </div>
                  <div class="form-check text-left mt-5">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">keep me sign in</label>
                  </div>
                  <button type="submit" class="btn btn-success ml-5 " style="margin-top: -50px;" >SIGNUP</button>
                </form> 
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
  </div>
</div>
<!--end of technician login modal -->