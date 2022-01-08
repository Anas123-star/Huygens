$(document).ready(function(){
	var DOMAIN = "http://huygens.in";
	
	fetch_department();
	function fetch_department(){
		$.ajax({
			url : DOMAIN+"/include/process.php",
			method : "POST",
			data : {getdepartment:1},
			success : function(data){
				var choose = "<option value = ''> Choose department</option>";
				$("#select_dep").html(choose + data);		
				
			}
		})
	}



	manageService(1);
	function manageService(sn){
		$.ajax({
			url : DOMAIN+"/include/process.php",
			method : "POST",
			data : {manageService:1},
			success : function(data){
				$("#get_service").html(data);		
			}
		})
	}
	manageServiceEmp(1);
	function manageServiceEmp(sn){
		$.ajax({
			url : DOMAIN+"/include/process.php",
			method : "POST",
			data : {manageServiceEmp:1},
			success : function(data){
				$("#get_service_emp").html(data);		
			}
		})
	}
	manageInvoiceAdmin(1);
	function manageInvoiceAdmin(sn){
		$.ajax({
			url : DOMAIN+"/include/process.php",
			method : "POST",
			data : {manageInvoiceAdmin:1},
			success : function(data){
				$("#get_invoice_record_admin").html(data);		
			}
		})
	}



//................invoicerecord empl.........//
manageInvoiceEmp(1);
function manageInvoiceEmp(em){
	$.ajax({
		url : DOMAIN+"/include/process.php",
		method : "POST",
		data : {manageInvoiceEmp:1},
		success : function(data){
			$("#get_invoice_record_employee").html(data);		
		}
	})
}



	$("body").delegate(".del_service","click",function(){
		var did = $(this).attr("did");
		if (confirm("Are you sure ? You want to delete..!")) {
			$.ajax({
				url : DOMAIN+"/include/process.php",
				method : "POST",
				data : {deleteService:1,id:did},
				success : function(data){
					if ($.trim(data) == "DELETED") {
						alert("Service is deleted");
						manageService(1);
					}else{
						alert(data);
					}		
				}
			})
		}
	})

	//update service
	$("body").delegate(".edit_service","click",function(){
		var eid = $(this).attr("eid");
		$.ajax({
			url : DOMAIN+"/include/process.php",
			method : "POST",
			dataType : "json",
			data : {updateService:1,id:eid},
			success : function(data){
				console.log(data);
				$("#ser_id").val(data["ser_id"]);
				$("#update_service").val(data["ser_name"]);
				$("#select_dep").val(data["dep_id"]);
				$("#service_price").val(data["price"]);

			}
		})
	})

//Update Services
	$("#update_service_form").on("submit",function(){
		$.ajax({
				url : DOMAIN+"/include/process.php",
				method : "POST",
				data : $("#update_service_form").serialize(),
				success : function(data){
					if($.trim(data) == "UPDATED") {
						alert("Service Updated Successfully..!");
							window.location.href = "";
						}
					else{
						alert(data);
					}
				}
			})
		})
	
	//....................Employees...................//
	manageEmployees(1);
	function manageEmployees(en){
		$.ajax({
			url : DOMAIN+"/include/process.php",
			method : "POST",
			data : {manageEmployees:1},
			success : function(data){
				$("#get_employees").html(data);		
			}
		})
	}
	//.................Request...................//
	manageRequests(1);
	function manageRequests(vn){
		$.ajax({
			url : DOMAIN+"/include/process.php",
			method : "POST",
			data : {manageRequests:1},
			success : function(data){
				$("#get_requests").html(data);		
			}
		})
	}

	//----------------Complaint Record-------------//manageRequests(1);
	manageComplaints(1);
	function manageComplaints(vn){
		$.ajax({
			url : DOMAIN+"/include/process.php",
			method : "POST",
			data : {manageComplaints:1},
			success : function(data){
				$("#get_view_complaints").html(data);		
			}
		})
	}

	//...............Delete Requests.................//
	$("body").delegate(".del_requests","click",function(){
		var did = $(this).attr("did");
		if (confirm("Are you sure ? You want to delete..!")) {
			$.ajax({
				url : DOMAIN+"/include/process.php",
				method : "POST",
				data : {deleteRequests:1,id:did},
				success : function(data){
					if ($.trim(data) == "DELETED") {
						alert("Employee record is deleted");
						manageRequests(1);
					}else{
						alert(data);
					}		
				}
			})
		}
	})
	//.............Delete Employees...................//
	
	$("body").delegate(".del_employees","click",function(){
		var did = $(this).attr("did");
		if (confirm("Are you sure ? You want to delete..!")) {
			$.ajax({
				url : DOMAIN+"/include/process.php",
				method : "POST",
				data : {deleteEmployees:1,id:did},
				success : function(data){
					if ($.trim(data) == "DELETED") {
						alert("Requests record is deleted");
						manageEmployees(1);
					}else{
						alert(data);
					}		
				}
			})
		}
	})
	
})
