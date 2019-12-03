<!-- Add -->
<div class="modal fade" id="profile">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Admin Profile</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="profile_update.php?return=<?php echo basename($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
          		  <div class="form-group">
                  	<label for="email" class="col-sm-3 control-label">Email</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="email" name="email" value="">
                  	</div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>

                    <div class="col-sm-9"> 
                      <input type="password" class="form-control" id="password" name="password" value="">
                    </div>
                </div>
                <div class="form-group">
                  	<label for="firstname" class="col-sm-3 control-label">Name</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="firstname" name="firstname" value="">
                  	</div>
                </div>
  		<!--
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo:</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo">
                    </div>
                </div>
  		-->
                <hr>
                <div class="form-group">
                    <label for="curr_password" class="col-sm-3 control-label">Current Password:</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="curr_password" name="curr_password" placeholder="input current password to save changes" required>
                    </div>
                </div>
          	</div>
            <hr>
            <h4 class="modal-title"><b>Message from President</b></h4>
            <div class="form-group">
                    <label for="description" class="col-sm-3 control-label">Message</label>

                    <div class="col-sm-9">
                      <textarea id="editor1" cols=40 rows=10 value="" name="description" >
                      </textarea>
                    </div>
            </div>
            <hr>
            <h4 class="modal-title"><b>Settings</b></h4>
            <div class="form-group">
                    <label for="directorImages" class="col-sm-3 control-label">Director Images</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="dirImages" name="dirImages" placeholder="Folder Name" required>
                    </div>
          	</div>

            <div class="form-group">
                    <label for="reportFolder" class="col-sm-3 control-label">Report Folder</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="reportFolder" name="reportFolder" placeholder="Folder Name" required>
                    </div>
          	</div>

            <div class="form-group">
                    <label for="downloadFolder" class="col-sm-3 control-label">Download Folder</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="downloadFolder" name="downloadFolder" placeholder="Folder Name" required>
                    </div>
          	</div>


          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-success btn-flat" name="save"><i class="fa fa-check-square-o"></i> Save</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

