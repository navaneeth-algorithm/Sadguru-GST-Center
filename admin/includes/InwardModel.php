<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Inward Product</b></h4>
            </div>
            <div class="modal-body">
            
                          <?php  
                          $pid = -1;
                          if(isset($_GET['productid'])){
                            $pid = $_GET['productid'];
                          }
                          
                          ?>
                            <label for="productdate" class="">Date</label>
                            <input type="date" value="<?php echo date('Y-m-d'); ?>" class="" id="productdate" name="productdate"  required>
                            <input type="hidden" id="pid" value="<?php echo $pid; ?>" />
                        

                        
                            <label for="quantity" class="">Quantity</label>
                            <button onclick="quantityOperation('-')">-</button>
                            <input type="text" class="" value="0" id="quantity" name="quantity" required>
                            <button onclick="quantityOperation('+')">+</button>
                            <input type="hidden" value="<?php echo $productTotalStock;?>" id="totalstock" >
                            <input type="hidden" id="upperlimit" value="0" />
                            <input type="hidden" id="stockid" name="stockid" />
                        
            </div>
            <div class="modal-footer">
                    <input type="button" onclick="onInnward()" value="ADD" title="" id="innwardbutton" class='btn btn-success btn-sm  btn-flat'>
            </div>
        </div>
    </div>
</div>




<!-- Edit -->
<div class="modal fade" id="editInward">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" onclick="revertStock()" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Inward Product</b></h4>
            </div>
            <div class="modal-body">
            
                          <?php  
                          $pid = -1;
                          if(isset($_GET['productid'])){
                            $pid = $_GET['productid'];
                          }
                          
                          ?>
                            <label for="productdate" class="">Date</label>
                            <input type="date" value="<?php echo date('Y-m-d'); ?>" class="" id="Editproductdate" name="productdate"  required>
                            <input type="hidden" id="Editpid" value="<?php echo $pid; ?>" />
                        

                        
                            <label for="quantity" class="">Quantity</label>
                            <button onclick="quantityEditOperation('-')">-</button>
                            <input type="text" class="" value="0" id="Editquantity" name="Editquantity" required>
                            <button onclick="quantityEditOperation('+')">+</button>
                            <input type="hidden" value="<?php echo $productTotalStock;?>" id="Edittotalstock" >
                            <input type="hidden" id="Editupperlimit" value="0" />
                            <input type="hidden" id="Editstockid" name="Editstockid" />
                        
            </div>
            <div class="modal-footer">
                    <input type="button" onclick="onEditInnward()" value="Update" title="" id="Editinnwardbutton" class='btn btn-success btn-sm  btn-flat'>
            </div>
        </div>
    </div>
</div>