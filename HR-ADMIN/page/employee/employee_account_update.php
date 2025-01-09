<!--SIDEBAR OF THE SYSTEM-->
<?php
include "../sidebar1.php";
include "../../assets/employee_profile_query.php";
include "../../assets/update_employee_account.php";
include "../../assets/employee_history_query.php";

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
                <br>
                <div class="row flex-center">
                <form method="POST"  action="" enctype="multipart/form-data">
                    <input type="hidden" id="Id" name="Id" class="form-control" value="<?php echo$Id;?>" disabled >
                </form>
                <div class="card-body pt-0 mt-0">
                  <!-- Name -->
                  <a  href="employee_profile.php?edit=<?php echo $result['Id'];?>" data-toggle="tooltip" data-placement="top" title="View Personal Data Sheet">
                  <h3 href="employee_profile.php?edit=<?php echo $result['Id'];?>" class="mb-3 font-weight-bold"><center><strong><?php echo $result['employee_firstname'],' 
                  ',$result['employee_middlename'],' ', $result['employee_lastname'] ;?></strong></center></h3></a>
                  <h6 class="font-weight-bold cyan-text mb-4"><center><?php echo $result['employee_position'];?></center></h6>

                  <p class="mt-4 text-muted"> <center>Employee No:<?php echo $result['employee_id'];;?>
                      <br>Position: <?php echo $result['employee_position'];?>

                      <?php
                    ob_start();
                    include_once "../../assets/connection.php";
                    $conn = dbConnect();
                    $accountss = $conn->prepare("SELECT * FROM account WHERE Id = '$Id'");
                    $accountss->execute();
                    while($resultss = $accountss->fetch(PDO::FETCH_ASSOC)){
                    $Status= $resultss['employee_status'];
                    $salarycos= $resultss['employee_salarycos'];
                    $salgrade =$resultss['employee_salarygrade'];
                    $salstep =$resultss['employee_salarystep'];
                    $Status1 ="     <br>Salary Grade: $salgrade
                    <br>Salary Step:$salstep
                    <br>Salary: ";
                   
                    $COSJO ="  <br>COS Salary: $salarycos  ";
                    
                     if($Status == 'COS/JO'){
                        $Status =  $COSJO;
                    }else{
                        $Status =   $Status1;
                      }
                      echo '<tr>
                                    <td>'.$Status.'</td>
                                   
                            </tr>';
                    }
                    ob_end_flush();
                    ?>
                   <?php  
                                  ob_start();
                                  include_once "../../assets/connection.php";
                                  $conn = dbConnect();
                                  $account9 = $conn->prepare("SELECT * FROM sheet1 INNER JOIN account ON account.employee_salarygrade = sheet1.salary_id 
                                  AND account.employee_salarystep = sheet1.step WHERE Id = '$Id'");
                                  $account9->execute(); 
                                  while($result9 = $account9->fetch(PDO::FETCH_ASSOC)):;
                                  echo $result9['amount'];
                                  endwhile;?>
                      <br>Type: <?php echo $result['employee_type'];?>
                      <br>Status:  <?php echo $result['employee_status'];?> 
                      <br>Department: <?php echo $result['employee_department'];?> 
                      <br ><b>Account Status: <?php echo $result['employee_active'];?> </b></center></p>
                      <h6 class="font-weight-bold cyan-text mb-4"><center>Date Employed: <?php echo $result['employee_start'];?></center></h6>
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
                <h5 class="mb-0 font-weight-bold">Update Work Information</h5>
              </div>
              <!-- Card image -->
             
              <!-- Card content -->
              <div class="card-body card-body-cascade ">
               <!-- Edit Form -->
                <form method="POST"  action="">
                    <input type="hidden" id="Id" name="Idd" class="form-control" value="<?php echo$Id;?>"  >
                    <div class="row">
                    <div class="col-md-6">
                      <div class="form mb-0">
                        <input type="text" id="form2" class="form-control validate" name="employee_idd" value="<?php echo$employee_id;?>">
                        <label >Employee Id</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form mb-0">
                        <input type="text" id="form2" class="form-control validate" name="employee_positiond" value="<?php echo$employee_position;?>">
                        <label >Position</label>
                      </div>
                    </div>
                    <!-- Second column -->
                    <div class="col-md-6">
                      <div class="form mb-0">
                      <select class="form-control" id ="employee_status" name="employee_statusd" required>
                                    <option><?php echo $result['employee_status'];?></option>
                                    <option value="Contractual">Contractual</option>
                                    <option value="Casual">Casual</option>
                                    <option value="Temporay">Temporay</option>
                                    <option value="Permanent">Permanent</option>
                                    <option value="COS/JO">COS/JO</option>
                                </select> 
                                <label >Status</label>
                      </div>
                    </div>

                    <script>
                                $('#employee_status').change(function() {
                                  if( $(this).val() == 'default') {
                                      $('#employee_salarycos').prop( "disabled", false );
                                      $('#employee_salarygrade').prop( "disabled", true );
                                      $('#employee_salarystep').prop( "disabled", true );
                                  } else {       
                                      $('#employee_salarycos').prop( "disabled", true );
                                      $('#employee_salarygrade').prop( "disabled", false );
                                      $('#employee_salarystep').prop( "disabled", false );
                                     
                                  }
                              });
                                </script>

                  
                    <div class="col-md-6">
                      <div class="form mb-0">
                      <select class="form-control" id ="employee_type" name="employee_typed" required>
                                    <option><?php echo $result['employee_type'];?></option>
                                    <option value="Teaching Staff">Teaching Staff</option>
                                    <option value="Non-Teaching Staff">Non-Teaching Staff</option>
                      </select> 
                        <label >Type</label>
                      </div>
                    </div>  
                    <div class="col-md-6">
                      <div class="form mb-0">
                      <select class="form-control" id ="employee_actived" name="employee_actived" required>
                                    <option><?php echo $result['employee_active'];?></option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select> 
                        
                        <label >Account Status</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form mb-0">
                      <select class="form-control" id ="employee_department" name="employee_departmentd" >
                                <?php  
                                  ob_start();
                                  include_once "../../assets/connection.php";
                                  $conn = dbConnect();
                                  $account = $conn->prepare("SELECT * FROM department");
                                  $account->execute(); ?> 
                                            <option ><?php echo $result['employee_department'];?></option>
                                    <?php while($result = $account->fetch(PDO::FETCH_ASSOC)):;?>
                                            <option value="<?php echo $result['dept_name'];?>"><?php echo $result['dept_name'];?></option>
                                        <?php endwhile;?>
                                </select>
                        <label >Department</label>
                      </div>
                    </div>

                    <?php
                                ob_start();
                                include_once "../../assets/connection.php";
                                $conn = dbConnect();
                                $account = $conn->prepare("SELECT * FROM account 
                              WHERE Id = '$Id'");
                                
                                $account->execute();
                                while($result = $account->fetch(PDO::FETCH_ASSOC)){
                                $Status= $result['employee_status'];
                                $employee_salarygrade = $result['employee_salarygrade'];
                                $employee_salarystep = $result['employee_salarystep'];
                                $employee_salarycos = $result['employee_salarycos'];
                                $Status1 ="     <div class='col-md-3'>
                                <div class='form mb-0'>
                                <select class='form-control' id ='employee_salarygrade' name='employee_salarygraded' >
                                        
                                                      <option valur='$employee_salarygrade' >$employee_salarygrade</option>
                                                      <option value='1'>1</option>
                                                      <option value='2'>2</option>
                                                      <option value='3'>3</option>
                                                      <option value='4'>4</option>
                                                      <option value='5'>5</option>
                                                      <option value='6'>6</option>
                                                      <option value='7'>7</option>
                                                      <option value='8'>8</option>
                                                      <option value='9'>9</option>
                                                      <option value='10'>10</option>
                                                      <option value='11'>11</option>
                                                      <option value='12'>12</option>
                                                      <option value='13'>13</option>
                                                      <option value='14'>14</option>
                                                      <option value='15'>15</option>
                                                      <option value='16'>16</option>
                                                      <option value='17'>17</option>
                                                      <option value='18'>18</option>
                                                      <option value='19'>19</option>
                                                      <option value='20'>20</option>
                                                      <option value='21'>21</option>
                                                      <option value='22'>22</option>
                                                      <option value='23'>23</option>
                                                      <option value='24'>24</option>
                                                      <option value='25'>25</option>
                                                      <option value='26'>26</option>
                                                      <option value='27'>27</option>
                                                      <option value='28'>28</option>
                                                      <option value='29'>29</option>
                                                      <option value='30'>30</option>
                                                      <option value='31'>31</option>
                                                      <option value='32'>32</option>
                                                      <option value='33'>33</option>

                                          </select> 
                                  <label >Salary Grade</label>
                                </div>
                              </div>
                              <div class='col-md-3'>
                                <div class='form mb-0'>
                                <select class='form-control' id ='employee_salarygrade' name='employee_salarystepd' >
                                        
                                                      <option valure='$employee_salarystep' >$employee_salarystep</option>
                                                      <option value='1'>1</option>
                                                      <option value='2'>2</option>
                                                      <option value='3'>3</option>
                                                      <option value='4'>4</option>
                                                      <option value='5'>5</option>
                                                      <option value='6'>6</option>
                                                      <option value='7'>7</option>
                                                      <option value='8'>8</option>
                                             
                                          </select> 
                                  <label >Salary Step</label>
                                </div>
                              </div>
                            ";
                            
                        $COSJO =" 
                        <div class='col-md-6'>
                        <div class='form mb-0'>
                        <div class='form mb-0'>
                          <input type='text' id='form2' class='form-control validate' name='employee_salarycosd' value='$employee_salarycos'>
                        </div>
                          <label >Salary</label>
                        </div>
                      </div>  ";
                        
                        if($Status == 'COS/JO'){
                            $Status =  $COSJO;
                        }else{
                            $Status =   $Status1;
                                                                                }
                            
                          echo $Status;
                        }
                        
                    ob_end_flush();
                    ?>
                     </div>
                     
                    </div>
                    <div class="modal-footer">
                        <a type="button" class="btn btn-primary" href="#" data-toggle="modal" data-target="#UpdateWorkInfo1" >Update</a>
                    </div>
                    <!-- Logout Modal-->
                  <div class="modal fade" id="UpdateWorkInfo1" tabindex="-1" role="dialog" aria-labelledby="UpdateWorkInfoModalLabel"
                      aria-hidden="true">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="UpdateWorkInfoModalLabel">Are You Sure to Proceed?</h5>
                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">×</span>
                                  </button>
                              </div>
                              <div class="modal-body">Select "Update" below to Update Work Information.</div>
                              <div class="modal-footer">
                                  <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                                  <button type="submit" class="btn btn-info"      id="UpdateWorkInfo" name="UpdateWorkInfo">Update</button>
                              </div>
                          </div>
                      </div>
                  </div>
                    </div>

                

                 </form>
                 <hr>
<br>

<div class="card card-cascade narrower">
<!-- Card image -->
  <div class="view view-cascade gradient-card-header mdb-color lighten-3">
    <h5 class="mb-0 font-weight-bold">Resign /Renew /Promoted Form</h5>
  </div>
  <div class="card-body card-body-cascade ">
    <form method="POST"  action="">
        <input type="hidden" id="Id" name="Idd" class="form-control" value="<?php echo$Id;?>"  >
      <div class="row">
        <div class="col-md-6">
          <div class="form mb-0">
              <select class="form-control" id ="work_history" name="work_history" required>
                <option></option>
                <option value="Resign">Resign</option>
                <option value="Renew">Renew</option>
                <option value="Promoted">Promote</option>
              </select> 
                <label >Resign/Renew/Promote</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form mb-0">
            <input type="date" id="date_work" class="form-control validate" name="date_work" required >
            <label >Date</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form mb-0">
              <select class="form-control" id ="employee_status" name="work_status" required>
                  <option><?php echo$employee_status;?></option>
                  <option value="Contractual">Contractual</option>
                  <option value="Casual">Casual</option>
                  <option value="Temporay">Temporay</option>
                  <option value="Permanent">Permanent</option>
                  <option value="COS/JO">COS/JO</option>
              </select> 
            <label >Position</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form mb-0">
            <input type="text" id="date_work" class="form-control validate" name="work_position" value="<?php echo$employee_position;?>" required >
            <label >Status</label>
          </div>
        </div>
        <div class="col-md-6">
        </div>
        <div class="col-md-6 text-right">
            <button type="submit" class="btn btn-primary  " id="History" name="History" >Update</button>
        </div>
      </div>
    </form>
  </div>
</div>
<hr>
<br>
 <?php
                    ob_start();
                    include_once "assets/connection.php";
                    $conn = dbConnect();
                    $account = $conn->prepare("SELECT * FROM account 
                   WHERE Id = '$Id'");
                    
                    $account->execute();
                    while($result = $account->fetch(PDO::FETCH_ASSOC)){
                    $acc_id =$result["Id"];
                    $Status= $result['employee_status'];
                    $Status1 ="<div class='card card-cascade narrower'>
                                  <div class='view view-cascade gradient-card-header mdb-color lighten-3'>
                                    <h5 class='mb-0 font-weight-bold'>Leave Credits Earned</h5>
                                  </div>
                                  <div class='card-body card-body-cascade '>
                                    <form method='POST'  action=''>
                                        <input type='hidden' id='Id' name='Idd' class='form-control' value='$Id'>
                                         <input type='hidden' id='cre_vbalance' name='cre_vbalance' class='form-control' value='$cre_vbalance'>
                                          <input type='hidden' id='cre_sbalance' name='cre_sbalance' class='form-control' value='$cre_sbalance'>

                                        <input type='hidden' id='cre_status' name='cre_status' class='form-control' value='Approved'>
                                    <div class='row'>
                                        <div class='col-md-6'>
                                          <div class='form mb-0'>
                                              <input type='text' id='cre_vearned' class='form-control validate' name='cre_vearned' value='1.25' >
                                              <label >Vacation Credits earned</label>
                                          </div>
                                        </div>
                                        <div class='col-md-6'>
                                          <div class='form mb-0'>
                                            <input type='text' id='cre_searned' class='form-control validate' name='cre_searned' value='1.25' >
                                            <label >Sick Credits earned</label>
                                          </div>
                                        </div>
                                        <div class='col-md-6'>
                                        </div>
                                        <div class='col-md-6 text-right'>
                                            <h6 class='font-weight-bold  mb-3'>Leave Credits Remaining: <b>$cre_vbalance</b></h6>
                                            <h6 class='font-weight-bold  mb-3'>Sick Credits Remaining: <b>$cre_sbalance</b></h6>
                                            <a type='button' class='btn btn-primary'
                                            href='#' data-toggle='modal' data-target='#LeaveEarned' >Update</a>
                                        </div>
                                    </div>


                                    <div class='modal fade' id='LeaveEarned' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel'
                                    aria-hidden='true'>
                                    <div class='modal-dialog' role='document'>
                                        <div class='modal-content'>
                                            <div class='modal-header'>
                                                <h5 class='modal-title' id='exampleModalLabel'>Are You Sure to Proceed</h5>
                                                <button class='close' type='button' data-dismiss='modal' aria-label='Close'>
                                                    <span aria-hidden='true'>×</span>
                                                </button>
                                            </div>
                                            <div class=modal-body>Reminder!!. Leave Credits Earned used only once a month .<br>
                                            Select Update below to Update Leave Credits Earned within this Month.</div>
                                            <div class='modal-footer'>
                                                <button class='btn btn-danger' type='button' data-dismiss='modal'>Cancel</button>
                                                <button type='submit' class='btn btn-info' id='LeaveEarned' name='LeaveEarned'>Update</<button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                    </form>
                                  </div>
                                </div>

                                ";
                                                   
                    $COSJO ="   ";
                    
                     if($Status == 'COS/JO'){
                        $Status =  $COSJO;
                    }else{
                        $Status =   $Status1;
                                                                             }
                        
                      echo '<tr>
                                    <td>'.$Status.'</td>
                                   
                            </tr>';
                    }
                    
                    ob_end_flush();
                    ?>

            </div>
            <!-- Card -->

          </div>
          <!-- Second column -->
            </div>
            <!-- Card -->

               <!-- Logout Modal-->
    


      </section>
      <!-- Section: Edit Account -->

    </div>
</div>
<!--ENABLE/DISABLE INPUT FORM-->
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
 </main>