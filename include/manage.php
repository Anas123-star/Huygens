<?php

/**
* 
*/
class Manage
{
	
	private $con;

	function __construct()
	{
		include_once("../database/db.php");
		$db = new Database();
		$this->con = $db->connect();
	}

	public function manageRecordWithPagination($table){
		if($table == "services"){
			$sql = "SELECT s.ser_id,s.ser_name,s.price,d.dep_name,d.dep_id FROM services s,departments d WHERE s.dep_id = d.dep_id";
		}
		elseif ($table == "emp_reg") {
			$sql = "SELECT e.emp_id,e.name,d.dep_name,e.address,e.phone,d.dep_id FROM emp_reg e,departments d WHERE e.dep_id = d.dep_id";
		}
		$result = $this->con->query($sql) or die($this->con->error);
		$rows = array();
		if($result->num_rows > 0){
			while ($row = $result->fetch_assoc()) {
				$rows[] = $row;
			}
		}
		return ["rows"=>$rows];

	}
	// Delete Record
	public function deleteRecord($table,$pk,$id){
		if($table == "categories"){
			$pre_stmt = $this->con->prepare("SELECT ".$id." FROM categories WHERE parent_cat = ?");
			$pre_stmt->bind_param("i",$id);
			$pre_stmt->execute();
			$result = $pre_stmt->get_result() or die($this->con->error);
			if ($result->num_rows > 0) {
				return "DEPENDENT_CATEGORY";
			}else{
				$pre_stmt = $this->con->prepare("DELETE FROM ".$table." WHERE ".$pk." = ?");
				$pre_stmt->bind_param("i",$id);
				$result = $pre_stmt->execute() or die($this->con->error);
				if ($result) {
					return "CATEGORY_DELETED";
				}
			}
		}else{
			$pre_stmt = $this->con->prepare("DELETE FROM ".$table." WHERE ".$pk." = ?");
			$pre_stmt->bind_param("i",$id);
			$result = $pre_stmt->execute() or die($this->con->error);
				if ($result) {
					return "DELETED";
			}
		}
	}

	//Get single record
	public function getSingleRecord($table,$pk,$id){
		$pre_stmt = $this->con->prepare("SELECT * FROM ".$table." WHERE ".$pk."= ?");
		$pre_stmt->bind_param("i",$id);
		$pre_stmt->execute() or die($this->con->error);
		$result = $pre_stmt->get_result();
		if ($result->num_rows == 1) {
			$row = $result->fetch_assoc();
		}
		return $row;
	}
	//update Record
	public function update_record($table,$where,$fields){
		$sql = "";
		$condition = "";
		foreach ($where as $key => $value) {
			// id = '5' AND m_name = 'something'
			$condition .= $key . "='" . $value . "' AND ";
		}
		$condition = substr($condition, 0, -5);
		foreach ($fields as $key => $value) {
			//UPDATE table SET m_name = '' , qty = '' WHERE id = '';
			$sql .= $key . "='".$value."', ";
		}
		$sql = substr($sql, 0,-2);
		$sql = "UPDATE ".$table." SET ".$sql." WHERE ".$condition;
		if(mysqli_query($this->con,$sql)){
			return "UPDATED";
		}
	}


	// .........................Invoice Form Submission..........................//
	public function storeInvoiceData($comp_id,$ar_p_comp,$ar_p_name,$ar_retailer,$ar_p_price,$ar_qty,$ar_other_ser_name,$ar_other_ser_price,$ar_price,
	$ar_ser_name,$sub_total,$new_total,$vis_charge,$discount,$paid,$due,$grand_total,$payment_type){

		$pre_stmt = $this->con->prepare("INSERT INTO 
			`invoice`(`comp_id`, `sub_total`, `new_total`, `vis_charge`, `discount`, 
			`grand_total`, `paid_amt`, `due`, `payment_method`) VALUES (?,?,?,?,?,?,?,?,?)");
		$pre_stmt->bind_param("iddddddds",$comp_id,$sub_total,$new_total,$vis_charge,$discount,$grand_total,$paid,$due,$payment_type);
		$pre_stmt->execute() or die($this->con->error);
		$invoice_no = $pre_stmt->insert_id;

		if ($invoice_no != null) {
			for ($i=0; $i < count($ar_price) ; $i++) {
				
				$insert_product = $this->con->prepare("INSERT INTO `invoice_details`(`invoice_no`, `comp_id`, `ser_name`, 
				`ser_price`, `oth_ser_name`, `oth_ser_price`, `p_name`, `p_comp`, `retailer`, `p_price`, `qty`)
				 VALUES (?,?,?,?,?,?,?,?,?,?,?)");
				$insert_product->bind_param("iisdsdsssdi",$invoice_no,$comp_id,$ar_ser_name[$i],$ar_price[$i],$ar_other_ser_name[$i],$ar_other_ser_price[$i],$ar_p_name[$i],$ar_p_comp[$i],
				$ar_retailer[$i],$ar_p_price[$i],$ar_qty[$i]);
				$insert_product->execute() or die($this->con->error);
			}
			return "Invoice Completed";
		}
		else {
			return "Some Error";
		}



	}


	



	
}

//$obj = new Manage();
//echo($obj->update_record("invoice_details",["comp_id"=>22],["p_name"=>"hgf"]));
//echo "<pre>";
//print_r($obj->manageRecordWithPagination("emp_reg"))
//$rows = $res["rows"];
//foreach ($rows as $row) {
//	echo $row["dep_name"];
//}
//echo $obj->deleteRecord("categories","cid",14);
//$res = $obj->getSingleRecord("other_ser","oth_id",1);
//echo json_encode($res);

//echo $obj->update_record("services",["ser_id"=>16],["dep_id"=>3,"ser_name"=>"Electro","price"=>1600]);



?>