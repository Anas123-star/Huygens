<!-- Modal -->
<div class="modal fade" id="form_choose_department_emp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add departments</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="choose_department_emp_form" onsubmit="return false">
          <div class="form-group">
            <label>Department Name</label>
            <select class="form-control" id="select_department_emp" name="select_department_emp"> 
            </select>
            <small id="dep_error" class="form-text text-muted"></small>
          </div>
          <p></p>
          <button type="submit" class="btn btn-primary">View Employees</button>
        </form>
        
      </div>
      <div class="modal-footer">
        <button id='closeModal' type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>