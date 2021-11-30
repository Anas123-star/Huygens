<?php
  include_once("./database/constants.php");
  if (isset($_SESSION["email"])) {
    if($_SESSION["usertype"] == "admin"){
	      header("location:".DOMAIN."/dashboard_admin.php");
    }
    else{
      header("location:".DOMAIN."/dashboard_employee.php");
    }
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>inventory management system </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" 
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script rel = "stylesheet" type = "text/javascript" src="./js/main.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel = "stylesheet" type = "text/css" href="./include/style.css">
    </head>
    <body>
    <div class="overlay"><div class = "loader"></div></div>
      <!--Nav bar-->
        <?php include_once("./templates/header.php");?>
          <br/><br/>
          
          <div class = "container">
          
            <div class="card mx-auto" style="width: 18rem;">
              <img src="./images/login.png" class="card-img top mx-auto"  style = "width:60%" alt="Login Icon">
              <div class="card-body">
                <form id = "login_form" onsubmit = "return false" >
                  <div class="mb-3">
                    <label for="log_id" class="form-label">User Id</label>
                    <input type="number" class="form-control" name = "log_id" id="log_id" placeholder="Enter your User id">
                    <small id="id_error" class="form-text text-muted"></small>
                  </div>
                  <div class="mb-3">
                    <label for="log_password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="log_password" name = "log_password" placeholder="Enter your password">
                    <small id="p_error" class="form-text text-muted"></small>
                  </div>
                  <button type="submit" class="btn btn-primary"><i class="fa fa-lock">&nbsp;</i>Login</button>
			              <span><a href="signup.php">Signup</a></span>
                </form>
                <div class ="card-footer">
                  <a href="#">Forget Password ?</a>
                </div>
            </div>  
          </div>
    </body>
</html>
