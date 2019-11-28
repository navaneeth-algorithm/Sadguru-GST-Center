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
              <form class="form-horizontal" method="POST" action="products_delete.php">
                <input type="hidden" class="prodid" name="id">
                <div class="text-center">
                    <p>DELETE PRODUCT</p>
                    <h2 class="bold name"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Edit Product</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="products_edit.php">
                <input type="hidden" class="prodid" name="id">
                <div class="form-group">
                  <label for="edit_name" class="col-sm-1 control-label">Name</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="edit_name" name="name">
                  </div>

                  <label for="edit_category" class="col-sm-1 control-label">Category</label>

                  <div class="col-sm-5">
                    <select class="form-control" id="edit_category" name="category">
                      <option selected id="catselected"></option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="photo" class="col-sm-1 control-label">Photo</label>

                  <div class="col-sm-5">
                    <img src="" id="edit_image" height="100px" weight="100px" />
                    <input type="hidden" id="image_value" value ="" />
                    <input type="file" id="photo" name="photo">
                  </div>
                </div>

                <div class="form-group">
                  <label for="price" class="col-sm-1 control-label">Discount</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" value="" id="edit_discount" name="discount" required>
                  </div>

                  <label for="photo" class="col-sm-1 control-label">Tax Rate</label>

                  <div class="col-sm-5">
                  <input type="text" class="form-control" value="" id="edit_taxrate" name="taxrate" required>
                  </div>

                </div>

                <div class="form-group">
                    <label for="stock" class="col-sm-1 control-label">Specification</label>

                      <div class="col-sm-5">
                        
                      </div>

                      
                      <div class="col-sm-5">
                      <label for="manufacture" class="col-sm-1 control-label">Manufacturer</label>
                        <select class="form-control" id="manufacture" name="manufacture" required>
                          <option value="-1" selected>- Select -</option>
                        </select>
                      </div>
                      <div class="col-sm-12">
                          <textarea id="edit_specification" name="specification" rows="10" cols="50" required></textarea>
                        </div>
                </div>

                <div class="form-group">
                  <label for="edit_price" class="col-sm-1 control-label">Rate</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="edit_price" name="price">
                  </div>
                  <label class="col-sm-1 control-label">Product Status</label>
                  <div class="col-sm-5">
                    <input type="radio" id="product_status_YES" name="productStatus" value="YES" />YES
                    <input type="radio" id="product_status_NO" name="productStatus" value="NO" />NO
                  </div>
                </div>

                <p><b>Description</b></p>
                <div class="form-group">
                  <div class="col-sm-12">
                    <textarea id="editor2" name="description" rows="10" cols="80"></textarea>
                  </div>
                  
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

