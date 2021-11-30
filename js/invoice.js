$(document).ready(function(){
	var DOMAIN = "http://localhost/Huygens/";
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
		$("#service_item").children("tr:last").remove();
		calculate(0,0);
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
				tr.find(".price").val(data["price"]);
				tr.find(".ser_name").val(data["ser_name"]);
				tr.find(".ser_amt").html(tr.find(".price").val());
				calculate(0,0);
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
		$("#other_item").children("tr:last").remove();
		calculate(0,0);
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
		$("#product_item").children("tr:last").remove();
		calculate(0,0);
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
		$.ajax({
			url : DOMAIN+"/include/process.php",
			method : "POST",
			data  : $("#get_invoice_data").serialize(),
			success : function(data){
				alert(data);
			}
		})
	})
})