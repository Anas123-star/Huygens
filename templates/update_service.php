<!-- Modal -->
<div class="modal fade" id="form_service" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Services</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="update_service_form" onsubmit="return false">
          <div class="form-group">
            
            <label>Service Name</label>
            <input type="text" class="form-control" name="update_service" id="update_service" placeholder="Enter the name of service" require>
            <small id="n_error" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <input type = "hidden" name = "ser_id" id = "ser_id" value ="">
            <label>Price</label>
            <input type="number" class="form-control" name="service_price" id="service_price" placeholder="Enter the price of service" require>
            <small id="p_error" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label>Department</label>
            <select class="form-control" id="select_dep" name="select_dep"> 
            </select>
            <small id="d_error" class="form-text text-muted"></small>
          </div>

          <p></p>
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
        
      </div>
      <div class="modal-footer">
        <button id='closeModal' type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>