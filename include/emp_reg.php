<?php
/**
 * user class for account creation and login purpose
 */
class User
{
    private $con;
    function __construct()
    {
        
        include_once("../database/db.php");
        $db = new DATABASE();
        $this->con = $db->connect();

    }
	private function emailExists($email)
	{
		$pre_stmt = $this->con->prepare("SELECT emp_id FROM emp_reg WHERE email = ? ");
		$pre_stmt->bind_param("s",$email);
		$pre_stmt->execute() or die($this->con->error);
		$result = $pre_stmt->get_result();
		if($result->num_rows > 0){
			return 1;
		}else{
			return 0;
		}
	}

    public function createUserAccount($password1,$usertype,$department,$name,$fathername,$mothername,$gender,
    $dob,$phone,$email,$address,$city,$state,$pincode,$adhaar_no,$work_exp)
	{
		//To protect your application from sql attack you can user 
		//prepares statment
		if ($this->emailExists($email)) {
			return "EMAIL_ALREADY_EXISTS";
		}
		else{
			$pass_hash = password_hash($password1,PASSWORD_BCRYPT,["cost"=>8]);
			$date = date("Y-m-d");
			$notes = "";
			$pre_stmt = $this->con->prepare("INSERT INTO `emp_reg`(`password`, `usertype`,
            `dep_id`, `name`, `fathername`, `mothername`,  `gender`, `dob`, `phone`, `email`, `address`, `city`, `state`, `pincode`,
            `adhaar_no`, `work_exp`,`date_of_reg`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$pre_stmt->bind_param("ssissssssssssssss",$pass_hash,$usertype,$department,$name,$fathername,$mothername,$gender,
            $dob,$phone,$email,$address,$city,$state,$pincode,$adhaar_no,$work_exp,$date);

			$result = $pre_stmt->execute() or die($this->con->error);
			if ($result) {
				return $this->con->insert_id;
			}else{
				return "SOME_ERROR";
			}
		}
			
	}


public function userLogin($emp_id,$password1)
{
	try{
	$pre_stmt = $this->con->prepare("SELECT emp_id, email,dep_id,name,usertype,password FROM emp_reg WHERE emp_id = ?");
	$pre_stmt->bind_param("s",$emp_id);
	$pre_stmt->execute() or die($this->con->error);
	$result = $pre_stmt->get_result();

	if ($result->num_rows < 1) {
		return "NOT_REGISTERD";
	}
	else
	{
		$row = $result->fetch_assoc();
		if (password_verify($password1,$row["password"]))
		{
			$_SESSION["email"] = $row["email"];
			$_SESSION["usertype"] = $row["usertype"];
			$_SESSION["emp_id"] = $row["emp_id"];
			$_SESSION["dep_id1"] = $row["dep_id"];
			$_SESSION["emp_name"] = $row["name"];
			

			if ($result) {
				return $_SESSION["usertype"];
			}else{
				return 0;
			}

		}
		else{
			return "PASSWORD_NOT_MATCHED";
		}
	}
	}catch(Exception $e){
		return $e;
	}
}

}


//$user = new User();
//$result=$user->createUserAccount("12345678","Admin","1","anas","yameen","sdghds","male",
//			"22-02-2001","921917140","kdggsfjkgk2@GMIL.COM","DHORRA","aligarh","UP","202001","520864074119","12");
 //echo($result);
 
//$result = $user->userLogin(10027,123456789);
//echo($result);
 /*<?php
 if (isset($_POST['submit'])) {
	 $adhaar_name = $_FILES['adhaar']['name'];
	 $adhaar_tmp = $_FILES['adhaar']['tmp_name'];
	 move_uploaded_file($adhaar_tmp,"./AdhaarCards/".$adhaar_name);
 }
 ?>
 */
?>
