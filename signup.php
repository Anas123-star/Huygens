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
      <!--Nav bar-->
        <?php include_once("./templates/header.php");?>
          <br/><br/>
        <div class = "container">
            <div class="card mx-auto" style="width: 20rem;">
              <div class="card-header"><b>Register for interview</b></div>
                <div class="card-body">
                    <form id="signup">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" name = "name" class="form-control" id="name" placeholder="Enter your full name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email-id</label>
                            <input type="email" name = "email" class="form-control" id="name" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Contact No</label>
                            <input type="phone" name = "phone" class="form-control" id="phone" placeholder="Enter your contact-no">
                        </div>
                        <div class ="form-group">
                            <label for="department">Department</label>
                                <select class="form-select" id = "department" name="department">
                                    <option selected>Select department</option>
                                    <option value="1">Electrical appliances</option>
                                    <option value="2">Photography</option>
                                    <option value="3">Salon for men</option>
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name = "address" class="form-control" id="address" placeholder="Enter your address">
                        </div>
                    </form>
                    <p></p>
                    <p></p>
                    <a href="#" class="btn btn-primary" style ="background-color:#002233; border:0.8px solid black"><i class ="fa fa-lock">&nbsp;</i>Register</a>
                    <span><a href = "index.php">Login</a></span>
                </div>
          </div>
        </div>
    </body>
</html>
