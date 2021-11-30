<!-- Modal -->


?>

<div class="modal fade" id="form_complaintnumber" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Complaint Number</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="complaintnumber_form" onsubmit="return false">
          <div class="form-group">
            <label>Complaint Number</label>
            <input type="text" class="form-control" name="comp_id" id="comp_id" placeholder="Enter the complaint number">
            <small id="cn_error" class="form-text text-muted"></small>
          </div>

          <p></p>
          <button type="submit" class="btn btn-primary">Add</button>
        </form>
        
      </div>
      
      <div class="modal-footer">
        <button id='closeModal' type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>