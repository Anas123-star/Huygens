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
    <body>
        
        <div class="overlay"><div class = "loader" ></div></div>
      <!--Nav bar-->
        <?php include_once("./templates/header.php");?>
          <br/><br/>
        <div class = "container">
            <div class="card mx-auto" style="width: 20rem;">
              <div class="card-header"><b>Register for interview</b></div>
                <div class="card-body">
                    <form id="signup_form"  onsubmit = "return false">
                        <div class="form-group">
                            <label >Full Name</label>
                            <input type="text" name = "vol_name" class="form-control" id="vol_name" placeholder="Enter your full name" required/>
                        </div>
                        <div class="form-group">
                            <label >Email-id</label>
                            <input type="email" name = "vol_email" class="form-control" id="vol_email" placeholder="Enter Email Address" required/>
                        </div>
                        <div class="form-group">
                            <label >Contact No</label>
                            <input type="phone" name = "vol_phone" class="form-control" id="vol_phone" placeholder="Enter your contact-no" required/>
                        </div>
                        <div class ="form-group">
                            <label >Department</label>
                            <select class="form-control" id="select_dep_signup" name="select_dep_signup" required/> 
                            </select>
                        </div>
                        <div class="form-group">
                            <label >Address</label>
                            <input type="text" name = "vol_add" class="form-control" id="vol_add" placeholder="Enter your address" required/>
                        </div>
                        <p></p>
                        <p></p>
                        <button type="submit" class="btn btn-primary" style="background-color:rgb(255, 145, 0)"><i class="fa fa-lock">&nbsp;</i>Join</button>
                    </form>
                </div>
          </div>
        </div>
    </body>
</html>
