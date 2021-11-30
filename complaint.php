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
                <form id="complaint_form" onsubmit="return false">
                    <div class="form-group">
                        <label>Customer Name</label>
                        <input type="text" class="form-control" name="cus_name" id="cus_name" placeholder="Enter the name of customer" require>
                        <small id="cn_error" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label>Address of customer</label>
                        <input type="text" class="form-control" name="cus_address" id="cus_address" placeholder="Enter the address of customer">
                        <small id="ca_error" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label>Customer's contact number</label>
                        <input type="number" class="form-control" name="cus_phone" id="cus_phone" placeholder="Enter the contact number of customer">
                        <small id="p_error" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label>Employee Id</label>
                        <select class="form-control" id="select_employee" name="select_employee">

                        </select>
                        <small id="emp_id_error" class="form-text text-muted"></small>
                    </div>
                    
                    <div class="form-group">
                        <label>Department</label>
                        <select class="form-control" id="select_dep" name="select_dep">
                        
                        </select>
                        <small id="dep_error" class="form-text text-muted"></small>
                    </div>
                    <p></p>
                    
                    <button type="submit" class="btn btn-primary">Add</button>

                </form>
            </div>  
        </div>
    </body>
</html>


