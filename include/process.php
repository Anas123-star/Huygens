<?php
include_once("../database/constants.php");
include_once("DBOperation.php");
include_once("emp_reg.php");
include_once("manage.php");
//For emp_reg
if(isset($_POST['name'])){

    $user = new User();
    $result = $user->createUserAccount($_POST['password1'],$_POST['usertype'],$_POST['select_dep'],$_POST['name'],$_POST['fathername'],$_POST['mothername'],$_POST['gender'],
    $_POST['dob'],$_POST['phone'],$_POST['email'],$_POST['address'],$_POST['city'],$_POST['state'],$_POST['pincode'],$_POST['adhaar_no'],$_POST['work_exp']);
   
    echo ($result);
}

//For Login Processing
if (isset($_POST["log_password"])AND isset($_POST["log_id"])) {
	$user = new User();
	$result = $user->userLogin($_POST["log_id"],$_POST["log_password"]);
	echo $result;
}
//To get department
if (isset($_POST["getdepartment"])) {
	$obj = new DBOperation();
	$rows = $obj->getAllRecord("departments");
	foreach ($rows as $row) {
		echo "<option value='".$row["dep_id"]."'>".$row["dep_name"]."</option>";
	}
	exit();
}
//To get emp id
if (isset($_POST["getempid"])) {
	$obj = new DBOperation();
	$rows = $obj->getAllRecord("emp_reg");
	foreach ($rows as $row) {
		echo "<option value='".$row["emp_id"]."'>".$row["emp_id"]."</option>";
	}
	exit();
}
//Add Department
if (isset($_POST["department_name"])) {
	$user = new DBOperation();
	$result = $user->add_department($_POST["department_name"]);
	echo $result;
}

//Add Complaint
if (isset($_POST["cus_name"])) {
	$user = new DBOperation();
	$result = $user->add_complaint($_POST['cus_name'],$_POST['cus_address'],$_POST['cus_phone'],$_POST['select_dep'],$_POST['select_employee']);
	echo $result;
}
//ADD Services
if (isset($_POST["service_name"]) AND isset($_POST["service_price"])){
	$user = new DBOperation();
	$result = $user->add_service($_POST['select_dep'],$_POST['service_name'],$_POST['service_price']);
	echo $result;
}
//COMPLAINT NUMBER
if (isset($_POST["comp_id"])){
	$user = new DBOperation();
	$result = $user->complaintnumber($_POST['comp_id']);
	echo $result;
}

//Choose department 
if (isset($_POST["select_department"])){
	$dep_id = $_POST["select_department"];
	$_SESSION["dep_id"] = $dep_id;
	echo $dep_id;
}
//Choose department emp
if (isset($_POST["select_department_emp"])){
	$dept_id = $_POST["select_department_emp"];
	$_SESSION["dept_id"] = $dept_id;
	echo $dept_id;
}



//.........................Services.....................//

if (isset($_POST["manageService"])) {
	$m = new Manage();
	$result = $m->manageRecordWithPagination("services");
	$rows = $result["rows"];
	if (count($rows) > 0) {
		$n = 1;
		foreach ($rows as $row) {
			if ($row["dep_id"]==$_SESSION["dep_id"]) {
			?>
				<tr>
			        <td><?php echo $n; ?></td>
			        <td><?php echo $row["ser_name"]; ?></td>
			        <td><?php echo $row["dep_name"]; ?></td>
			        <td><?php echo $row["price"]; ?></td>
			        <td>
			        	<a href="#" did="<?php echo $row['ser_id']; ?>" class="btn btn-danger btn-sm del_service">Delete</a>
						<a href="#" eid= "<?php echo $row['ser_id']; ?>" class="btn btn-info btn-sm edit_service" data-toggle="modal" data-target="#form_service">Edit</a>
			        </td>
			      </tr>
			<?php
			$n++;
			}
		}
		?>
		<?php
		exit();
	}
}
//..................Delete service...................//
if (isset($_POST["deleteService"])) {
	$m = new Manage();
	$result = $m->deleteRecord("services","ser_id",$_POST["id"]);
	echo $result;
}
//..............
if (isset($_POST["updateService"])) {
	$m = new Manage();
	$result = $m->getSingleRecord("services","ser_id",$_POST["id"]);
	echo json_encode($result);
	exit();
}

//Update Record after getting data
if (isset($_POST["update_service"])) {
	$m = new Manage();
	$id = $_POST["ser_id"];
	$name = $_POST["update_service"];
	$dep = $_POST["select_dep"];
	$price = $_POST["service_price"];
	$result = $m->update_record("services",["ser_id"=>$id],["dep_id"=>$dep,"ser_name"=>$name,"price"=>$price]);
	echo $result;
}

//......................Employees....................//
if (isset($_POST["manageEmployees"])) {
	$m = new Manage();
	$result = $m->manageRecordWithPagination("emp_reg");
	$rows = $result["rows"];
	if (count($rows) > 0) {
		$n = 1;
		foreach ($rows as $row) {
			if ($row["dep_id"]==$_SESSION["dept_id"]) {
			?>
				<tr>
			        <td><?php echo $n; ?></td>
			        <td><?php echo $row["emp_id"]; ?></td>
			        <td><?php echo $row["name"]; ?></td>
					<td><?php echo $row["dep_name"]; ?></td>
			        <td><?php echo $row["address"]; ?></td>
					<td><?php echo $row["phone"]; ?></td>

			        <td>
			        	<a href="#" did="<?php echo $row['emp_id']; ?>" class="btn btn-danger btn-sm del_employees">Delete</a>
						<a href="#" eid= "<?php echo $row['emp_id']; ?>" class="btn btn-info btn-sm edit_service" data-toggle="modal" data-target="#form_employees">Edit</a>
			        </td>
			      </tr>
			<?php
			$n++;
			}
		}
		?>
		<?php
		exit();
	}

}

//..................Delete Employees...................//
if (isset($_POST["deleteEmployees"])) {
	$m = new Manage();
	$result = $m->deleteRecord("emp_reg","emp_id",$_POST["id"]);
	echo $result;
}
//echo $_SESSION["dept_id"];

//-------------------------Order new service--------------//

if (isset($_POST["getNewOrderItem"])) {
	$obj = new DBOperation();
	$rows = $obj->getAllRecord("services");
	?>
	<tr>
		    <td><b class="number">1</b></td>
		    <td>
		        <select id ="ser_id[]" name="ser_id[]" class="form-control form-control-sm ser_id">
		            <option value="">Choose Service</option>
		            <?php 
		            	foreach ($rows as $row) {
							if ($row["dep_id"] == $_SESSION["dep_id"]) {
								?><option value="<?php echo $row['ser_id']; ?>"><?php echo $row["ser_name"]; ?></option><?php
							}	
		            	}
		            ?>
		        </select>
			</td>
            <td><input name="price[]" type="text" class="form-control form-control-sm price" readonly></td>
			<td><input name="ser_name[]" type="hidden" class="form-control form-control-sm ser_name" readonly></td>
			<td>Rs.<span class="ser_amt" readonly>0</span></td>
    </tr>                                               
	<?php
	exit();
}


// get price
if (isset($_POST["getPrice"])) {
	$m = new Manage();
	$result = $m->getSingleRecord("services","ser_id",$_POST["id"]);
	echo json_encode($result);
	exit();
}

//ADD Other Services
// Add new for other service
if (isset($_POST["getNewOtherService"])) {
	?>
	<tr>
        <td><b id="number" class = "number1">1</b></td>
		<td><input name="other_ser_name[]" type="text" class="form-control form-control-sm other_ser_name" ></td>
        <td><input name="other_ser_price[]" type="text" class="form-control form-control-sm other_ser_price" ></td>
		<td>Rs.<span class="oth_ser_amt" readonly>0</span></td>
    </tr>                                     
	<?php
	exit();
}

// get Other price
//....................product added...........//

//...................
// Add new for other service
if (isset($_POST["getproduct"])) {
	?>
	<tr>
        <td><b id="number" class = "number2">1</b></td>
		<td><input name = "p_name[]" type = "text" class = "form-control form-control-sm p_name" ></input></td>
		<td><input name = "p_comp[]" type = "text" class = "form-control form-control-sm p_comp" ></input></td>
		<td><input name = "retailer[]" type = "text" class = "form-control form-control-sm retailer" ></input></td>
		<td><input name = "qty[]" type = "number" class = "form-control form-control-sm qty"></input></td>
        <td><input name="p_price[]" type = "text" class="form-control form-control-sm p_price" ></td>
		<td>Rs.<span class="amt" readonly>0</span></td>
    </tr>                                     
	<?php
	exit();
}

// get Other price
//..............................Invoice Form..............//

if ((isset($_POST["c_id"]))) {
	$comp_id = $_POST["c_id"];
	//arrayt
	$ar_p_comp = $_POST["p_comp"];
	$ar_p_name = $_POST["p_name"];
	$ar_retailer = $_POST["retailer"];
	$ar_qty = $_POST["qty"];
	$ar_p_price = $_POST["p_price"];
	$ar_other_ser_price = $_POST["other_ser_price"];
	$ar_other_ser_name = $_POST["other_ser_name"];
	$ar_price = $_POST["price"];
	$ar_ser_name = $_POST["ser_name"];

	$sub_total = $_POST["sub_total"];
	$new_total = $_POST["new_total"];
	$vis_charge = $_POST["vis_charge"];
	$discount = $_POST["discount"];
	$paid = $_POST["paid"];
	$due = $_POST["due"];
	$grand_total = $_POST["grand_total"];
	$payment_type = $_POST["payment_type"];

	$m = new Manage();
	echo $result = $m->storeInvoiceData($comp_id,$ar_p_comp,$ar_p_name,$ar_retailer,$ar_p_price,$ar_qty,$ar_other_ser_name,$ar_other_ser_price,$ar_price,
	$ar_ser_name,$sub_total,$new_total,$vis_charge,$discount,$paid,$due,$grand_total,$payment_type);

}
?>
