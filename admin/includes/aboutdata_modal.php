<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add Name</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="aboutname_add.php">
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
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
              <h4 class="modal-title"><b>Edit About Data</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="aboutdata_edit.php">
                <input type="hidden" class="catid" name="id">
                <div class="form-group">
                    <label for="buisnessname" class="col-sm-3 control-label">Name</label>

                    <div class="col-sm-9">
                    <select id="edit_buisnessname" name="buisnessname" disabled>
                  <?php
                  $conn = $pdo->open();
                  try{
                    $stmt = $conn->prepare("SELECT `Id`,`Name` FROM BusinessStatistics");
                    $stmt->execute();
                    foreach($stmt as $row){
                    echo "<option value=".$row['Id'].">".$row['Name']."</option>";
                    
                    }
                  
                  }catch(PDOException $e){
                      echo $e->getMessage();
                    }

                    $pdo->close();

                  ?>
                  
                  </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="buisnessyear" class="col-sm-3 control-label">Year</label>

                    <div class="col-sm-9">
                   
                  <select id="edit_buisnessyear" name="buisnessyear" disabled>
                  <?php
                  $conn = $pdo->open();
                  try{
                    $stmt = $conn->prepare("SELECT `Id`,`Year` FROM BusinessStatisticsYear");
                    $stmt->execute();
                    foreach($stmt as $row){
                    echo "<option value=".$row['Id'].">".$row['Year']."</option>";
                    
                    }
                  
                  }catch(PDOException $e){
                      echo $e->getMessage();
                    }

                    $pdo->close();

                  ?>
                  </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="edit_name" class="col-sm-3 control-label">Data</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_data" name="data">
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
              <form class="form-horizontal" method="POST" action="aboutdata_delete.php">
                <input type="hidden" class="catid" name="id">
                <div class="text-center">
                    <p>DELETE About Data</p>
                    <h2 class="bold catname"></h2>
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
