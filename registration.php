<?php
    //for connecting the database
    require_once("partials/DBconnect.php");

    //for calling the funcation
    require_once("function.php");

    if(isset($_POST["submit"])){
          if(!empty($_POST["name"]) && !empty($_POST["email"])){

            $name = $_POST["name"];
            $email = $_POST["email"];
            $password =md5($_POST["password"]);
            $address = $_POST["address"];
            $city = $_POST["city"];
            $state = $_POST["state"];
            $pin = $_POST["pin"];

            global $connectingDB;

            $sql="INSERT INTO ayan(name,email,password,address,city,state,pin)
            VALUES(:Xname,:Xemail,:Xpassword,:Xaddress,:Xcity,:Xstate,:Xpin)";

            $stmt=$connectingDB->prepare($sql);

            $stmt->bindvalue(':Xname',$name);
            $stmt->bindvalue(':Xemail',$email);
            $stmt->bindvalue(':Xpassword',$password);
            $stmt->bindvalue(':Xaddress',$address);
            $stmt->bindvalue(':Xcity',$city);
            $stmt->bindvalue(':Xstate',$state);
            $stmt->bindvalue(':Xpin',$pin);

            $result=$stmt->execute();

            Redirect_to("login.php");

            if($result){
              echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Great! your query has been submitted</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
            }

          } else{
            echo '<span class="success"> OOps! something went wrong<span>';
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

    <title>Regsitartion page</title>
  </head>
  <body>

  <!--*****form makig part start--->
 <div class="container mt-5 border border-dark rounded">
    <h1 class="text-center text-success mt-3">Regsiter here</h1><hr>
  <form action="" method="post" class="text-success font-weight-bolder">
  <div class="form-group">
    <label for="inputAddress">Name</label>
    <input type="text" class="form-control" name="name" id="inputAddress" placeholder="Enter your full name..">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Somebody@123gmail.com">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Addresss</label>
    <input type="text" class="form-control" name="address" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="city" id="inputCity" placeholder="Enter city">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <input type="text" class="form-control" name="state" id="inputState" placeholder="enter State">
    </div>
    <div class="form-group col-md-2">
      <label for="inputpin">Pin</label>
      <input type="text" class="form-control" name="pin" id="inputPin" placeholder="Enter your pin">
    </div>
  </div><br>
  <input type="submit" class="btn btn-success mb-5" name="submit" value="Register">
</form>
</div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>