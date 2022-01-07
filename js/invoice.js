$(document).ready(function(){
	var DOMAIN = "http://huygens.in/Huygens/";
	addNewRow();
	addNewRow_other();
	addNewRow_product();
	$("#add").click(function(){
		addNewRow();
	})
	
// Add new row for SERVICE
	function addNewRow(){
		$.ajax({
			url : DOMAIN+"/include/process.php",
			method : "POST",
			data : {getNewOrderItem:1},
			success : function(data){
				$("#service_item").append(data);
				var n = 0;
				$(".number").each(function(){
					$(this).html(++n);
				})
			}
		})
	}

	$('#remove').click(function(){
		var x = 0;
		$(".number").each(function(){
			$(this).html(++x);
		})
		if(x!=1){
			
			$("#service_item").children("tr:last").remove();
			calculate(0,0);
		}
		else{
			alert("This last row cannot be deleted");
		}
	})

	$("#service_item").delegate(".ser_id","change",function(){
		var ser_id = $(this).val();
		var tr = $(this).parent().parent();
		$(".overlay").show()
		$.ajax({
			url : DOMAIN+"/include/process.php",
			method : "POST",
			dataType : "json",
			data : {getPrice:1,id:ser_id},
			success: function(data){
				if (ser_id == null) {
					tr.find(".price").val();
				}
				else{
					tr.find(".price").val(data["price"]);
					tr.find(".ser_name").val(data["ser_name"]);
					tr.find(".ser_amt").html(tr.find(".price").val());
					calculate(0,0);
				}
			}
		})

	})

	// ........................................For Other Services........................//

	//add new row for 
	$("#add_other").click(function(){
		addNewRow_other();
	})
	function addNewRow_other(){
		$.ajax({
			url : DOMAIN+"/include/process.php",
			method : "POST",
			data : {getNewOtherService:1},
			success : function(data){
				$("#other_item").append(data);
				var n = 0;
				$(".number1").each(function(){
					$(this).html(++n);
				})
			}
		})
	}

	$("#other_item").delegate(".other_ser_price","keyup",function(){
		var other_ser_price = $(this);
		var tr = $(this).parent().parent();
		if (isNaN(other_ser_price.val())) {
			alert("Please enter a valid quantity");
			other_ser_price.val(1);
		}
		else{
				tr.find(".oth_ser_amt").html(tr.find(".other_ser_price").val());
				calculate(0,0);
		}
	})
	$('#remove_other').click(function(){
		var y = 0;
			$(".number1").each(function(){
				$(this).html(++y);
			})
		if(y!=1){
			$("#other_item").children("tr:last").remove();
			calculate(0,0);
		}
		else{
			alert("Now it cannot be deleted");
		}
	})


	//.....................................................New product..............................//

	//add new row for 
	$("#add_product").click(function(){
		addNewRow_product();
	})
	
	function addNewRow_product(){
		$.ajax({
			url : DOMAIN+"/include/process.php",
			method : "POST",
			data : {getproduct:1},
			success : function(data){
				$("#product_item").append(data);
				var n = 0;
				$(".number2").each(function(){
					$(this).html(++n);
				})
			}
		})
	}
	$('#remove_product').click(function(){
		var z = 0;
		$(".number2").each(function(){
			$(this).html(++z);
		})
		if(z!=1){
			$("#product_item").children("tr:last").remove();
			calculate(0,0);
		}
		else{
			alert("it cannot be deleted");
		}
	})

	$("#product_item").delegate(".p_price","keyup",function(){
		var p_price = $(this);
		var tr = $(this).parent().parent();
				tr.find(".amt").html(p_price.val() * tr.find(".qty").val());
				calculate(0,0);
	})

	$("#product_item").delegate(".qty","keyup",function(){
		var qty = $(this);
		var tr = $(this).parent().parent();
		if (isNaN(qty.val())) {
			alert("Please enter a valid quantity");
			qty.val(1);
		}
		else{
				tr.find(".amt").html(qty.val() * tr.find(".p_price").val());
				calculate(0,0);
		}
	})

	function calculate(dis,paid){
		var ser_total = 0;
		var oth_ser_total = 0;
		var p_total = 0;
		var sub_total = 0;
		var discount = dis;
		var paid_amt = paid;
		var vis_charge = 50;
		var due = 0;
		$(".oth_ser_amt").each(function(){
			oth_ser_total = oth_ser_total + ($(this).html() * 1);
		})
		$(".ser_amt").each(function(){
			ser_total = ser_total + ($(this).html() * 1);
		})
		$(".amt").each(function(){
			p_total = p_total + ($(this).html() * 1);
		})
		$("#vis_charge").val(vis_charge);
		sub_total = ser_total+oth_ser_total;
		new_total = sub_total+p_total;
		grand_total = new_total - ((discount/100)*new_total);
		grand_total = grand_total+vis_charge;
		due = grand_total - paid_amt;
		$("#discount").val(discount);
		$("#sub_total").val(sub_total);
		$("#new_total").val(new_total);
		$("#grand_total").val(grand_total);
		$("#due").val(due);
	}

	$("#discount").keyup(function(){
		var discount = $(this).val();
		calculate(discount,0);
	})

	$("#paid").keyup(function(){
		var paid = $(this).val();
		var discount = $("#discount").val();
		calculate(discount,paid);
	})

	//........................Invoice Form .........................//
	$("#invoice_form").click(function(){
		var invoice = $("#get_invoice_data").serialize();

		if ($("#c_id").val() === "") {
			alert("please enter the complaint id:");
		}
		else if($("#paid").val() === ""){
			alert("please enter the paid amount:");
		}
		else{
			$.ajax({
				url : DOMAIN+"/include/process.php",
				method : "POST",
				data  : $("#get_invoice_data").serialize(),
				success : function(data){
					if (data < 0) {
						alert(data);
					}else{
						$("#get_invoice_data").trigger("reset");

						if (confirm("Do u want to print invoice ?")) {
							alert("ok");
							window.location.href = DOMAIN+"/include/invoice_bill.php?invoice_no="+data+"&"+invoice;;
						}
					}	
				}
			})
		}
	})
})