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
        <link rel = "stylesheet" type = "text/css" href="./include/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body style="background-color:#002233">
    <div class="overlay"><div class = "loader"></div></div>
      <!--Nav bar-->
        <?php include_once("./templates/header.php");?>
            <br/><br/>
        <div class = "container">
            <div class="card mx-auto" style="width: 50rem;">
                <div class="card-header"><b>Employee Registration</b></div>
                <div class="card-body">
                <form id = "register_form" method = "POST" onsubmit = "return false" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="name">Full Name</label>
                      <input type="text" class="form-control" id="name" name= "name" placeholder="Enter full name">
                      <small id="n_error" class="form-text text-muted"></small>   
                    </div>
                    <div class="form-group">
                      <label for="password1">Password</label>
                      <input type= "password" class="form-control" id="password1" name= "password1">
                      <small id="p1_error" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                      <label for="password2">Re-enter the Password</label>
                      <input type= "password" class="form-control" id="password2" name= "password2">
                      <small id="p2_error" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="fathername">Father's Name</label>
                        <input type="text" class="form-control" id="fathername" name= "fathername">
                        <small id="f_error" class="form-text text-muted"></small>   
                    </div>
                    <div class="form-group">
                        <label for="mothername">Mother's Name</label>
                        <input type="text" class="form-control" id="mothername" name= "mothername" > 
                        <small id="m_error" class="form-text text-muted"></small>     
                    </div>
                    <div class="form-group">
                        <label for="dob">Date of Birth</label>
                        <input type ="date" class="form-control" name="dob" id="dob" >
                    </div>
                    <div class ="form-group">
                      <label for="gender">Gender</label>
                            <select class="form-select" id = "gender" name="gender">
                                <option selected>Select gender</option>
                                <option value="1" >male</option>
                                <option value="2">female</option>
                                <option value="3">other</option>
                            </select>
                    </div>
                        
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name= "address">
                        <small id="ad_error" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" name= "city">
                        <small id="c_error" class="form-text text-muted"></small>      
                    </div>
                    <div class="form-group">
                        <label for="pincode">Pin-code</label>
                        <input type="number" class="form-control" id="pincode" name= "pincode">
                        <small id="pin_error" class="form-text text-muted"></small>      
                    </div>
                    <div class="form-group">
                        <label for="state">State</label>
                        <input type="text" class="form-control" id="state" name= "state">
                        <small id="s_error" class="form-text text-muted"></small>      
                    </div>
                    <div class="form-group">
                        <label for="phone">Contact number</label>
                        <input type="number" class="form-control" id="phone" name= "phone">  
                        <small id="ph_error" class="form-text text-muted"></small>    
                    </div>

                    <div class ="form-group">
                        <label for="department">Department</label>
                            <select class="form-select" id = "select_dep" name="select_dep">
                                
                             
                            </select>
                            <small id="d_error" class="form-text text-muted">Select NA for admin</small>
                    </div>
                    <div class ="form-group">
                        <label for="usertype">User-type</label>
                            <select class="form-select" id = "usertype" name="usertype">
                                <option selected>Select user-type</option>
                                <option value="1">admin</option>
                                <option value="2">employee</option>
                            </select>
                            <small id="t_error" class="form-text text-muted"></small>   
                    </div>
                    <div class="form-group">
                        <label for="email">Email-id</label>
                        <input type ="email" class="form-control" name="email" id="email" >
                        <small id="e_error" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="adhaar_no">Adhaar number</label>
                        <input type ="number" class="form-control" name="adhaar_no" id="adhaar_no" >
                        <small id="a_error" class="form-text text-muted"></small>   
                    </div>
                    <div class="form-group">
                        <label for="work_exp">Work Experience</label>
                        <input type ="number" class="form-control" name="work_exp" id="work_exp" placeholder="Enter in months" >
                        <small id="w_error" class="form-text text-muted"></small>   
                    </div>
                    <div class="form-group">
			            <label>upload Adhaarcard</label>
			            <input type="file" id = "myimg" name="myimg" class="form-control" multiple />
		            </div>
                    <div class="form-group">
			            <label>upload Pancard</label>
			            <input type="file" name="pancard" class="form-control" multiple />
		            </div>
                    <div class="form-group">
			            <label>upload Photo</label>
			            <input type="file" name="photo" class="form-control" multiple />
                    </div>
                    <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" id="termsandcondition">
                      <label class="form-check-label" for="termsandcondition">I agree with the terms and condition</label>
                    </div>
                    <input type="submit" class="btn btn-primary" name = "submit">
          
                </form>
                </div>
            </div>  
        </div>
    </body>
</html>


