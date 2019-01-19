<!doctype html>
<html lang="en">
  <head>
    <title>My Notes</title>
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
            <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Help</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">My Notes</a>
            </li>
            
        </ul>
        <ul class=" ml-auto navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">LogIn as <b>UserName</b></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">LogOut</a>
            </li>
        </ul>
       
    </div>
</nav>
<!--Container-->
<div class="container">
    <div class="row">
    <div class="col-md-6 offset-md-3">
        <div>                
    <button class="btn btn-primary btn-lg" type="button" id="addNotes">Add Notes</button>
    <button class="btn btn-primary btn-lg" type="button" id="allNotes">All Notes</button>
    <button class="btn btn-success btn-lg float-right" type="button" id="done">Done</button>
    <button class="btn btn-primary btn-lg float-right" type="button" id="edit">Edit</button>
    </div>
    <div class="notepad">
        <textarea name="note" rows="10"></textarea>
    </div>    
</div>
<div class="notes" id="notes">
</div>
<!-- AJAX call here-->
    </div>
</div>

<!--footer-->
<div class="footer">
  <p>Develpoed by <a href="www.github.com/tvibhu12">Akshay Tiwari</a> </p>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>