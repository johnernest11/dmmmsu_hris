<!--SIDEBAR OF THE SYSTEM-->
<?php
include "sidebar1.php";
include "assets/leave_query.php";
include "assets/profile_query.php";
?>
<main>
    <style type="text/css">
      img {
  position: absolute;
  left: 150px;
  top: 60px;
  z-index: 1;
}
    </style>
<!-- Begin Page Content -->
<div class="container-fluid">
      <!-- Page Heading -->
      
      <br>
      <!-- <h1 class="h3 mb-2 text-gray-800">APPLICATION FORM FOR LEAVE</h1> -->
      <hr>
      
            <div class="card card-cascade narrower">
              <div class="card-body card-body-cascade ">
                <form method="POST">

                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                    <a><b>Civil Service Form No.6</b></a>
                    <br>
                    <a>Revised 2020</a><br>
                    <img src="../PICTURE/DMMMSULogo.png" width="350" height="200">

                  <center> <p> <b>Republic of the Philippines</b></p>
                    <a><b>Don Mariano Memorial State University</b></a>
                    <br>
                    <a><b>Mid La Union Campus</b></a>
                    <br>
                    <a><b>Catbangen, City of San Fernando, La Union</b></a><br>
                    <br>
                    <h2><b>APPLICATION FOR LEAVE</b></h2></center>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                    <div class="form-row">

                             <input type="hidden"  class="form-control" id="validationCustom01" name="account_id" value="<?php echo$account_id;?>" >
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
                    <label for="validationDefault03" class="form-label">TYPE OF LEAVE TO BE AVAILED OF</label>
                    <br>
                    <br>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Vacation" name="leave_type[]" value="Vacation Leave">
                            <label class="form-check-label" for="Vacation"><b>Vacation Leave</b> <small>(Sec. 51, Rule XVI, Omnibus Rules Implementing E.O No. 292)</small></label>
                            </fieldset>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Mandatory" name="leave_type[]" value="Mandatory/Forced Leave">
                            <label class="form-check-label" for="Mandatory"><b>Mandatory/Forced Leave</b> <small>(Sec. 25, Rule XVI, Omnibus Rules Implementing E.O No. 292)</small></label>
                            </fieldset>
                             <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Sick" name="leave_type[]" value="Sick Leave">
                            <label class="form-check-label" for="Sick"><b>Sick Leave</b> <small>(Sec. 43, Rule XVI, Omnibus Rules Implementing E.O No. 292)</small></label>
                            </fieldset>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Maternity" name="leave_type[]" value="Maternity Leave">
                            <label class="form-check-label" for="Maternity"><b>Maternity Leave</b> <small>(R.A No. 11210/IRR issued by CSC, DOLE and SSS)</small></label>
                            </fieldset>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Paternity" name="leave_type[]" value="Paternity Leave">
                            <label class="form-check-label" for="Paternity"><b>Paternity Leave</b> <small>(R.A No. 8187/ CSC MC No. 71, s.1998 as amended)</small></label>
                            </fieldset>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Special" name="leave_type[]" value="Special Privilege Leave">
                            <label class="form-check-label" for="Special"><b>Special Privilege Leave</b> <small>(Sec. 21, Rule XVI, Omnibus Rules Implementing E.O. No. 292)</small></label>
                            </fieldset>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Solo" name="leave_type[]" value="Solo Parent Leave">
                            <label class="form-check-label" for="Solo"><b>Solo Parent Leave</b> <small>(RA No. 8972 / CSC MC No. 8, s. 2004)</small></label>
                            </fieldset>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Study" name="leave_type[]" value="Study Leave">
                            <label class="form-check-label" for="Study"><b>Study Leave</b> <small>(Sec. 68, Rule XVI, Omnibus Rules Implementing E.O. No. 292)</small></label>
                            </fieldset>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="VAWC" name="leave_type[]" value="10-Day VAWC Leave">
                            <label class="form-check-label" for="VAWC"><b>10-Day VAWC Leave</b> <small>(RA No. 9262 / CSC MC No. 15, s. 2005)</small></label>
                            </fieldset>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Rehabilitation" name="leave_type[]" value="Rehabilitation Leave">
                            <label class="form-check-label" for="Rehabilitation"><b>Rehabilitation Leave</b> <small>(Sec. 55, Rule XVI, Omnibus Rules Implementing E.O. No. 292)</small></label>
                            </fieldset>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Benifits" name="leave_type[]" value="Special Leave Benifits for Women">
                            <label class="form-check-label" for="Benifits"><b>Special Leave Benifits for Women</b> <small>(RA No. 9710 / CSC MC No. 25, s. 2010)</small></label>
                            </fieldset>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Emergency" name="leave_type[]" value="Special Emergency (Camality) Leave">
                            <label class="form-check-label" for="Emergency"><b>Special Emergency (Camality) Leave</b> <small>(CSC MC No. 2, s. 2012, as amended)</small></label>
                            </fieldset>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Adoption" name="leave_type[]" value="Adoption Leave">
                            <label class="form-check-label" for="Adoption"><b>Adoption Leave</b> <small>(R.A. No. 8552))</small></label>
                            </fieldset>
                            <div class="input-group">
                                  <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Others" name="leave_type[]" value="Others" >
                            <label class="form-check-label" for="Others">Others:</label>
                            </fieldset>
                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="form1" name="leave_spent1[]" class="form-control">     
                             </div>
                           
                            <br><br><br>
                            <br><br><br>
                            <div class="row">
                                <div class="col-md-12 ">
                                <label for="validationDefault03" class="form-label">NUMBER OF WORKING DAYS APPLIED FOR:</label>
                                <input type="number" class="form-control border-top-0" id="validationDefault03" name="leave_days" required>
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
                            <label for="validationDefault03" class="form-label">DETAILS OF LEAVE</label>
                            <br>
                            <label for="validationDefault03" class="form-label">&emsp;&emsp;<i>In case of Vacation/Special Privilege Leave:</i></label>
                            <div class="input-group">
                                 <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Philippines" name="leave_spent[]" value="Within the Philippines">
                            <label class="form-check-label" for="Philippines"><b>Within the Philippines</b><small> (Specify)</small> </label>
                            </fieldset>
                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0 "  id="form1" name="leave_spent1[]" class="form-control">     
                             </div>
                             <div class="input-group">
                                 <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Abroad" name="leave_spent[]" value="Abroad">
                            <label class="form-check-label" for="Abroad"><b>Abroad</b> <small> (Specify)</small></label>
                            </fieldset>
                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0 "  id="form1" name="leave_spent1[]" class="form-control">     
                             </div>
                            <label for="validationDefault03" class="form-label">&emsp;&emsp;<i>In case of Sick Leave:</i></label>
                            <div class="input-group">
                                 <fieldset class="form-check">
                            <input  class="form-check-input" type="checkbox" id="Hospital" name="leave_spent[]" value="In Hospital">
                            <label class="form-check-label" for="Hospital"><b>In Hospital</b> <small> (Specify Illness)</small> </label>
                            </fieldset>
                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0 "  id="form1" name="leave_spent1[]" class="form-control">     
                             </div>
                             <div class="input-group">
                                <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Patient" name="leave_spent[]" value="Out Patient">
                            <label class="form-check-label" for="Patient"><b>Out Patient</b> <small> (Specify Illness)</small></label>
                            </fieldset>
                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0 "  id="form1" name="leave_spent1[]" class="form-control">     
                             </div>
                            <label for="validationDefault03" class="form-label">&emsp;&emsp;<i>In case of Special Leave Benifits for Women:</i></label><br>
                            <div class="input-group mb-3">
                                 <span class="border-0" id="basic-addon2">&emsp;&emsp;&emsp;(Specify Illness)</span>
                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0"  id="form1" name="leave_spent1[]" class="form-control">     
                             </div>     
                            <label for="validationDefault03" class="form-label">&emsp;&emsp;<i>In case of Study Leave:</i></label>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Degree" name="leave_spent[]" value="Completion of Master`s Degree">
                            <label class="form-check-label" for="Degree"><b>Completion of Master`s Degree</b></label>
                            </fieldset>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Examination"name="leave_spent[]" value="BAR/Board Examination Review Other">
                            <label class="form-check-label" for="Examination"><b>BAR/Board Examination Review Other</b> </label>
                            </fieldset>
                            <div class="input-group">
                                 <span class=" border-0"  id="basic-addon2">&emsp;&emsp;&emsp;Purpose:</span>
                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0"  id="form1" name="leave_spent1[]" class="form-control">     
                             </div>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Monetization" name="leave_spent[]" value="Monetization of Leave Credits">
                            <label class="form-check-label" for="Monetization"><b>Monetization of Leave Credits</b></label>
                            </fieldset>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Terminal"name="leave_spent[]" value="Terminal Leave">
                            <label class="form-check-label" for="Terminal"><b>Terminal Leave</b> </label>
                            </fieldset>
                            <br>
                            <br>
                                <label for="validationDefault03" class="form-label">COMMUTATION</label>
                                <div class="row">
                                <div class="col-md-6">
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Not" name="leave_commutation[]" value="Not Requested">
                            <label class="form-check-label" for="Not"><b>Not Requested</b></label>
                            </fieldset>
                            <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="RequestedRequested" name="leave_commutation[]" value="Requested">
                            <label class="form-check-label" for="Requested"><b>Requested</b> </label>
                            </fieldset>
                                </div>
                                </div>
                                <br>
                                <br>
                                <br>
                                <br>
                                <hr style="height:2px; width:50%; border-width:0;color:gray;background-color:gray">
                                <p class="text-center" for="checkbox5">(Signature of Applicant)</p>
                               
                            </div>
                    </div>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                     <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                    <a><center><strong>DETAILS OF ACTION APPLICATION</strong></center></a>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                     <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                    <div class="form-row ">
                    <div class="col-lg-6 col-md-6 mb-6 border-right border-dark">
                    <label for="validationDefault03" class="form-label">CERTIFICATION OF LEAVE CREDITS</label>
                    <br>
                     <div class="input-group">
                                 <span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;As of:</span>
                             </div>
                    <div class="row ml-5 mr-5">
                        <table class="table table-bordered table-sm">
                            <th></th>
                            <th>Vacation Leave</th>
                            <th>Sick Leave</th>
                            <tr>
                                <td>Total Earned</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Less this application</td>
                                <td></td>
                                <td></td>
                            </tr>
                             <tr>
                                <td>Balance</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                                    </div>
                    <br>
                                <br>
                                <br>
                                <h6 class="text-center"><b> DR.RAHFIE C. NULLAR</b></h6>
                                <hr style="height:2px; width:50%; border-width:0;color:gray;background-color:gray">
                                <p class="text-center" for="checkbox5">Campus HRMO</p>
                            <br>
                                   
                    </div>
                    
                            <div class="col-md-6">
                            <label for="validationDefault03" class="form-label">RECOMMENDATION</label>
                                <fieldset class="form-check ml-4">
                                <input class="form-check-input" type="checkbox" id="checkbox5" name="leave_type" value="Sick" disabled>
                                <label class="form-check-label" for="checkbox5"><b> For Approval</b></label>
                                </fieldset>
                                <fieldset class="form-check ml-4">
                                <input class="form-check-input" type="checkbox" id="checkbox5" name="leave_type" value="Sick" disabled>
                                <label class="form-check-label" for="checkbox5"><b>For disapproval due to</b></label>
                                </fieldset>
                                <div class="md-form ml-5">
                                        <label class="form-check-label" for="checkbox6"></label>
                                        <input type="text" id="form1" class="form-control" disabled>
                                </div> 
                                <br>
                                <br>
                                <br>
                                <hr style="height:2px; width:50%; border-width:0;color:gray;background-color:gray">
                                <p class="text-center" for="checkbox5">Immediate Supervisor</p>
                               
                            </div>
                    </div>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">   
                    <div class="form-row">
                    <div class="col-lg-6 col-md-6 mb-6">
                    <label for="validationDefault03" class="form-label">APPROVED FOR:</label>
                    <br>
                    <fieldset class="form-check ml-4">
                                <input class="form-check-input" type="checkbox" id="checkbox5" name="leave_pay[]" value="Days with pay" disabled>
                                <label class="form-check-label" for="checkbox5"><b>Days with pay</b></label>
                    </fieldset>
                    <fieldset class="form-check ml-4">
                                <input class="form-check-input" type="checkbox" id="checkbox5" name="leave_pay[]" value="Days without pay" disabled>
                                <label class="form-check-label" for="checkbox5"><b>Days without pay</b></label>
                    </fieldset>
                     <div class="input-group">
                                <fieldset class="form-check ml-4">
                            <input class="form-check-input" type="checkbox" id="checkbox1" name="leave_pay[]" value="Others" disabled>
                            <label class="form-check-label" for="checkbox1"><b>Others</b> <small> (Specify)</small></label>
                            </fieldset>
                                <input class="form-control border-top-0 border-right-0 border-left-0 " type="text" id="form1" name="leave_spent1[]" class="form-control">     
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
                                
                                <br><h6 class="text-center"><b> DR.EDUARDO C. CORPUZ</b></h6>
                                <hr style="height:2px; width:50%; border-width:0;color:gray;background-color:gray">
                                <p class="text-center" for="checkbox5">Chancellor</p>
                            
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
   
