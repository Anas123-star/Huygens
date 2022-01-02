<?php
class DBOperation
{
	
	private $con;

	function __construct()
	{
		include_once("../database/db.php");
		$db = new Database();
			$this->con = $db->connect();	
	}

	public function add_department($dep)
    {
		$pre_stmt = $this->con->prepare("INSERT INTO `departments`(`dep_name`, `status`) VALUES (?,?)");
		$status = 1;
		$pre_stmt->bind_param("si",$dep,$status);
		$result = $pre_stmt->execute() or die($this->con->error);
		if ($result) {
			return "DEPARTMENT_ADDED";
		}else{
			return 0;
		}

	}

	// Registration for iterview
	public function request_signup($vol_name,$vol_email,$vol_phone,$vol_dep_id,$vol_add){
		$pre_stmt = $this->con->prepare("INSERT INTO `request_signup`(`name`, `email`, `contact_no`, `dep_id`, `address`) 
		VALUES (?,?,?,?,?)");
		$pre_stmt->bind_param("sssis",$vol_name,$vol_email,$vol_phone,$vol_dep_id,$vol_add);
		$result = $pre_stmt->execute() or die($this->con->error);
		
			if ($result) {
				return $this->con->insert_id;
			}
			else{
				return "SOME ERROR";
			}
	}

    //Add New Complaint
	public function add_complaint($cus_name,$cus_address,$cus_phone,$dep_name,$emp_id){
		$pre_stmt = $this->con->prepare("INSERT INTO `comp_reg`(`customer_name`, `customer_address`, `customer_phone_no`, `dep_id`, `employee_id`) 
		VALUES (?,?,?,?,?)");
		$pre_stmt->bind_param("sssii",$cus_name,$cus_address,$cus_phone,$dep_name,$emp_id);
		$result = $pre_stmt->execute() or die($this->con->error);
		if ($result) {
			return $this->con->insert_id;
		}else{
			return "SOME ERROR";
		}

	}
	//Add new service
	public function add_service($department,$name,$price){
		$pre_stmt = $this->con->prepare("INSERT INTO `services`(`dep_id`, `ser_name`, `price`)
		 VALUES (?,?,?)");
		$pre_stmt->bind_param("isi",$department,$name,$price);
		$result = $pre_stmt->execute() or die($this->con->error);
		if ($result) {
			return "SERVICE_ADDED";
		}else{
			return 0;
		}

	}

/*
	public function addProduct($cid,$bid,$pro_name,$price,$stock,$date){
		$pre_stmt = $this->con->prepare("INSERT INTO `products`
			(`cid`, `bid`, `product_name`, `product_price`,
			 `product_stock`, `added_date`, `p_status`)
			 VALUES (?,?,?,?,?,?,?)");
		$status = 1;
		$pre_stmt->bind_param("iisdisi",$cid,$bid,$pro_name,$price,$stock,$date,$status);
		$result = $pre_stmt->execute() or die($this->con->error);
		if ($result) {
			return "NEW_PRODUCT_ADDED";
		}else{
			return 0;
		}

	}
*/
	public function getAllRecord($table){
		$pre_stmt = $this->con->prepare("SELECT * FROM ".$table);
		$pre_stmt->execute() or die($this->con->error);
		$result = $pre_stmt->get_result();
		$rows = array();
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				$rows[] = $row;
			}
			return $rows;
		}
		return "NO_DATA";
	}




	public function complaintnumber($comp_id)
	{
		$pre_stmt = $this->con->prepare("SELECT comp_id,customer_name,customer_address,employee_id,dep_id FROM comp_reg WHERE comp_id = ?");
		$pre_stmt->bind_param("s",$comp_id);
		$pre_stmt->execute() or die($this->con->error);
		$result = $pre_stmt->get_result();

		if ($result->num_rows < 1) {
			return "COMPLAINT_NOT_REGISTERD";
		}
		else
		{
			$row = $result->fetch_assoc();
				$_SESSION["customer_name"] = $row["customer_name"];
				$_SESSION["customer_address"] = $row["customer_address"];
				$_SESSION["employee_id"] = $row["employee_id"];
				$_SESSION["dep_id"] = $row["dep_id"];
				$_SESSION["cm_id"] = $row["comp_id"];

				if ($result) {
					return $_SESSION["employee_id"];
				}else{
					return 0;
				}
		
		}
	}


}


?>
