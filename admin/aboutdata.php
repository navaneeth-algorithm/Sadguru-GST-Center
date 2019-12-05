<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        About
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Products</li>
        <li class="active">About</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">
      <div class="col-xs-2"><label>Filters: </label></div>

                  <div class="col-xs-4">
                  <label for="buisnessname">Name</label>
                  <select id="buisnessname" onchange="bindgrid()">
                  <?php
                  $conn = $pdo->open();
                  try{
                    $stmt = $conn->prepare("SELECT 0  AS `Id`,'--ALL--' AS `Name` UNION ALL SELECT `Id`,`Name` FROM BusinessStatistics");
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
                  <a id ="nameadd" href="aboutname.php"  class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i>Add Name</a>
              </div>

              <div class="col-xs-4">
                  <label for="buisnessyear">Year</label>
                  <select id="buisnessyear" onchange="bindgrid()">
                  <?php
                  $conn = $pdo->open();
                  try{
                    $stmt = $conn->prepare("SELECT 0  AS `Id`,'--ALL--' AS `Year` UNION ALL SELECT `Id`,`Year` FROM BusinessStatisticsYear");
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
                  <a id ="yearadd" href="aboutyear.php"  class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i>Add Year</a>
              </div>
              <a href="#viewtable" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-eye"></i> View Table</a>
        <div class="col-xs-12">
          <div class="box">
            
            <div class="box-header with-border">
              <form method=POST action="aboutdata_add.php">
              <label for="addaboutname">Select Name</label>
              <select id="addaboutname" name="addaboutname" onchange="fetchYear()">
              <?php
                  $conn = $pdo->open();
                  try{
                    $stmt = $conn->prepare("SELECT 0  AS `Id`,'--SELECT--' AS `Name` UNION ALL SELECT `Id`,`Name` FROM BusinessStatistics");
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
              
              <label style="margin-left:20px" for="addaboutyear">Select Year</label>

              <select  id="addaboutyear" name="addaboutyear">

              </select>

              <input style="margin-left:20px" id="datapoints" name="datapoints" type="number" placeholder="Enter Data" required/>
              <button type="submit" class="btn btn-primary btn-sm btn-flat" name="add"><i class="fa fa-plus"></i>ADD</button>
              <!--<a id ="dataadd" onclick="addData()" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i>ADD</a> -->
              </form>
            </div>

            <div class="box-body">
              <table id="example1" class="table table-bordered">

              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
     
  </div>
  	<?php include 'includes/footer.php'; ?>
    <?php include 'includes/aboutdata_modal.php'; ?>
    <?php include 'includes/viewdatatable_modal.php'; ?>

</div>
<!-- ./wrapper -->

<?php include 'includes/scripts.php'; ?>
<script>
bindgrid(0);


function editModal(id){
  $('#edit').modal('show');
  getRow(id);
}

function bindgrid(ddlshow) {
		//var txtClientId = $("#txtCltId").val();  
		//var ddlshowval="10";
		//var userid =$("#userid").val(); 
		var buisnessnameid = $("#buisnessname").val();
    var buisnessyearid = $("#buisnessyear").val();  
    //console.log("Buisnesss name id "+buisnessnameid);
    //console.log("Buisnesss Year id "+buisnessyearid);
    document.getElementById('example1').innerHTML="";
    document.getElementById('example1').innerHTML="<thead><tr><th>#</th><th>Name</th><th>Year</th><th>Data</th><th>Tools</th></tr></thead><tbody>";
    var slno=0;
	//var ahref="";

    var url = "aboutdata_fetch.php?nameid="+buisnessnameid+"&yearid="+buisnessyearid;
    //alert(url);
    $.getJSON(url, function(result) {
    console.log(result);
    $.each(result, function(i, field) {
    //var id= field.Id;
   
   
 	  slno++;
	  
     ahref="<a class='Myedit' class='btn btn-primary btn-sm btn-flat class='edit' id='Myedit' href='javascript:editModal("+field.Id+")'><i class='fa fa-pencil' aria-hidden='true' ></i></a>  | <a onclick='javascript:confirmationDelete($(this));return false;'  href='javascript:DeleteRecord("+field.Id+")'><i class='fa fa-times' aria-hidden='true' ></i></a>";
    $("#example1").append("<tr><td>"+slno+"</td><td style='font-size: 16px;'>"+field.Name+"</td><td style='font-size: 16px;'>"+field.Year+"</td><td style='font-size: 16px;'>"+field.Data+"</td><td>"+ahref);
    
    $("#example1").append("</td></tr>");
    $("#example1").append("</tbody>");
	  	  
		  // document.getElementById("lbloutof").innerHTML=slno;
		  //document.getElementById("lblstart").innerHTML="1";
    });
	//gettotalRec();
    });
	

    }


  function DeleteRecord(pkval)
  {

  
						
    $('#delete').modal('show');
    var id = pkval;
    getRow(id);


  }


  $(function(){
  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'aboutdata_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.catid').val(response.Id);
      $('#edit_buisnessname').val(response.NameId);
      $('#edit_buisnessyear').val(response.YearId);
      $('#edit_data').val(response.Data);
     // $("#editor2").val(response.Description);
      //CKEDITOR.instances["editor2"].setData(response.Content);
      $('.catname').html(response.Name);
    }
  });
}
function addData(){

  var yearid = $("#addaboutyear").val();
  var nameid = $("#addaboutname").val();
  var datapoints = $("#datapoints").val();
  //alert(datapoints);
  if(datapoints.length!=0 && yearid!=null){
    alert(datapoints.length);

    $.ajax({
    type: 'POST',
    url: 'aboutdata_add.php',
    data: {
      adddata:"add",
      yearid:yearid,
      nameid:nameid,
      datapoints:datapoints
      },
    dataType: 'json',
    success: function(response){
      //$('.catid').val(response.Id);
      //$('#edit_buisnessname').val(response.NameId);
      //$('#edit_buisnessyear').val(response.YearId);
      //$('#edit_data').val(response.Data);
     // $("#editor2").val(response.Description);
      //CKEDITOR.instances["editor2"].setData(response.Content);
      //$('.catname').html(response.Name);
    }
  });

  }
  else{
    if(nameid==0)
    alert("Select Name");
    else if(yearid==null)
    alert("Data Already entered");
    else
    alert("Enter Data");

  }
 // $("#dataadd").attr("disabled", true);
  //alert("YEARID "+yearid+" NAMEID "+nameid);
 /*if(yearid==null){

   alert("Year is not Selected");
 }
 else{


 }*/

}
function fetchYear(){
  //alert("Hey");
  var nameid = $("#addaboutname").val();
  
  var url = "aboutdata_fetch.php?nameid="+nameid+"&cid=0";
    //alert(url);
    $('#addaboutyear').empty();
    $.getJSON(url, function(result) {
    console.log(result);
    $.each(result, function(i, field) {
    //var id= field.Id;
   
   
 	 // slno++;
	  
     //ahref="<a class='Myedit' class='btn btn-primary btn-sm btn-flat class='edit' id='Myedit' href='javascript:editModal("+field.Id+")'><i class='fa fa-pencil' aria-hidden='true' ></i></a>  | <a onclick='javascript:confirmationDelete($(this));return false;' class='delete' href='javascript:DeleteRecord("+field.Id+")'><i class='fa fa-times' aria-hidden='true' ></i></a>";
    //$("#example1").append("<tr><td>"+slno+"</td><td style='font-size: 16px;'>"+field.Name+"</td><td style='font-size: 16px;'>"+field.Year+"</td><td style='font-size: 16px;'>"+field.Data+"</td><td>"+ahref);
    //$("#addaboutyear").append("<option value="+field.Id+">"+field.Year+"</option>");
    $('#addaboutyear').append(new Option(field.Year, field.Id))
    //$("#example1").append("</td></tr>");
    //$("#example1").append("</tbody>");
	  	  
		  // document.getElementById("lbloutof").innerHTML=slno;
		  //document.getElementById("lblstart").innerHTML="1";
    });
	//gettotalRec();
    });
}
</script>
</body>
</html>
