$(document).ready(function(){
	var DOMAIN = "http://huygens.in";
    $("#register_form").on("submit",function(){

        var status = false;
        var name = $("#name");
        var pass1 = $("#password1");
		var pass2 = $("#password2");
        var fname = $("#fathername");
        var mname = $("#mothername");
        var gender = $("#gender");
        var address = $("#address");
        var city = $("#city");
        var pincode = $("#pincode");
        var state = $("#state");
        var phone = $("#phone");
        var department = $("#department");
        var usertype = $("#usertype");
        var email = $("#email");
        var adhaar_no = $("#adhaar_no");
        var n_patt = new RegExp(/^[A-Za-z ]+$/);
        var e_patt = new RegExp(/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9_-]+(\.[a-z0-9_-]+)*(\.[a-z]{2,4})$/);


        if(gender.val() == "Select gender"){
			gender.addClass("border-danger");
			status = false;
		}
        else{
			gender.removeClass("border-danger");
			status = true;
		}

		if((address.val() == "")){
			address.addClass("border-danger");
			$("#ad_error").html("<span class='text-danger'>Please write your full address</span>");
			status = false;
		}
        else{
			address.removeClass("border-danger");
			$("#ad_error").html("");
			status = true;
        }

        if((usertype.val() == "Select user-type")){
			usertype.addClass("border-danger");
			$("#u_error").html("<span class='text-danger'>Please select admin or employee</span>");
			status = false;
		}
        else{
			usertype.removeClass("border-danger");
			$("#u_error").html("");
			status = true;
        }
		if((department.val() == "Select department")){
			department.addClass("border-danger");
			$("#d_error").html("<span class='text-danger'>Please select the department</span>");
			status = false;
		}
        else{
			department.removeClass("border-danger");
			$("#d_error").html("");
			status = true;
        }
		if((!n_patt.test(state.val()))){
			state.addClass("border-danger");
			$("#s_error").html("<span class='text-danger'>Please enter the state in correct format</span>");
			status = false;
		}
        else{
			state.removeClass("border-danger");
			$("#s_error").html("");
			status = true;
        }
        if((phone.val() == "") || (phone.val().length != 10)){
			phone.addClass("border-danger");
			$("#ph_error").html("<span class='text-danger'>Please Enter a valid Phone</span>");
			status = false;
		}
        else{
			phone.removeClass("border-danger");
			$("#ph_error").html("");
			status = true;
		}
        if((adhaar_no.val() == "") || (adhaar_no.val().length != 12)){
			adhaar_no.addClass("border-danger");
			$("#a_error").html("<span class='text-danger'>Please Enter a valid Adhaar No of 12 digits</span>");
			status = false;
		}
        else{
			adhaar_no.removeClass("border-danger");
			$("#a_error").html("");
			status = true;
		}

        if((pincode.val() == "") || (pincode.val().length != 6)){
			pincode.addClass("border-danger");
			$("#pin_error").html("<span class='text-danger'>Please Enter a valid Pincode of 6 digits</span>");
			status = false;
		}
        else{
			pincode.removeClass("border-danger");
			$("#pin_error").html("");
			status = true;
		}

        if(!n_patt.test(city.val())){
			city.addClass("border-danger");
			$("#c_error").html("<span class='text-danger'>Please Enter a valid city</span>");
			status = false;
		}
        else{
			city.removeClass("border-danger");
			$("#c_error").html("");
			status = true;
		}
		if(pass1.val() == "" || pass1.val().length < 9){
			pass1.addClass("border-danger");
			$("#p1_error").html("<span class='text-danger'>Please Enter more than 9 digit password</span>");
			status = false;
		}else{
			pass1.removeClass("border-danger");
			$("#p1_error").html("");
			status = true;
		}
		if(pass2.val() == "" || pass2.val().length < 9){
			pass2.addClass("border-danger");
			$("#p2_error").html("<span class='text-danger'>Please Enter more than 9 digit password</span>");
			status = false;
		}else{
			pass2.removeClass("border-danger");
			$("#p2_error").html("");
			status = true;
		}

		if ((pass1.val() == pass2.val()) && status == true) {
			$(".overlay").show();
			$.ajax({
				url : DOMAIN+"/include/process.php",
				method : "POST",
				data : $("#register_form").serialize(),
				success : function(data){
					if ($.trim(data)== "EMAIL_ALREADY_EXISTS") {
						$(".overlay").hide();
						alert("It seems like you email is already used");
					}else if($.trim(data)== "SOME_ERROR"){
						$(".overlay").hide();
						alert("Something Wrong");
					}else{
						$(".overlay").hide();
						alert("You have registered successfully and your userid is :" +data);
						window.location.href = encodeURI(DOMAIN+"/dashboard_admin.php?msg=You are registered Now you can login");
						
					}
				}
			})
		}else{
			pass2.addClass("border-danger");
			$("#p2_error").html("<span class='text-danger'>Password is not matched</span>");
			status = true;
		}

        if(!n_patt.test(fname.val())){
			fname.addClass("border-danger");
			$("#f_error").html("<span class='text-danger'>Please Enter valid father's name</span>");
			status = false;
		}
        else{
			fname.removeClass("border-danger");
			$("#f_error").html("");
			status = true;
		}
        if(!n_patt.test(mname.val())){
			mname.addClass("border-danger");
			$("#m_error").html("<span class='text-danger'>Please Enter valid Mother's name</span>");
			status = false;
		}
        else{
			mname.removeClass("border-danger");
			$("#m_error").html("");
			status = true;
		}

        if(!n_patt.test(name.val())){
			name.addClass("border-danger");
			$("#n_error").html("<span class='text-danger'>Please Enter a valid Name</span>");
			status = false;
		}
        else{
			name.removeClass("border-danger");
			$("#n_error").html("");
			status = true;
		}
		if(!e_patt.test(email.val())){
			email.addClass("border-danger");
			$("#e_error").html("<span class='text-danger'>Please Enter Valid Email Address</span>");
			status = false;
		}
        else{
			email.removeClass("border-danger");
			$("#e_error").html("");
			status = true;
		}

    })

	//For Login Part
	$("#login_form").on("submit",function(){
		console.log(DOMAIN);

		var id = $("#log_id");
		var pass = $("#log_password");
		var status = false;
		if (id.val() == "") {
			id.addClass("border-danger");
			$("#id_error").html("<span class='text-danger'>Please Enter Email Address</span>");
			status = false;
		}else{
			id.removeClass("border-danger");
			$("#id_error").html("");
			status = true;
		}
		if (pass.val() == "") {
			pass.addClass("border-danger");
			$("#p_error").html("<span class='text-danger'>Please Enter Password</span>");
			status = false;
		}else{
			pass.removeClass("border-danger");
			$("#p_error").html("");
			status = true;
		}
		if (status) {
			
			$(".overlay").show();
			$.ajax({
				url : DOMAIN+"/include/process.php",
				method : "POST",
				data : $("#login_form").serialize(),
				success : function(data){
					if($.trim(data) == "NOT_REGISTERD"){
						$(".overlay").hide();
						id.addClass("border-danger");
						$("#id_error").html("<span class='text-danger'>It seems like you are not registered</span>");
						status=false;
					}else if($.trim(data) == "PASSWORD_NOT_MATCHED"){
						$(".overlay").hide();
						pass.addClass("border-danger");
						$("#p_error").html("<span class='text-danger'>Please Enter Correct Password</span>");
						status = false;
					}else if($.trim(data) == "admin"){
						$(".overlay").hide();
						console.log(data);
						window.location.href = DOMAIN+"/dashboard_admin.php";
					}
					else if($.trim(data)=="employee"){
						$(".overlay").hide();
						console.log(data);
						window.location.href = DOMAIN+"/dashboard_employee.php";
					}
					else{
						alert(data);
						$(".overlay").hide();
						
					}
				}
			})

		}
	})


	//Fetch Department
	fetch_department();
	function fetch_department(){
		$.ajax({
			url : DOMAIN+"/include/process.php",
			method : "POST",
			data : {getdepartment:1},
			success : function(data){
				$("#select_dep").html(data);
				$("#select_department").html(data);
				$("#select_department_emp").html(data);
				$("#select_department_comp").html(data);
				$("#select_dep_signup").html(data);

			}
		})
	}

	//Fetch Employee Id
	fetch_emp_id();
	function fetch_emp_id(){
		$.ajax({
			url : DOMAIN+"/include/process.php",
			method : "POST",
			data : {getempid:1},
			success : function(data){
				$("#select_employee").html(data);
				
			}
		})
	}



	//Add department
	$("#department_form").on("submit",function(){
		if ($("#department_name").val() == "") {
			$("#department_name").addClass("border-danger");
			$("#dep_error").html("<span class='text-danger'>Please Enter Category Name</span>");
		}else{
			$.ajax({
				url : DOMAIN+"/include/process.php",
				method : "POST",
				data  : $("#department_form").serialize(),
				success : function(data){
					alert(data);
					if (data == "DEPARTMENT_ADDED") {
							$("#department_name").removeClass("border-danger");
							$("#dep_error").html("<span class='text-success'>New Category Added Successfully..!</span>");
							$("#dep_name").val("");
							fetch_department();
					}else{
						alert(data);
					}
				}
			})
		}
	})
	//ComplaintNumber

	$("#complaintnumber_form").on("submit",function(){
		if ($("#complaint_no").val() == "") {
			$("#complaint_no").addClass("border-danger");
			$("#cn_error").html("<span class='text-danger'>Please Enter Complaint Number</span>");
		}else{
			$.ajax({
				url : DOMAIN+"/include/process.php",
				method : "POST",
				data  : $("#complaintnumber_form").serialize(),
				success : function(data){
					if ($.trim(data) == "COMPLAINT_NOT_REGISTERD") {
						alert("There is no complaint of this complaint_id");
					}
					else if(data == "Not For You"){
						alert("This complaint is not for you");
					}
					else{
						window.location.href = DOMAIN+"/new_invoice.php";
					}
				}
			})
		}
	})

	$("#complaint_form").on("submit",function(){
		var status = false;
        var name = $("#cus_name");
        var address = $("#cus_address");
		var phone = $("#cus_phone");
		var n_patt = new RegExp(/^[A-Za-z ]+$/);
		if(!n_patt.test(name.val())){
			name.addClass("border-danger");
			$("#cn_error").html("<span class='text-danger'>Please Enter a Name</span>");
			status = false;
		}
		else if((address.val() == "")){
			address.addClass("border-danger");
			$("#ca_error").html("<span class='text-danger'>Please write your full address</span>");
			status = false;
		}
		else if((phone.val() == "") || (phone.val().length != 10)){
			phone.addClass("border-danger");
			$("#p_error").html("<span class='text-danger'>Please Enter a valid Phone</span>");
			status = false;
		}
        else{
			$.ajax({
				url : DOMAIN+"/include/process.php",
				method : "POST",
				data  : $("#complaint_form").serialize(),
				success : function(data){
					alert("Your complaint has been successfully registered with complaint_id : " + data);
					window.location.href = DOMAIN+"/dashboard_admin.php";
				}
			})
		}

	})

	$("#service_form").on("submit",function(){
		var status = false;
		var name = $("#service_name");
		var price = $("#service_price");
		var n_patt = new RegExp(/^[A-Za-z ]+$/);
		if(!n_patt.test(name.val())){
			name.addClass("border-danger");
			$("#n_error").html("<span class='text-danger'>Please Enter the service name</span>");
			status = false;
		}
		else if((price.val() == "")){
			price.addClass("border-danger");
			$("#p_error").html("<span class='text-danger'>Please first enter the price then enter price</span>");
			status = false;
		}
		else{
			$.ajax({
				url : DOMAIN+"/include/process.php",
				method : "POST",
				data  : $("#service_form").serialize(),
				success : function(data){
					alert(data);
			}
		})
		}

	})
	//Choosedepartment
	$("#choose_department_ser_form").on("submit",function(){
			$.ajax({
				url : DOMAIN+"/include/process.php",
				method : "POST",
				data  : $("#choose_department_ser_form").serialize(),
				success : function(data){
					window.location.href = DOMAIN+"/manage_service.php";
				}
			})
	})

	// Choose dept for employees
	$("#choose_department_emp_form").on("submit",function(){
		$.ajax({
			url : DOMAIN+"/include/process.php",
			method : "POST",
			data  : $("#choose_department_emp_form").serialize(),
			success : function(data){
				window.location.href = DOMAIN+"/manage_employees.php";
			}
		})
	})

	// Choose dept for complaints
	$("#choose_department_comp_form").on("submit",function(){
		$.ajax({
			url : DOMAIN+"/include/process.php",
			method : "POST",
			data  : $("#choose_department_comp_form").serialize(),
			success : function(data){
				window.location.href = DOMAIN+"complaint.php";
			}
		})
	})

	$("#invoice_record_ad_form").on("submit",function(){
		$.ajax({
			url : DOMAIN+"/include/process.php",
			method : "POST",
			data  : $("#invoice_record_ad_form").serialize(),
			success : function(data){
				window.location.href = DOMAIN+"/manage_invoice_admin.php";
			}
		})
	})

	$("#signup_form").on("submit",function(){
		$.ajax({
			url : DOMAIN+"/include/process.php",
			method : "POST",
			data  : $("#signup_form").serialize(),
			success : function(data){
				if ($.trim(data) == "SOME ERROR") {
					alert("Some Error");
				}
				else{
				$("#signup_form").trigger("reset");
				alert("You are successfully registered we will contact you soon for an interview");
				}
			}
		})
	})

})
