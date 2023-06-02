<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Rooms</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="../controller/controller.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="category_id" class="col-sm-3 control-label">Category</label>
                    <div class="col-sm-9">
                      <select class="form-control" name="category_id" required>
                        <option value="">Select Category</option>
                        <?php while ($row = $categorystmt->fetch()) { ?>
                          <option value="<?php echo $row['category_id'] ?>"><?php echo $row['category'] ?></option>
                        <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="images" class="col-sm-3 control-label">Image</label>
                    <div class="col-sm-9">
                      <input type="file" class="form-control" name="images" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-sm-3 control-label">Description</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="description" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="quantity" class="col-sm-3 control-label">Quantity</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" name="quantity" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="price" class="col-sm-3 control-label">Price</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" name="price" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="addrooms"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Edit Rooms</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="../controller/controller.php" enctype="multipart/form-data">
                <input type="hidden" name="edit_rooms_id" id="edit_rooms_id">
                <div class="form-group">
                    <label for="edit_category_id" class="col-sm-3 control-label">Category</label>
                    <div class="col-sm-9">
                      <select class="form-control" name="edit_category_id" id="edit_category_id" required>
                        <option value="">Select Category</option>
                        <?php
                         while ($row = $categorystmt2->fetch()) { ?>
                          <option value="<?php echo $row['category_id'] ?>"><?php echo $row['category'] ?></option>
                        <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_images" class="col-sm-3 control-label">Image</label>
                    <div class="col-sm-9">
                      <input type="file" class="form-control" name="edit_images" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_name" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="edit_name" id="edit_name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_description" class="col-sm-3 control-label">Description</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="edit_description" id="edit_description" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_quantity" class="col-sm-3 control-label">Quantity</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" name="edit_quantity" id="edit_quantity" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_price" class="col-sm-3 control-label">Price</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" name="edit_price" id="edit_price" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="editrooms"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
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