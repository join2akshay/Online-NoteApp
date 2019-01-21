
<html lang="en">
  <head>
    <title>Online Notes</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-sm navbar-custom">
    <a href="/" class="navbar-brand">Online Note App</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCustom">
        <i class="fa fa-bars fa-lg py-1 text-white"></i>
    </button>
    <div class="navbar-collapse collapse" id="navbarCustom">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Help</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
            </li>
            
        </ul>
        <span class="ml-auto navbar-text"><a data-toggle="modal" data-target="#login">Login</a></span>
    </div>
</nav>
<!--jumbotron-->
<div class="jumbotron">
  
  <h1 class="display-2">Online Note App</h1>
  <p class="lead">Your Notes always with you wherever you go.</p>
  <p class="lead">Ease to use, Protects all your notes.</p>
  <button class="btn btn-outline-success" type="button" data-target="#singup" data-toggle="modal" >Sing Up for free</button>
</div>
<!--LogIn-->
<form>
<div class="modal fade bd-example-modal-lg" tabindex="-1" id="login">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Enter your Log In details</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="input-group mb-3">
  
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  
  <input type="text" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
</div>
  
  <div class="row">
      <div class="col-md-4"><div id="checkbox">
  <label for="checkbox">
  <input type="checkbox" name="CheckBox" id="">Remember me</label>
  </div>
  </div>
      <div class="col-md-4 ml-auto"><a href="" data-dismiss="modal" data-target="#forget" data-toggle="modal">Forget Password</a></div>
    </div>
      </div>
     

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Login</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
</form>
<!--Forget password-->
<form>
<div class="modal fade bd-example-modal-lg" tabindex="-1" id="forget">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Enter your Email for new password</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="input-group mb-3">
  
  <input type="text" class="form-control" placeholder="Enter your Email" aria-label="Username" aria-describedby="basic-addon1">
</div>
</div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Submitn</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancle</button>
      </div>

    </div>
  </div>
</div>
</form>
<!--SingUp-->
<form method="post" id="singupForm">
<div class="modal fade bd-example-modal-lg" tabindex="-1" id="singup">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
 
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Sing Up today and start using our Online Note App</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <!--Sign up message from PHP file-->
 <div id="signupmessage"></div>
      <div class=" form-group input-group mb-3">
  
      <label for="username" class="sr-only">Username:</label>
                      <input class="form-control" type="text" name="username" id="username" placeholder="Username" maxlength="30">

</div>
<div class="form-group input-group mb-3">
  
  <label for="username" class="sr-only">Email:</label>
                      <input class="form-control" type="text" name="email" id="email" placeholder="Email" maxlength="30">

</div>
<div class=" form-group input-group mb-3">
  
<label for="username" class="sr-only">Password:</label>
                      <input class="form-control" type="text" name="password" id="password" placeholder="Password" maxlength="30">
</div>
<div class="form-group input-group mb-3">
  
<label for="username" class="sr-only">Confrim Password:</label>
                      <input class="form-control" type="text" name="password2" id="password2" placeholder="Confirm Password" maxlength="30">
</div>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <input type="submit" class="btn btn-success">
      </div>

    </div>
  </div>
</div>
</form>
<!--footer-->
<div class="footer">
  <p>Develpoed by <a href="www.github.com/tvibhu12">Akshay Tiwari</a> </p>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="index.js"></script>
  </body>
</html>