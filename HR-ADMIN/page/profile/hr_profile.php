<!--SIDEBAR OF THE SYSTEM-->
<?php
include "../sidebar1.php";
include "../../assets/hr_profile_query.php";
include "../../assets/change_password.php";

?>
<main>
<div class="">
<h1 class="h3 mb-2 text-gray-800">PROFILE</h1>
<hr>
    <div class="container-fluid">

      <!-- Section: Edit Account -->
      <section class="section">
        <!-- First row -->
        <div class="row">
          <!-- First column -->
          <div class="col-lg-4 mb-4">

            <!-- Card -->
            <div class="card card-cascade narrower">

              <!-- Card image -->
             
              <!-- Card image -->

              <!-- Card content -->
              <div class="card-body card-body-cascade text-center">
              <img width="200" height="200" src="<?php echo $profile_picture;?>" class="mx-auto d-block img-thumbnail"  alt="Responsive-image" >
                <div class="row flex-center">
                
                <div class="card-body pt-0 mt-0">
                  <!-- Name -->
                  <form method="POST"  action="" enctype="multipart/form-data">
                    <input type="hidden" id="Id" name="Id" class="form-control" value="<?php echo$Id;?>" disabled >
                    <div class="form-group col-md-12">
                        <div class="form-group">
                            <input type="file" name="uploadfile" class="btn btn-alert  btn-sm"   id="Picture" value="<?php echo$employee_picture;?>"  required>
                            <button type="submit" class="btn btn-info btn-rounded btn-sm" id="changePicture" name="changePicture"  >Change Picture</button>
                    
                        </div>  
                    </div>
                </form>
                  <h3 class="mb-3 font-weight-bold"><center><strong><?php echo $result['employee_firstname'],' 
                  ',$result['employee_middlename'],' ', $result['employee_lastname'] ;?></strong></center></h3>
                  <h6 class="font-weight-bold cyan-text mb-4"><center><?php echo $result['employee_position'];?></center></h6>

                  <p class="mt-4 text-muted"> <center>Employee No:<?php echo $_SESSION['employee_id'];?>
                      <br>Salary: <?php echo $result['employee_salarygrade'];?>
                      <br>Type: <?php echo $result['employee_type'];?>
                      <br>Status:  <?php echo $result['employee_status'];?> 
                      <br>Department: <?php echo $result['employee_department'];?> </center></p>
                      <br>
                      <h6 class="font-weight-bold cyan-text mb-4"><center>Date Deployed: <?php echo $result['employee_start'];?></center></h6>
                  </div>
                </div>
              </div>
              <!-- Card content -->
                          </div>
            <!-- Card -->

          </div>
          <!-- First column -->

          <!-- Second column -->
          <div class="col-lg-8 mb-4">

            <!-- Card -->
            <div class="card card-cascade narrower">

              <!-- Card image -->
              <div class="view view-cascade gradient-card-header mdb-color lighten-3">
                <h5 class="mb-0 font-weight-bold">Change Password</h5>
              </div>
              <!-- Card image -->
             
              <!-- Card content -->
              <div class="card-body card-body-cascade ">
              <button type="button" class="btn btn-warning btn-sm  " id="Show" >Edit</button>
              <br>
              <hr>
                  <!-- Edit Form -->
                <form method="POST"  action="">
                    <input type="hidden" id="Id" name="Id" class="form-control" value="<?php echo $_SESSION['Id'];?>" disabled >
                    <div class="form-group col-md-12">
                        <div class="form-group">
                            <label>Password</label>
                            <div class="input-group" id="show_hide_password">
                                <input class="form-control" type="password" name="password" value="<?php echo $_SESSION['password'];?>">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></span>
                                </div>
                            </div>
                        </div>  
                    </div>
                     </div>
                    <div class="modal-footer">
                        <button type="submit" style="display: none;"class="btn btn-warning btn-sm " id="Hide" >Hide</button>
                        <button type="submit" style="display: none;"class="btn btn-primary btn-sm " id="UpdateBtn" name="UpdateBtn" >Change Password</button>
                    </div>
                 </form>

              </div>
              <!-- Card content -->

            </div>
            <!-- Card -->

          </div>
          <!-- Second column -->

        </div>
        <!-- First row -->

      </section>
      <!-- Section: Edit Account -->

    </div>
</div>
<!--ENABLE/DISABLE INPUT FORM-->
<script>
$(document).ready(function(){
  $("#Show").click(function(){
    $( "input" ).prop( "disabled", false );
    $("#UpdateBtn").show();
    $("#Hide").show();
    $("#Show").hide();
  });
});

$(document).ready(function(){
  $("#Hide").click(function(){
    $( "input" ).prop( "disabled", true);
    $("#UpdateBtn").hide();
    $("#Show").show();
    $("#Hide").hide();
  });
});
</script>
<!--SHOW/HIDE PASSWORD-->
<script>
$(document).ready(function() {
    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
});
</script>
 </main>