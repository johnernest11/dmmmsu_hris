<!--SIDEBAR OF THE SYSTEM-->
<?php
include "../sidebar.php";
include "../../assets/employee_leave_query.php";
?>

<!-- Begin Page Content -->
<div class="container-fluid">
      

      <!-- Page Heading -->
      <br>
      <h1 class="h3 mb-2 text-gray-800">EMPLOYEE APPLICATION LEAVE</h1>
      <hr>


<div class="container" id="detail">
    <div class="row">
        <div class="col-3">
        <div class="card mb-2">
                <img class="card-img-top"src="img/dmmmsu.png" alt="Card image cap">
        <div class="card-body">
                <h4 class="text-center"><strong><?php echo$employee_id;?></strong></h4>
                <p class="text-center">Employee No</p>
        <hr>
                <h4 class="text-center"><strong><?php echo$employee_firstname;?> <?php echo$employee_middlename;?>. <?php echo$employee_lastname;?>, <?php echo$employee_extensionname;?></h4>
                <p class="text-center">Fullname </p>
                <h4 class="text-center"><strong><?php echo$employee_position;?></strong></h4>
                <p class="text-center">Position</p>
            <hr>
        </div>
    </div>

</div><div class="col-9"  id="Pall">
               <div class="card mb-4">
                <div class="card-body">
                        <div class="tab-content" id="nav-tabContent">
                            <!-- PERSONAL iNFORMATION TAB -->
                        <div class="tab-pane fade show active" id="nav-information" role="tabpanel" aria-labelledby="nav-information-tab">
                                <form method="POST" class="needs-validation" action="assets/employee_leave_query.php" id="add_detainee" novalidate >
                                <a><center><strong>APPLICATION FOR LEAVE</strong></center></a>
                                <hr>
                                <div class="form-row">
                                <input type="text"  style="display: none;"class="form-control" id="validationCustom01" name="leave_id" value="<?php echo$leave_id;?>" disabled>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom01"> FIRST NAME</label>
                                        <input type="text" class="form-control" id="validationCustom01"  name="employee_firstname" value="<?php echo$employee_firstname;?>" disabled>
                                    </div>
                                    <div class="col-md-3 mb-2">
                                        <label for="validationCustom02">MIDDLE NAME</label>
                                        <input type="text" class="form-control" id="validationCustom02"  name="employee_middlename" value="<?php echo$employee_middlename;?>"  disabled> 
                                    </div>
                                    <div class="col-md-3 mb-2">
                                        <label for="validationCustom02">LAST NAME</label>
                                        <input type="text" class="form-control" id="validationCustom02"  name="employee_lastname" value="<?php echo$employee_lastname;?>"  disabled>
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <label for="validationCustom02">EXTENSION NAME</label>
                                        <input type="text" class="form-control" id="validationCustom02"  name="employee_extentionname" value="<?php echo$employee_extensionname;?>"  disabled>
                                    </div>
                                 </div>
                                <div class="form-row">
                                <div class="col-md-2 mb-3">
                                         </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom03">DATE OF FILLING</label>
                                        <input type="date" class="form-control" id="validationCustom03"  name="employee_birthdate" value="<?php echo$employee_datebirth;?>" required disabled>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom04">POSITION</label>
                                        
                                        <input type="text" class="form-control" id="validationCustom04" name="employee_position" value="<?php echo$employee_position;?>" disabled>
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="validationCustom05">SALARY (Monthly)</label>
                                        <input type="text" class="form-control" id="validationCustom05"  name="employee_salarygrade" value="<?php echo$employee_salarygrade;?>" required disabled>
                                    </div>
                                </div>
                                <hr>
                                <a><center><strong>DETAILS OF APPLICATION</strong></center></a>
                                <hr>
                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom03">TYPE OF LEAVE</label>
                                        <input type="text" class="form-control"  name="leave_status" value="<?php echo$leave_status;?>" required disabled>
                                        <!--<select class="form-control" style="display: none;" id="Type_leave"  name="leave_status" >
                                            <option></option>
                                            <option>Vacation</option>
                                            <option>Sick</option>
                                            <option>Maternity</option>
                                            <option>Other</option>
                                        </select> -->
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom04">DAYS APPLIED FOR VACATION  </label>
                                        <input type="number" class="form-control" id="validationCustom05"  name="leave_days" value="<?php echo$leave_vacation;?>" required disabled>
                                        <label for="validationCustom04">DAYS APPLIED FOR SICK </label>
                                        <input type="number" class="form-control" id="validationCustom05"  name="leave_days" value="<?php echo$leave_sick;?>" required disabled>
                                    
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom03">INCLUSIVE DATES FROM:</label>
                                        <input type="date" class="form-control" id="validationCustom03"  name="leave_date" value="<?php echo$leave_date;?>" required disabled>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom03">INCLUSIVE DATES TO:</label>
                                        <input type="date" class="form-control" id="validationCustom03"  name="leave_date_end" value="<?php echo$leave_date_end;?>" required disabled>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom0osition">WHERE LEAVE WILL BE SPENT</label>
                                        <input type="text" class="form-control" id="validationCustom05"  name="leave_destination" value="<?php echo$leave_destination;?>" disabled>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom05">CUMMUTATION</label>
                                        <input type="text" class="form-control" id="Cummutationtext"  name="leave_commutation" value="<?php echo$leave_commutation;?>" disabled>
                                        <select class="form-control" style="display: none;" id="Cummutation"  name="leave_commutation" >
                                            <option></option>
                                            <option>Requested</option>
                                            <option>Not Requested</option>
                                        </select> 
                                    </div>
                                </div>
                                <hr>
                                <a><center><strong>DETAILS OF ACTION APPLICATION</strong></center></a>
                                <hr>
                                <a>CERTFICATION OF LEAVE CREDIT</a>
                                <hr>
                                <div class="form-row">
                                    <div class="col-md-23mb-3">
                                        <label for="validationCustom03">Vacation Leave :<?php echo$employee_vacation;?></label>
                                        <input type="text" class="form-control" id="validationCustom03" name="employee_vacation" value="<?php echo$employee_vacation-$leave_vacation;?>" disabled>
                                        <label for="validationCustom03">Vacation Leave Remaining: </label>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom03">Sick Leave : <?php echo$employee_sick;?></label>
                                        <input type="text" class="form-control" id="validationCustom03" name="employee_sick" value="<?php echo$employee_sick-$leave_sick;?>" disabled>
                                        <label for="validationCustom03">Sick Leave Remaining: </label>
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="validationCustom03">Total: <?php echo$employee_sick + $employee_vacation ;?></label>
                                        <input type="hidden" class="form-control" id="validationCustom03" name="employee_residentialaddress" value="<?php echo$employee_sick + $employee_vacation ;?>" disabled>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom04">RECOMMENDATON</label>
                                        <input type="text" class="form-control" id="Recommendationtext"   value="<?php echo$leave_recommendation;?>" disabled>
                                        <select class="form-control" style="display: none;" id="Recommendation"  name="leave_recommendation" value="<?php echo$leave_recommendation;?>">
                                            <option></option>
                                            <option>Approval</option>
                                            <option>Disapproval</option>
                                        </select> 
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom04">Approved For.</label>
                                        <input type="text" class="form-control" id="Approve_fortext"  name="leave_approved_for" value="<?php echo$leave_approved_for;?>" disabled>
                                        <select class="form-control" style="display: none;" id="Approve_for"  name="leave_approved_for" >
                                            <option></option>
                                            <option>Days with pay</option>
                                            <option>Days without pay</option>
                                        </select> 
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom05">Disapproved Due To.</label>
                                        <input type="text" class="form-control" id="validationCustom05"  name="leave_disapproved_due" value="<?php echo$leave_disapproved_due;?>" disabled>
                                    </div>
                                </div>
                               <hr>
                               <a class="text-right"><center>Approved by Head/Dean/Supervisor of <?php echo$employee_department;?></center></a>
                                <div>
                            </div>
                     </div>
                </div>               
                </div>
        </div>


   

<script>
        $(document).ready(function(){
        $("#Show").click(function(){
            $( "input" ).prop( "disabled", false );
            $("#UpdateBtn").show();
            $("#Update").show();
            $("#Hide").show();
            $("#Show").hide();
            $("#Recommendation").show();
            $("#Recommendationtext").hide();
            $("#Approve_for").show();
            $("#Approve_fortext").hide();
            $("#Cummutation").show();
            $("#Cummutationtext").hide();
        });
        });

        $(document).ready(function(){
        $("#Hide").click(function(){
            $( "input" ).prop( "disabled", true);
            $("#UpdateBtn").hide();
            $("#Update").hide();
            $("#Show").show();
            $("#Hide").hide();
            $("#Recommendationtext").show();
            $("#Recommendation").hide();
            $("#Approve_fortext").show();
            $("#Approve_for").hide();
            $("#Cummutationtext").show();
            $("#Cummutation").hide();
        });
        });
</script>
