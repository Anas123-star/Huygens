
?>

<div class="modal fade" id="form_invoice_record_ad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Invoice Number</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="invoice_record_ad_form" onsubmit="return false">
          <div class="form-group">
            <label>Invoice Number</label>
            <input type="number" class="form-control" name="invoice_no_ad" id="invoice_no_ad" placeholder="Enter the Invoice No and put 0 for all record">
          </div>
          <p></p>
          <button type="submit" id = "view_invoice" name = "view_invoice" class="btn btn-primary">View invoice record</button>
        </form>
        
      </div>
      
      <div class="modal-footer">
        <button id='closeModal' type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>