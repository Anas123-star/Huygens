<?php
  include_once("../database/constants.php");
  if (isset($_SESSION["emp_id"])) {
    if($_SESSION["emp_id"] == $_SESSION["employee_id"]){
      header("location:".DOMAIN."/new_invoice.php");
      
    }
    else{
      echo("This complaint is not for you");

    }

}
?>


