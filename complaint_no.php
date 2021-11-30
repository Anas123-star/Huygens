<?php
  include_once("./database/constants.php");
  include_once("./include/DBOperation.php");
  if (isset($_SESSION["emp_id"])) {
    if($_SESSION["emp_id"] == $_SESSION["employee_id"]){
	      header("location:".DOMAIN."/dashboard_employee.php");
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
        <script type = "text/javascript" src="./js/main.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body style="background-color:#002233">
      <!--Nav bar-->
        <?php include_once("./templates/header.php");?>
            <br/><br/>
        <div class = "container">
            <div class="card mx-auto" style="width: 50rem;">
                <div class="card-header"><b>Employee Registration</b></div>
                <div class="card-body">
                <form id="complaintnumber_form" onsubmit="return false">
                    <div class="form-group">
                        <label>Complaint Number</label>
                        <input type="text" class="form-control" name="comp_id" id="comp_id" placeholder="Enter the complaint number">
                        <small id="cn_error" class="form-text text-muted"></small>
                    </div>
                    <p></p>
                    <button type="submit" class="btn btn-primary">Add</button>
             </form>
            </div>  
        </div>
    </body>
</html>


