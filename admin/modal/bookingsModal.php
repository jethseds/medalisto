

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Status Reserved</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="../controller/controller.php">
                <input type="hidden" name="edit_reserved_id" id="edit_reserved_id">
                <div class="form-group">
                    <label for="edit_category_id" class="col-sm-3 control-label">Status</label>
                    <div class="col-sm-9">
                      <select class="form-control" name="status" id="status" required>
                        <option value="">Select Status</option>
                          <option value="0">Pending</option>
                          <option value="1">Confirmed</option>
                          <option value="2">Completed</option>
                        </select>
                    </div>
                </div>
         
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="statusreservedbooking"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Valid ID -->
<div class="modal fade" id="validid">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Valid ID</b></h4>
            </div>
            <div class="modal-body">
            <div class="showvalidid"></div>         
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Gcash -->
<div class="modal fade" id="gcash">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Gcash</b></h4>
            </div>
            <div class="modal-body">
            <div class="showgcash"></div>         
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Invalid PRoof Gcash -->
<div class="modal fade" id="invalidproofgcash">
    <div class="modal-dialog">
      <form class="form-horizontal" method="POST" action="../controller/controller.php">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Gcash</b></h4>
            </div>
            <div class="modal-body">
            <input type="hidden" name="invalidproofgcash_reserved_id" id="invalidproofgcash_reserved_id">   
            <h3 class="text-center">Send Another Proof of Payment</h3>      
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="invalidproofgcash"><i class="fa fa-check-square-o"></i> Update</button>
            </div>
        </div>
        </form>
    </div>
</div>

<!-- Invalid ID -->
<div class="modal fade" id="invalidid">
    <div class="modal-dialog">
      <form class="form-horizontal" method="POST" action="../controller/controller.php">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>ID</b></h4>
            </div>
            <div class="modal-body">
            <input type="hidden" name="invalidid_reserved_id" id="invalidid_reserved_id">   
            <h3 class="text-center">Upload Another Valid ID</h3>      
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="invalidid"><i class="fa fa-check-square-o"></i> Update</button>
            </div>
        </div>
        </form>
    </div>
</div>

<!-- Paypal -->
<div class="modal fade" id="paypal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Paypal</b></h4>
            </div>
            <div class="modal-body">
            <div class="showpaypal"></div>         
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="../controller/controller.php">
                <input type="hidden" name="delete_rooms_id" id="delete_rooms_id">
                <div class="text-center">
                    <p>DELETE ROOMS</p>
                    <h2 class="bold catname"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="deleterooms"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>