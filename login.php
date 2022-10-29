 <?php

//FOR CALLING THE DATABASE
require_once("partials/DBconnect.php");

//FOR CALLING THE DATABASE
require_once("function.php");

if(isset($_POST["email"])){
  
  $email = $_POST["email"];
  $password =md5($_POST["password"]);



  $sql= "SELECT * FROM ayan WHERE email='$email' AND 	password='$password'";

  $query = $connectingDB->query($sql);


  if($query->rowCount() > 0){
    // echo "ok";
    Redirect_to("welcome.php");
  }
  else{
    echo "not ok";
  }

}


?> 

    


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Login page</title>
  </head>
  <body>
    
  <!--login form makingpart start-->
  <div class="container mt-5  col-md-3  border border-dark rounded">
    <h1 class="text-primary text-center mt-3">Login here</h1><hr>
  <form action="" method="post" class="text-primary font-weight-bolder">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email ">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
  </div>
  <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
  <input type="submit" class="btn btn-primary col-md-12 mb-5" value="Login">
</form>
  </div>
</div>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>