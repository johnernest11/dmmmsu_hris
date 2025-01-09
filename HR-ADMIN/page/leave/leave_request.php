<!--SIDEBAR OF THE SYSTEM-->
<?php
include "../sidebar1.php";
include "../../assets/leave_query.php";
include "../../assets/hr_profile_query.php";
?>
<main>
<!-- Begin Page Content -->
<div class="container-fluid">
      <!-- Page Heading -->
      
      <br>
      <!-- <h1 class="h3 mb-2 text-gray-800">APPLICATION FORM FOR LEAVE</h1> -->
      <hr>
      
            <div class="card card-cascade narrower">
            <div class="view view-cascade gradient-card-header mdb-color lighten-3">
            
                <h5 class="mb-0 font-weight-bold">APPLICATION FOR LEAVE</h5>
              </div>
              <div class="card-body card-body-cascade ">
                <form method="POST">
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                    <a><b>CS Form No.6</b></a>
                    <br>
                    <a>Revised 1984</a>
                    <h6 class="text-center text-danger"><b>INSTRUCTIONS</b></h6>
                    <a>1. Application for <b>Vacation or Sick Leave</b> for one full day or more shall be made in this form and to be accomplished at least in duplicate</a>
                    <br>
                    <a>2. Application for <b>Vacation Leave</b> shall be filed in advance or whenever possible for <b>five (5) days</b> before going such leave.</a>
                    <br>
                    <a>3. Application for <b>Sick Leave</b> filed in advance of exceeding <b>five (5) days</b> shall be accompanied by a medical certificate.
                    <br>In case of medical consultation was not availed of, an affidavit should be executed by the applicant.</a>
                    <br>
                    <a>4. An employee who is absent without approved leave shall not ne entitled to recieve his salary corresponding to the period of his unauthorized leave of absence.</a>
                    <br>                
                    <a>5. An application for leave of absence for <b> (30) calendar days or more </b> shall be accompanied by a clearance form.</a>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                    <div class="form-row">
                             <input type="hidden"  class="form-control" id="validationCustom01" name="account_id" value="<?php echo$Id;?>" >
                             <div class="col-md-3 border-right border-dark">
                                <label for="validationDefault01" class="form-label">OFFICE/AGENCY</label>
                                <h6><b>DMMMSU-MLUC</b></h6>
                            </div>
                            <div class="col-md-3">
                                <label for="validationDefault01" class="form-label">NAME (Last)</label>
                                <h6><b><?php echo$employee_lastname;?></b></h6>
                            </div>
                            <div class="col-md-3">
                                <label for="validationDefault02" class="form-label">(First)</label>
                                <h6><b><?php echo$employee_firstname;?></b></h6>
                            </div>
                            <div class="col-md-3">
                                <label for="validationDefault02" class="form-label">(Middle)</label>
                                <h6><b><?php echo$employee_middlename;?> <?php echo$employee_extensionname;?></b></b></h6>
                            </div>
                    </div>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                    <div class="form-row">
                            <div class="col-md-3 border-right border-dark">
                                <label for="validationDefault03" class="form-label">DATE OF FILLING</label>
                                <input type="date" class="form-control border-0 " id="validationDefault03" name="leave_filling" required>
                            </div>
                            <div class="col-md-5 border-right border-dark">
                                <label for="validationDefault03" class="form-label">POSITION</label>
                                <h6><b><?php echo$employee_position;?></b></h6> 
                            </div>
                            <div class="col-md-5 border-right border-dark">
                                <label for="validationDefault03" class="form-label">POSITION</label>
                                <h6><b><?php echo$employee_position;?></b></h6> 
                            </div>
                            <div class="col-md-4">
                                <label for="validationDefault03" class="form-label">SALARY</label>
                                <h6><b><?php  
                                  ob_start();
                                  include_once "assets/connection.php";
                                  $conn = dbConnect();
                                  $account9 = $conn->prepare("SELECT * FROM sheet1 INNER JOIN account ON account.employee_salarygrade = sheet1.salary_id 
                                  AND account.employee_salarystep = sheet1.step WHERE Id = '$Id'");
                                  $account9->execute(); 
                                  while($result9 = $account9->fetch(PDO::FETCH_ASSOC)):;
                                  echo $result9['amount'];
                                  endwhile;?></b></h6>
                            </div>
                    </div>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                    <a><center><strong>DETAILS OF APPLICATION</strong></center></a>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">   
                    <div class="form-row">
                    <div class="col-lg-6 col-md-6 mb-6 border-right border-dark">
                    <label for="validationDefault03" class="form-label">TYPE OF LEAVE</label>
                    <br>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="checkbox1" name="leave_type[]" value="Vacation">
                            <label class="form-check-label" for="checkbox1">Vacation</label>
                            </fieldset>
                            <br>
                                    <fieldset class="form-check ml-4">
                                    <input class="form-check-input" type="checkbox" id="checkbox2"  name="leave_reason" value="To seek employment">
                                    <label class="form-check-label" for="checkbox2">To seek employment</label>
                                    </fieldset>
                                    <div class="md-form ml-5">
                                        <label class="active" >Other (Specify)</label>
                                        <input type="text" id="form1"  name="leave_reason1" class="form-control" >
                                    </div>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="checkbox5"name="leave_type[]" value="Sick">
                            <label class="form-check-label" for="checkbox5">Sick</label>
                            </fieldset>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="checkbox6" name="leave_type[]" value="Maternity">
                            <label class="form-check-label" for="checkbox6">Maternity</label>
                            </fieldset>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="checkbox61" name="leave_type[]" value="Other" >
                            <label class="form-check-label" for="checkbox61">Other</label>
                            </fieldset>
                            <div class="md-form ml-5">
                                        <label class="active"  >Other (Specify)</label>
                                        <input type="text" id="form1"  name="leave_reason2" class="form-control">
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12 ">
                                <label for="validationDefault03" class="form-label">NUMBER OF WORKING DAYS APPLIED FOR:</label>
                                <input type="number" class="form-control border-top-0" id="validationDefault03" name="leave_days">
                                </div>
                                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                                <div class="col-md-6 ">
                                <label for="validationDefault03" class="form-label">DATE FROM:</label>
                                <input type="date" class="form-control border-0 " id="validationDefault03" name="leave_from" required>
                                </div>
                                <div class="col-md-6 ">
                                <label for="validationDefault03" class="form-label">DATE TO:</label>
                                <input type="date" class="form-control border-0 " id="validationDefault03" name="leave_to" required>
                                </div>
                               </div>
                    </div>
                            <div class="col-md-6">
                            <label for="validationDefault03" class="form-label">WHERE LEAVE WILL BE SPENT</label>
                            <br>
                            <label for="validationDefault03" class="form-label">IN CASE OF VACATION LEAVE</label>
                                <fieldset class="form-check ml-4">
                                <input class="form-check-input" type="checkbox" id="checkbox7" name="leave_spent[]" value="Within the Philippines">
                                <label class="form-check-label" for="checkbox7">Within the Philippines</label>
                                </fieldset>
                                <fieldset class="form-check ml-4">
                                    <input class="form-check-input" type="checkbox" id="checkbox151"  name="leave_spent[]" value="Abroad" >
                                    <label class="form-check-label" for="checkbox151">Abroad</label>
                                    </fieldset>
                                <div class="md-form ml-5">
                                        <label class="active">Abroad (Specify)</label>
                                        <input type="text" id="form1" name="leave_spent1" class="form-control">
                                </div>
                                <label for="validationDefault03" class="form-label">IN CASE OF SICK LEAVE</label>
                            <fieldset class="form-check ml-4">
                                    <input class="form-check-input" type="checkbox" id="checkbox152"  name="leave_spent[]" value="Hospital" >
                                    <label class="form-check-label" for="checkbox152">In Hospital</label>
                                    </fieldset>
                                <div class="md-form ml-5">
                                        <label class="active">In Hospital (Specify)</label>
                                        <input type="text" id="form3" name="leave_spent2" class="form-control">
                                </div>
                                <fieldset class="form-check ml-4">
                                    <input class="form-check-input" type="checkbox" id="checkbox153" name="leave_spent[]" value="Out Patient"    >
                                    <label class="form-check-label" for="checkbox153">Out Patient</label>
                                    </fieldset>
                                <div class="md-form ml-5">
                                        <label class="active">Out Patient (Specify)</label>
                                        <input type="text" id="form2" name="leave_spent3" class="form-control">
                                </div>
                                <label for="validationDefault03" class="form-label">COMMUTATION</label>
                                <div class="row">
                                <div class="col-md-6">
                                <fieldset class="form-check ml-4">
                                <input class="form-check-input" type="checkbox" id="checkbox8" name="leave_commutation[]" value="Requested">
                                <label class="form-check-label" for="checkbox8">Requested</label>
                                </fieldset>
                                </div>
                                <div class="col-md-6">
                                <fieldset>
                                <input class="form-check-input" type="checkbox" id="checkbox9" name="leave_commutation[]" value="Not Requested">
                                <label class="form-check-label" for="checkbox9">Not Requested</label>
                                </fieldset>
                                </div>
                                </div>
                                <br>
                                <br>
                                <br>
                                <br>
                                <hr style="height:2px; width:50%; border-width:0;color:gray;background-color:gray">
                                <p class="text-center" for="checkbox5">Signature of Applicant</p>
                               
                            </div>
                    </div>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                    <a><center><strong>DETAILS OF ACTION APPLICATION</strong></center></a>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                    <div class="form-row ">
                    <div class="col-lg-6 col-md-6 mb-6 border-right border-dark">
                    <label for="validationDefault03" class="form-label">CERTIFICATION OF LEAVE CREDIT</label>
                    <br>
                    <div class="row ml-5">
                        <div class="card" style="width: 7rem; height: 7rem;">
                        <div class="card-body">
                            <p class="card-title text-muted">Vacation</p>
                            <hr>
                            <!-- <h6 class="card-subtitle"><b>10</b></h6> -->
                        </div>
                        </div>
                        <div class="card" style="width: 7rem; height: 7rem;">
                        <div class="card-body">
                            <p class="card-title text-muted">Sick</p>
                            <hr>
                            <!-- <h6 class="card-subtitle"><b>10</b></h6> -->
                        </div>
                        
                        </div>
                        <div class="card" style="width: 7rem; height: 7rem;">
                        <div class="card-body">
                            <p class="card-title text-muted">Total</p>
                            <hr>
                            <!-- <h6 class="card-subtitle"><b>20</b></h6> -->
                        </div>
                        
                        </div>
                    </div>
                    <br>
                                <br>
                                <br>
                                <h6 class="text-center"><b>RAHFIE C. NULLAR</b></h6>
                                <hr style="height:2px; width:50%; border-width:0;color:gray;background-color:gray">
                                <p class="text-center" for="checkbox5">HRMO</p>
                            <br>
                                   
                    </div>
                    
                            <div class="col-md-6">
                            <label for="validationDefault03" class="form-label">RECOMMENDATION</label>
                                <fieldset class="form-check ml-4">
                                <input class="form-check-input" type="checkbox" id="checkbox5" name="leave_type" value="Sick" disabled>
                                <label class="form-check-label" for="checkbox5">Approval</label>
                                </fieldset>
                                <div class="md-form ml-5">
                                        <label class="form-check-label" for="checkbox6">Disapproved due to</label>
                                        <input type="text" id="form1" class="form-control" disabled>
                                </div> 
                                <br>
                                <br>
                                <br>
                                <hr style="height:2px; width:50%; border-width:0;color:gray;background-color:gray">
                                <p class="text-center" for="checkbox5">Authorized Official</p>
                               
                            </div>
                    </div>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">   
                    <div class="form-row">
                    <div class="col-lg-6 col-md-6 mb-6">
                    <label for="validationDefault03" class="form-label">APPROVED FOR:</label>
                    <br>
                    <fieldset class="form-check ml-4">
                                <input class="form-check-input" type="checkbox" id="checkbox5" name="leave_pay[]" value="Days with pay" disabled>
                                <label class="form-check-label" for="checkbox5">Days with pay</label>
                    </fieldset>
                    <fieldset class="form-check ml-4">
                                <input class="form-check-input" type="checkbox" id="checkbox5" name="leave_pay[]" value="Days without pay" disabled>
                                <label class="form-check-label" for="checkbox5">Days without pay</label>
                    </fieldset>
                    <div class="md-form ml-5">
                            <label class="form-check-label" for="checkbox6">Other (Specify)</label>
                            <input type="text" id="form1" name="leave_pay[]" class="form-control" disabled>
                    </div>       
                    </div>
                    
                            <div class="col-md-6">
                            <label for="validationDefault03" class="form-label">DISAPPROVED DUE TO:</label>
                                <div class="md-form ml-5">
                                        <input type="text" id="form1" class="form-control" disabled>
                                </div> 
                            </div>

                            
                            <input type="hidden" class="form-control" id="validationDefault03" name="leave_reco_head" value="Pending" required>
                            <input type="hidden" class="form-control" id="validationDefault03" name="month_date" value="<?php echo date("F")?>" required>
                    </div>
                    <div class="form-row">
                    <div class="col-lg-12 col-md-12 mb-12">
                    <br>
                    <br>
                                <hr style="height:2px; width:50%; border-width:0;color:gray;background-color:gray">
                                <p class="text-center" for="checkbox5">Signature</p>
                                <br>
                                <br>
                                <hr style="height:2px; width:50%; border-width:0;color:gray;background-color:gray">
                                <p class="text-center" for="checkbox5">AUTHORIZED OFFICIAL</p>
                            
                            <input type="hidden" class="form-control" id="validationDefault03" name="leave_recommendation" value="Pending" required>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 mb-6">
            
                            <input type="hidden" class="form-control" id="validationDefault03" name="leave_status" value="Pending" required>
                    </div>
                    
                    </div>
                    <div class="text-right" >
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit"name="submit" ><i class='fas fa-sign-in-alt'></i> Submit Form</button>
                            </div>
                    </div>
                </form>
            </div>
        </div>
        <br>
        </div>
</div>
</main>
   
