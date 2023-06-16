
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('loginlaundry/fonts/icomoon/style.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('loginlaundry/css/owl.carousel.min.css')?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('loginlaundry/css/bootstrap.min.css')?>">
    
    <!-- Style -->
    <link rel="stylesheet" href="<?php echo base_url('loginlaundry/css/style.css')?>">

    <title>Login User</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="<?php echo base_url('loginlaundry/images/undraw_remotely_2j6y.svg')?>" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
          
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In</h3>
              <p class="mb-4">Login untuk masuk ke dalam website</p>
            </div>
            <form action="<?php echo base_url('C_Laundry/check_login')?>" method="post">
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username">

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password">
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember Me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div>

              <input type="submit" value="Log In" class="btn btn-block btn-primary">

              
              
              
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="<?php echo base_url('loginlaundry/js/jquery-3.3.1.min.js')?>"></script>
    <script src="<?php echo base_url('loginlaundry/js/popper.min.js')?>"></script>
    <script src="<?php echo base_url('loginlaundry/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('loginlaundry/js/main.js')?>"></script>
  </body>
</html>