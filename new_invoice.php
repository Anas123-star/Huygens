<?php
include_once("./database/constants.php");
?>
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
        <script type = "text/javascript" src="./js/invoice.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body style="background-color:#002233;">
      <!--Nav bar-->
      <div class="overlay"><div class = "loader"></div></div>

        
        <?php include_once("./templates/header.php");?>
        <div class = "container">
            <div class = "row">
                <div class = "col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4>New Invoice</h4>
                        </div>
                        <div class="card-body" style = "box-shadow:0 0 25px 0 #002233;">
                            <form id = "get_invoice_data" name = "get_invoice_data" onsubmit = "return false">
                                <div class = "form-group row">
                                    <label class = "col-sm-3" align = "right">Invoice-Date</label>
                                    <div class = "col-sm-6">
                                        <input type="text" id = "invoice_date" name = "invoice_date" readonly class = "form-control form-control-sm" value = <?php echo date("Y-d-m");?> >
                                    </div>
                                </div>
                                <p></p>
                                <div class = "form-group row">
                                    <label class = "col-sm-3" align = "right">Comp_id</label>
                                    <div class = "col-sm-6">
                                        <input type="number" id = "c_id" name = "c_id" class = "form-control form-control-sm c_id" placeholder = "Enter the same complaint id that you have" required/>
                                    </div>
                                </div>
                                <p></p>
                                <div class="card" >
                                    <div class="card-body" style = "box-shadow:0 0 25px 0 lightgrey;">
                                        <h3>Make service list</h3>
                                        <table align="center" style="width:800px;">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th style="text-align:center;">Service Name</th>
                                                <th style="text-align:center;">Price</th>
                                            </tr>
                                            </thead>
                                            <tbody id="service_item">
                                               <!--<tr>
                                                    <td><b id="number">1</b></td>
                                                    <td>
                                                        <select name="ser_id[]" class="form-control form-control-sm">
                                                        </select>
                                                    </td>
                                                    <td><input name="price[]" type="text" class="form-control form-control-sm" readonly></td>
                                                    <td>Rs.1540</td>
                                                </tr>
                                                -->
                                            </tbody>
                                        </table>
                                        <center style="padding:10px;">
		                        	        <button id="add" name = "add" style="width:150px;" class="btn btn-success">Add</button>
		                        	        <button id="remove" name = "remove"style="width:150px;" class="btn btn-danger">Remove</button>
		                                </center>
                                    </div> 
                                </div>
                                <p></p>
                                <div class="card">
                                    <div class="card-body" style = "box-shadow:0 0 25px 0 lightgrey;">
                                        <h3>Make Other service list</h3>
                                        <table align="center" style="width:800px;">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th style="text-align:center;">Service Name</th>
                                                <th style="text-align:center;">Price</th>
                                            </tr>
                                            </thead>
                                            <tbody id="other_item">
                                            <!--
                                                <tr>
                                                    <td><b id="number">1</b></td>
                                                    <td>
                                                        <input name="other_ser_name[]" type="text" class="form-control form-control-sm" readonly>
                                                    </td>
                                                    <td>
                                                        <select name="did[]" class="form-control form-control-sm" readonly required/>
                                                            <option></option>
                                                        </select>
                                                    </td>
                                                    <td><input name="price[]" type="text" class="form-control form-control-sm" readonly></td>
                                                </tr>
                                            -->
                                            </tbody>
                                        </table>
                                        <center style="padding:10px;">
		                        	        <button id="add_other" name = "add_other" style="width:150px;" class="btn btn-success">Add</button>
		                        	        <button id="remove_other" name = "remove_other" style="width:150px;" class="btn btn-danger">Remove</button>
		                                </center>
                                    </div> 
                                </div>
                                <p></p>
                                <div class = "form-group row">
                                    <label class = "col-sm-3" align = "right">Sub-total</label>
                                    <div class = "col-sm-6">
                                        <input type="text" id = "sub_total" name = "sub_total" class = "form-control form-control-sm sub_total" readonly required/ >
                                    </div>
                                </div>
                                <p></p>
                               <div class="card">
                                    <div class="card-body" style = "box-shadow:0 0 25px 0 lightgrey;">
                                        <h3>Make Other Product list</h3>
                                        <table align="center" style="width:800px;">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th style="text-align:center;">Product Name</th>
                                                <th style="text-align:center;">Pro_company_name</th>
                                                <th style="text-align:center;">Retailer</th>
                                                <th style="text-align:center;">Qty</th>
                                                <th style="text-align:center;">price</th>
                                            </tr>
                                            </thead>
                                            <tbody id="product_item">
                                            <!--
                                                <tr>
                                                    <td><b id="number">1</b></td>
                                                    <td>
                                                        <input name="other_ser_name[]" type="text" class="form-control form-control-sm" readonly>
                                                    </td>
                                                    <td>
                                                        <select name="did[]" class="form-control form-control-sm" readonly required/>
                                                            <option></option>
                                                        </select>
                                                    </td>
                                                    <td><input name="price[]" type="text" class="form-control form-control-sm" readonly></td>
                                                </tr>
                                            -->
                                            </tbody>
                                        </table>
                                        <center style="padding:10px;">
		                        	        <button id="add_product" name = "add_product" style="width:150px;" class="btn btn-success">Add</button>
		                        	        <button id="remove_product" name = "remove_product" style="width:150px;" class="btn btn-danger">Remove</button>
		                                </center>
                                    </div> 
                                </div>
                                <p></p>
                                <div class = "form-group row">
                                    <label class = "col-sm-3" align = "right">New Total</label>
                                    <div class = "col-sm-6">
                                        <input type="text" id = "new_total" name = "new_total" class = "form-control form-control-sm new_total" readonly required/ >
                                    </div>
                                </div>
                                <p></p>
                                <div class = "form-group row">
                                    <label class = "col-sm-3" align = "right">Visiting Charge</label>
                                    <div class = "col-sm-6">
                                        <input type="text" id = "vis_charge" name = "vis_charge" class = "form-control form-control-sm vis_charge" readonly required/ >
                                    </div>
                                </div>
                                <p></p>
                                <div class = "form-group row">
                                    <label class = "col-sm-3" align = "right">Discount</label>
                                    <div class = "col-sm-6">
                                        <input type="number" id = "discount" name = "discount" class = "form-control form-control-sm discount"  >
                                    </div>
                                </div>
                                <p></p>
                                <div class = "form-group row">
                                    <label class = "col-sm-3" align = "right">Grand Total</label>
                                    <div class = "col-sm-6">
                                        <input type="number" id = "grand_total" name = "grand_total" class = "form-control form-control-sm grand_total" readonly required/ >
                                    </div>
                                </div>
                                <p></p>
                                <div class = "form-group row">
                                    <label class = "col-sm-3" align = "right">Paid</label>
                                    <div class = "col-sm-6">
                                        <input type="number" id = "paid" name = "paid" class = "form-control form-control-sm paid" placeholder = "Enter the amount paid" required/ >
                                    </div>
                                </div>
                                <p></p>
                                <div class = "form-group row">
                                    <label class = "col-sm-3" align = "right">Due</label>
                                    <div class = "col-sm-6">
                                        <input type="number" id = "due" name = "due" class = "form-control form-control-sm due" placeholder = "Enter the due payment" required/ >
                                    </div>
                                </div>
                                <p></p>
                                <div class = "form-group row">
                                    <label class = "col-sm-3" align = "right">Payment Method</label>
                                    <div class = "col-sm-6">
                                        <select name="payment_type" id = "payment_type" class="form-control form-control-sm payment_type" required/>
                                            <option value = "">Choose payment type </option>
                                            <option>Cash</option>
                                            <option>Online Payment</option>
                                        </select>
                                    </div>
                                </div>
                                <p></p>
                                <center>
                                    <input type="submit" id="invoice_form" name = "invoice_form" style="width:150px;" class="btn btn-info" value="Order">
                                    <input type="submit" id="print_invoice" style="width:150px;" class="btn btn-success d-none" value="Print Invoice">
                                </center>
                            </form>
                            
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
          
    </body>
</html>
