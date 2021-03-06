<?php
include_once("./database/constants.php");
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
    <body style="background-color:#002233;">
      <!--Nav bar-->
        
        <?php include_once("./templates/header.php");?>
          
        <div class = "container">
        <p></P>
            <div class= "row">
                <div class= "col-md-4">
                    <div class="card" style="background-color: #b3cdd1;background-image: linear-gradient(315deg, #b3cdd1 0%, #9fa4c4 74%); color: black">
                        <img src="./images/user.png" class="card-img-top mx-auto" style = "width:60%" alt="Login Icon">
                        <div class="card-body">
                            <h5 class="card-title">Profile Info</h5>
                            <p class="card-text"><i class="fa fa-user">&nbsp;</i><?php echo($_SESSION["emp_name"])?></p>
                            <p class="card-text"><i class="fa fa-globe">&nbsp;</i><?php echo($_SESSION["usertype"])?></p>
                            <p class="card-text"><i class="fa fa-envelope">&nbsp;</i><?php echo($_SESSION["email"])?></p>
                            <p></p>
                        </div>
                    </div>
                    
                </div>
                <div class = "col-md-8" style="background-color:#3f0d12;background-image :linear-gradient(315deg, #3f0d12 0%, #a71d31 74%);">
                    <p></p>
                    <h1 style = "color:white">Huygens welcomes you,</h1>
                        <p></p>
                        <p></p>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Complaints and departments</h5>
                                    <p class="card-text">Here you can register new complaints</p>
                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#form_choose_department_comp">Add new complaints</a>
                                    <a href="view_complaints.php" class="btn btn-primary">View</a>
                             </div>
                            </div>
                        </div>
                        <p></p>
                        <div class = "col-sm-6">
                            <div class="card" style="background-color:#002233; color:white" >
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size:16px">Requests</h5>
                                    <p class="card-text" style="font-size:12px">Here you can see new requests from employees for registration</p>
                                    <a href="manage_requests.php" class="btn btn-primary">View</a>
                                </div>
                            </div>
                        </div>

                        
                </div>

            </div>
        </div>
        <p></p>
        <p></p>
        <div class="container">
            <div class="row">
                <div class = "col-md-4">
                    <div class="card" style="background-color: #c45e27; color: black" >
                        <div class="card-body">
                            <h5 class="card-title">Manage Employees</h5>
                            <p class="card-text">Here you can register new employees and manage their data</p>
                            <a href="employee_registration.php" class="btn btn-primary">Register New employees</a>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#form_choose_department_emp">Manage</a>
                        </div>
                    </div>
                </div>
                <div class = "col-md-4">
                <div class="card" style="background-color:#3aafba; color: black">
                        <div class="card-body">
                            <h5 class="card-title">Services And departments</h5>
                            <p class="card-text">Here you can Add Services and departments and manage </p>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#form_service">Add Services</a>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#form_department">Add Dept.</a>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#form_choose_department_ser">Manage</a>
                        </div>
                    </div>
                </div>
                <div class = "col-md-4">
                <div class="card" style="background-color:#f0b8f2; color: black">
                        <div class="card-body">
                            <h5 class="card-title">Invoice Record</h5>
                            <p class="card-text">Here you can see the record of invoices</p>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#form_invoice_record_ad">View record</a>
                        </div>
                    </div>
                </div>

                
            </div>

        </div>
        <?php include_once("./templates/service.php");?>
        <?php include_once("./templates/New_complaint.php");?>
        <?php include_once("./templates/departments.php");?>
        <?php include_once("./templates/choose_department_ser.php");?>
        <?php include_once("./templates/choose_department_emp.php");?>
        <?php include_once("./templates/choose_department_comp.php");?>
        <?php include_once("./templates/invoice_record_ad.php");?>
    </body>
</html>
