<!--SIDEBAR OF THE SYSTEM-->
<?php
include "../sidebar1.php";
include "../../assets/employee_profile_query.php";
?>
<main>
<!-- Begin Page Content -->
<div class="container-fluid">
      <!-- Page Heading -->
      <br>
      <h1 class="h3 mb-2 text-gray-800">PERSONAL INFORMATION</h1>
      <br>
      <hr>
<div class="container" id="detail">
    <div class="row">
    <div class="col-sm-3">
        <div class="">
         <!-- Card -->
        <div class="card profile-card">
              <!-- Avatar -->
            <div class="avatar z-depth-1-half mb-4">
                <img class="card-img-top"src="<?php echo $profile_picture;?>" alt="Card image cap" class="rounded-circle">
            </div>
            <div class="card-body pt-0 mt-0">
                <!-- Name -->
                <a  href="employee_account_update.php?edit=<?php echo $result['Id'];?>"
                 data-toggle="tooltip" data-placement="top" title="View Account">
                 <h3 class="mb-3 font-weight-bold"><center><strong><?php echo $result['employee_firstname'],' 
                ',$result['employee_middlename'],' ', $result['employee_lastname'] ;?></strong></center></h3></a>
                <h6 class="font-weight-bold cyan-text mb-4"><center><?php echo $result['employee_position'];?></center></h6>

                <p class="mt-4 text-muted"> <center>Employee No:<?php echo $result['employee_id'];?>
                    <br>Date Deployed: <?php echo $result['employee_start'];?>  </center></p>
                <p class="mt-4 text-muted"></p>
                <a class="btn btn-dark-green btn-block btn-sm" href="../../fpdf/PDS.php?edit=<?php echo $result['Id'];?>" target="_blank"> 
                <span class ="fa fa-print">Print</a>
            </div>

        </div>
    </div>
</div>

<div class="col-sm-9"  id="Pall">
<!-- NAVIGATION TAB LIST-->
<div class=" card-cascade cascading-admin-card user-card">

<!-- Card Data -->
<div class="admin-up d-flex justify-content-start">
  <i class="fas fa-eye info-color py-4 mr-3 z-depth-2"></i>
  <div class="data">
    <h5 class="font-weight-bold dark-grey-text">View Profile - <span class="text-muted">Personal
        Data Sheet
    </span></h5>
  </div>
</div>
<br>
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="true">Profile</a>
        <a class="nav-item nav-link" id="nav-family-tab" data-toggle="tab" href="#nav-family" role="tab" aria-controls="nav-family" aria-selected="false">Family Background</a>
        <a class="nav-item nav-link" id="nav-education-tab" data-toggle="tab" href="#nav-education" role="tab" aria-controls="nav-education" aria-selected="false">Educational Background</a>
        <a class="nav-item nav-link" id="nav-civil-service-tab" data-toggle="tab" href="#nav-civil-service" role="tab" aria-controls="nav-civil-service" aria-selected="true">Civil Service Eligibility</a>
        <a class="nav-item nav-link" id="nav-work-tab" data-toggle="tab" href="#nav-work" role="tab" aria-controls="nav-work" aria-selected="false">Work Experience</a>
        <a class="nav-item nav-link" id="nav-voluntary-tab" data-toggle="tab" href="#nav-voluntary" role="tab" aria-controls="nav-voluntary" aria-selected="false">Voluntary Work</a>
        <a class="nav-item nav-link" id="nav-learning-tab" data-toggle="tab" href="#nav-learning" role="tab" aria-controls="nav-learning" aria-selected="false">Learning and Development</a>
        <a class="nav-item nav-link" id="nav-other-tab" data-toggle="tab" href="#nav-other" role="tab" aria-controls="nav-other" aria-selected="true">Other Information</a>
        <a class="nav-item nav-link" id="nav-references-tab" data-toggle="tab" href="#nav-references" role="tab" aria-controls="nav-references" aria-selected="false">References</a>
        <a class="nav-item nav-link" id="nav-government-tab" data-toggle="tab" href="#nav-government" role="tab" aria-controls="nav-government" aria-selected="false">Goverment Issued Id</a>
        <a class="nav-item nav-link" id="nav-history-tab" data-toggle="tab" href="#nav-history" role="tab" aria-controls="nav-history" aria-selected="false">History</a>
    </div>
</nav>

<div class="tab-content" id="nav-tabContent">
<!--PERSONAL INFORMATION NAVIGATION TAB-->
  <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
  <br>
    <form method="POST" class="needs-validation" action=""  novalidate >
                                <label for="validationCustom01"  style="color:red"><strong><center> PERSONAL INFORMATION</center></strong></label>
                                <hr>
                                <div class="form-row">
                                <input type="text"  style="display: none;"class="form-control" id="validationCustom01" name="emp_Id" value="<strong><?php echo$Id;?></strong>"disabled>
                                    
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom01"> SURNAME</label>
                                        <input type="text" class="form-control" id="validationCustom01"  name="employee_firstname" value="<?php echo$employee_firstname;?>"disabled>
                                    </div>
                                    <div class="col-md-3 mb-2">
                                        <label for="validationCustom02">FIRST NAME</label>
                                        <input type="text" class="form-control" id="validationCustom02"  name="employee_middlename" value="<?php echo$employee_middlename;?>"disabled > 
                                    </div>
                                    <div class="col-md-3 mb-2">
                                        <label for="validationCustom02">MIDDLE NAME</label>
                                        <input type="text" class="form-control" id="validationCustom02"  name="employee_lastname" value="<?php echo$employee_lastname;?>"disabled >
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <label for="validationCustom02">EXTENSION NAME</label>
                                        <input type="text" class="form-control" id="validationCustom02"  name="employee_extensionname" value="<?php echo$employee_extensionname;?>"disabled >
                                    </div>
                                 </div>
                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom03">Date of Birth</label>
                                        <input type="text" class="form-control" id="validationCustom03"  name="employee_datebirth" value="<?php  echo$employee_datebirth;?>"disabled >
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom04">Place of Birth</label>
                                        
                                        <input type="text" class="form-control" id="validationCustom04" name="employee_placebirth" value="<?php echo$employee_placebirth;?>"disabled>
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="validationCustom05">Sex</label>    <select class="form-control"   id="employee_sex" name="employee_sex"disabled>
                                                <option><?php echo$employee_sex;?></option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                    </div>
                                    <div class="col-md-2 mb-3">
                                    <label for="exampleFormControlSelect1">Civil Status</label>
                                            <select class="form-control"  id="employee_civilstatus" name="employee_civilstatus"disabled>
                                                <option><?php echo$employee_civilstatus;?></option>
                                                <option>Single</option>
                                                <option>Married</option>
                                                <option>Widow/er</option>
                                                <option>Legally Separated</option>
                                                <option>Annulled</option>
                                            </select>
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="validationCustom05">Blood Type</label>
                                           <select class="form-control"  id="Bloodtype" name="employee_bloodtype"disabled>
                                                <option><?php echo$employee_bloodtype;?></option>
                                                <option>A</option>
                                                <option>AB</option>
                                                <option>AB+</option>
                                                <option>O</option>
                                                <option>O+</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-2 mb-3">
                                        <label for="validationCustom03">Height(m)</label>
                                        <input type="text" class="form-control" id="validationCustom05"  name="employee_height" value="<?php  echo$employee_height;?>"disabled >
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="validationCustom04">Weight(kg)</label>
                                        <input type="text" class="form-control" id="validationCustom05"  name="employee_weight" value="<?php  echo$employee_weight;?>"disabled >
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="validationCustom05">Citizenship</label>
                                        <input type="text" class="form-control" id="validationCustom05"  name="employee_citizenship" value="<?php  echo$employee_citizenship;?>"disabled>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom05">Telephone</label>
                                        <input type="text" class="form-control" id="validationCustom05"  name="employee_telephone" value="<?php  echo$employee_telephone;?>"disabled>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom03">Contact No.</label>
                                        <input type="text" class="form-control" id="validationCustom03"  name="employee_contact" value="<?php  echo$employee_contact;?>"disabled>
                                   </div>
                                </div>
                                <hr>
                                <label for="validationCustom03"><strong>RESIDENTIAL ADDRESS</strong></label>
                                <hr>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom03">House/Block/Lot No.</label>
                                        <input type="text" class="form-control" id="validationCustom03" name="employee_Rblock" value="<?php echo$employee_Rblock;?>"disabled>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom04">Street</label>
                                        <input type="text" class="form-control" id="validationCustom04"  name="employee_Rstreet" value="<?php echo$employee_Rstreet;?>"disabled>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom05">Subdivision/Village</label>
                                        <input type="text" class="form-control" id="validationCustom05"  name="employee_Rvillage" value="<?php echo$employee_Rvillage;?>"disabled>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom03">Barangay</label>
                                        <input type="text" class="form-control" id="validationCustom03" name="employee_Rbarangay" value="<?php echo$employee_Rbarangay;?>"disabled>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom04">City/Municipality</label>
                                        <input type="text" class="form-control" id="validationCustom04"  name="employee_Rcity" value="<?php echo$employee_Rcity;?>"disabled>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom05">Province</label>
                                        <input type="text" class="form-control" id="validationCustom05"  name="employee_Rprovince" value="<?php echo$employee_Rprovince;?>"disabled>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom05">Zipcode</label>
                                        <input type="text" class="form-control" id="validationCustom05"  name=" employee_Rzipcode" value="<?php echo$employee_Rzipcode;?>"disabled>
                                    </div>
                                </div>
                                <hr>
                                <label for="validationCustom03"><strong>PERMANENT ADDRESS</strong></label>
                                <hr>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom03">House/Block/Lot No.</label>
                                        <input type="text" class="form-control" id="validationCustom03" name="employee_Pblock" value="<?php echo$employee_Pblock;?>"disabled>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom04">Street</label>
                                        <input type="text" class="form-control" id="validationCustom04"  name="employee_Pstreet" value="<?php echo$employee_Pstreet;?>"disabled>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom05">Subdivision/Village</label>
                                        <input type="text" class="form-control" id="validationCustom05"  name="employee_Pvillage" value="<?php echo$employee_Pvillage;?>"disabled>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom03">Barangay</label>
                                        <input type="text" class="form-control" id="validationCustom03" name="employee_Pbarangay" value="<?php echo$employee_Pbarangay;?>"disabled>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom04">City/Municipality</label>
                                        <input type="text" class="form-control" id="validationCustom04"  name="employee_Pcity" value="<?php echo$employee_Pcity;?>"disabled>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom05">Province</label>
                                        <input type="text" class="form-control" id="validationCustom05"  name="employee_Pprovince" value="<?php echo$employee_Pprovince;?>"disabled>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom05">Zipcode</label>
                                        <input type="text" class="form-control" id="validationCustom05"  name="employee_Pzipcode" value="<?php echo$employee_Pzipcode;?>"disabled>
                                    </div>
                                </div>
                                <a><strong>GOVERMENT ID NO.</strong></a>
                                <hr>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom04">GSIS NO.</label>
                                        <input type="text" class="form-control" id="validationCustom04"  name="employee_gsis" value="<?php echo$employee_gsis;?>"disabled>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom05">PAG-IBIG NO.</label>
                                        <input type="text" class="form-control" id="validationCustom05"  name="employee_pagibig" value="<?php echo$employee_pagibig;?>"disabled>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom03">PHILHEALTH</label>
                                        <input type="text" class="form-control" id="validationCustom05"  name="employee_philhealth" value="<?php echo$employee_philhealth;?>"disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom04">SSS</label>
                                        <input type="text" class="form-control" id="validationCustom05"  name="employee_sss" value="<?php echo$employee_sss;?>"disabled>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom05">TIN</label>
                                        <input type="text" class="form-control" id="validationCustom05"  name="employee_tin" value="<?php echo$employee_tin;?>" disabled>
                                    </div>
                                    
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom04">Agency Employee No</label>
                                        <input type="text" class="form-control" id="validationCustom05"  name="employee_agency" value="<?php echo$employee_agency;?>"disabled>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom05">E-mail Address</label>
                                        <input type="text" class="form-control" id="validationCustom05"  name="employee_email" value="<?php echo$employee_email;?>" disabled>
                                    </div>
                                    
                                </div>
                                </form>
  </div>






<!--FAMILY BACKGROUND NAVIGATION TAB-->
    <div class="tab-pane fade" id="nav-family" role="tabpanel" aria-labelledby="nav-family-tab">
        <br>
        <label for="validationCustom01" style="color:red"><strong><center> FAMILY BACKGROUND</center></strong></label>
        
        <br>
      <hr>
                    <form method="POST" class="needs-validation"  novalidate >
                                <div class="form-row">
                                <input type="hidden"  class="form-control" id="validationCustom01" name="fam_id" value="<?php echo$fam_id;?>"disabled>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom01">SPOUSE`S SURNAME</label>
                                        <input type="text" class="form-control" id="validationCustom01"  name="spouse_surname" value="<?php echo$spouse_surname;?>"disabled>
                                    </div>
                                    <div class="col-md-3 mb-2">
                                        <label for="validationCustom02">FIRST NAME</label>
                                        <input type="text" class="form-control" id="validationCustom02"  name="spouse_firstname" value="<?php echo$spouse_firstname;?>"disabled > 
                                    </div>
                                    <div class="col-md-3 mb-2">
                                        <label for="validationCustom02">MIDDLE NAME</label>
                                        <input type="text" class="form-control" id="validationCustom02"  name="spouse_middlename" value="<?php echo$spouse_middlename;?>"disabled >
                                    </div>
                                    <div class="col-md-3 mb-2">
                                        <label for="validationCustom02">EXTENSION NAME</label>
                                        <input type="text" class="form-control" id="validationCustom02"  name="spouse_extension" value="<?php echo$spouse_extension;?>"disabled >
                                    </div>
                                 </div>
                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom03">OCCUPATION</label>
                                        <input type="text" class="form-control" id="validationCustom03"  name="spouse_occupation" value="<?php echo$spouse_occupation;?>"disabled >
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom04">EMP/BUSINESS.NAME</label>
                                        
                                        <input type="text" class="form-control" id="validationCustom04" name="spouse_business" value="<?php echo$spouse_business;?>"disabled>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom04">BUSINESS ADDRESS</label>
                                        
                                        <input type="text" class="form-control" id="validationCustom04" name="spouse_business_add" value="<?php echo$spouse_business_add;?>"disabled>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom05">TELEPHONE NO.</label>
                                        <input type="text" class="form-control" id="Sextext"  name="spouse_no" value="<?php echo$spouse_no;?>"disabled >
                                    </div>
                                </div>
                                <hr>
                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                    <label for="exampleFormControlSelect1">FATHER`S SURNAME</label>
                                         <input type="text" class="form-control" id="Civilstatustext" name="father_surname"  value="<?php echo$father_surname;?>" disabled >
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom05">FIRST NAME</label>
                                        <input type="text" class="form-control" id="Bloodtypetext"  name="father_firstname" value="<?php echo$father_firstname;?>"disabled >
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom03">MIDDLE NAME</label>
                                        <input type="text" class="form-control" id="validationCustom05"  name="father_middlename" value="<?php echo$father_middlename;?>"disabled >
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom04">EXTENSION NAME</label>
                                        <input type="text" class="form-control" id="validationCustom05"  name="father_extensionname" value="<?php echo$father_extensionname;?>"disabled >
                                    </div>
                                </div>
                                    <hr>
                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom05">MOTHER`S MAIDEN NAME</label>
                                     </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom05">SURNAME</label>
                                        <input type="text" class="form-control" id="validationCustom05"  name="mother_surname" value="<?php echo$mother_surname;?>"disabled>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom03">FIRST NAME</label>
                                        <input type="text" class="form-control" id="validationCustom03"  name="mother_firstname" value="<?php echo$mother_firstname;?>"disabled>
                                   </div>
                                   <div class="col-md-3 mb-3">
                                        <label for="validationCustom03">MIDDLE NAME</label>
                                        <input type="text" class="form-control" id="validationCustom03"  name="mother_middlename" value="<?php echo$mother_middlename;?>"disabled>
                                </div>
                            </div>
                            <hr>    
                           
                    </form>
        <hr>
        <div class="table-responsive ">
       <table class="table " >
                <thead>
                    <tr>
                        <th scope="col"><b>CHILDREN NAME</b></th>
                        <th scope="col"><b>DATE OF BIRTH</b></th>
                        
                    </tr>
                </thead>
                <tbody>
                <tr>
                        <td><?php echo$child_name?></td>
                        <td><?php echo$child_birthdate?></td>
                    </tr>
                    <tr>
                        <td><?php echo$child_name1?></td>
                        <td><?php echo$child_birthdate1?></td>
                    </tr>
                    <tr>
                        <td><?php echo$child_name2?></td>
                        <td><?php echo$child_birthdate2?></td>
                    </tr>
                    <tr>
                        <td><?php echo$child_name3?></td>
                        <td><?php echo$child_birthdate3?></td>
                    </tr>
                    <tr>
                        <td><?php echo$child_name4?></td>
                        <td><?php echo$child_birthdate4?></td>
                    </tr>
                    <tr>
                        <td><?php echo$child_name5?></td>
                        <td><?php echo$child_birthdate5?></td>
                    </tr>
                    <tr>
                        <td><?php echo$child_name6?></td>
                        <td><?php echo$child_birthdate6?></td>
                    </tr>
                    <tr>
                        <td><?php echo$child_name7?></td>
                        <td><?php echo$child_birthdate7?></td>
                    </tr>
                    <tr>
                        <td><?php echo$child_name8?></td>
                        <td><?php echo$child_birthdate8?></td>
                    </tr>
                    <tr>
                        <td><?php echo$child_name9?></td>
                        <td><?php echo$child_birthdate9?></td>
                    </tr>
                    <tr>
                        <td><?php echo$child_name10?></td>
                        <td><?php echo$child_birthdate10?></td>
                    </tr>
                    <tr>
                        <td><?php echo$child_name11?></td>
                        <td><?php echo$child_birthdate11?></td>
                    </tr>
                </tbody>
        </table>
    </div>
    </div>

<!--EDUCATION NAVIGATION TAB-->
    <div class="tab-pane fade" id="nav-education" role="tabpanel" aria-labelledby="nav-education-tab">
    <br>
    <label for="validationCustom01"  style="color:red"><strong><center>EDUCATIONAL BACKGROUND </center></strong></label>
       <br>
       <div class="table-responsive">
       <table class="table">
                <thead>
                    <tr>
                        <th scope="col"><b>LEVEL</b></th>
                        <th scope="col"><b>NAME OF SCHOOL</b></th>
                        <th scope="col"><b>BASIC EDUCATION/DEGREE/COURSE</b></th>
                        <th scope="col"><b>FROM</b></th>
                        <th scope="col"><b>TO</b></th>
                        <th scope="col"><b>HIGHEST LEVEL/UNIT EARNED</b></th>
                        <th scope="col"><b>YEAR GRADUATED</b></th>
                        <th scope="col"><b>SCHOLARSHIP /ACADEMIC HONOR RECIEVED</b></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">ELEMENTARY</th>
                        <td><?php echo$elem_name?></td>
                        <td><?php echo$elem_degree?></td>
                        <td><?php echo$elem_from?></td>
                        <td><?php echo$elem_to?></td>
                        <td><?php echo$elem_earned?></td>
                        <td><?php echo$elem_to?></td>
                        <td><?php echo$elem_honor?></td>
                        </tr>
                    <tr>
                        <th scope="row">SECONDARY</th>
                        <td><?php echo$sec_name?></td>
                        <td><?php echo$sec_degree?></td>
                        <td><?php echo$sec_from?></td>
                        <td><?php echo$sec_to?></td>
                        <td><?php echo$sec_earned?></td>
                        <td><?php echo$sec_to?></td>
                        <td><?php echo$sec_honor?></td>
                    </tr>
                    <tr>
                        <th scope="row">VOCATIONAL/TRADE COURSE</th>
                        <td><?php echo$voc_name?></td>
                        <td><?php echo$voc_degree?></td>
                        <td><?php echo$voc_from?></td>
                        <td><?php echo$voc_to?></td>
                        <td><?php echo$voc_earned?></td>
                        <td><?php echo$voc_to?></td>
                        <td><?php echo$voc_honor?></td>
                    </tr>
                    <tr>
                        <th scope="row">COLLEGE</th>
                        <td><?php echo$col_name?></td>
                        <td><?php echo$col_degree?></td>
                        <td><?php echo$col_from?></td>
                        <td><?php echo$col_to?></td>
                        <td><?php echo$col_earned?></td>
                        <td><?php echo$col_to?></td>
                        <td><?php echo$col_honor?></td>
                    </tr>
                    <tr>
                        <th scope="row">GRADUATE STUDIES</th>
                        <td><?php echo$gad_name?></td>
                        <td><?php echo$gad_degree?></td>
                        <td><?php echo$gad_from?></td>
                        <td><?php echo$gad_to?></td>
                        <td><?php echo$gad_earned?></td>
                        <td><?php echo$gad_to?></td>
                        <td><?php echo$gad_honor?></td>
                    </tr>
                     <tr>
                        <th scope="row">GRADUATE STUDIES</th>
                        <td><?php echo$gad_namee?></td>
                        <td><?php echo$gad_degreee?></td>
                        <td><?php echo$gad_frome?></td>
                        <td><?php echo$gad_toe?></td>
                        <td><?php echo$gad_earnede?></td>
                        <td><?php echo$gad_toe?></td>
                        <td><?php echo$gad_honore?></td>
                    </tr>
                    <hr>
                    </tbody>
        </table>
    </div>
    </div>
    
    <!--CIVIL SERVICE ELIGIBILITY NAVIGATION TAB-->
    <div class="tab-pane fade" id="nav-civil-service" role="tabpanel" aria-labelledby="nav-civil-service-tab">
         <br>
        <label for="validationCustom01"  style="color:red"><strong><center> CIVIL SERVICE ELIGIBILITY</center></strong></label>
        <hr>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-hover" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th><b>NAME OF ELIGIBILITY</b></th>
                                    <th><b>RATING</b></th>
                                    <th><b>DATE OF EXAMINATION</b></th>
                                    <th><b>PLACE OF EXAMINATION</b></th>
                                    <th><b>LICENSE NO</b></th>
                                    <th><b>DATE OF VALIDITY</b></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                ob_start();
                                include_once "../../assets/connection.php";
                                $conn = dbConnect();
                                $Id = $_GET['edit'];
                                $account = $conn->prepare("SELECT * FROM emp_eligibility INNER JOIN account ON emp_eligibility.account_id = account.Id 
                                WHERE account.Id = $Id");
                                $account->execute();
                                while($result = $account->fetch(PDO::FETCH_ASSOC)){
                                echo '<tr>
                                                <td>'.$result["eligibility_name"].'</td>
                                                <td>'.$result["eligibility_rating"].'</td>
                                                <td>'.$result["eligibility_date"].'</td>
                                                <td>'.$result["eligibility_place"].'</td>
                                                <td>'.$result["eligibility_number"].'</td>
                                                <td>'.$result["eligibility_validity"].'</td>
                                        </tr>';
                                }
                                
                                ob_end_flush();
                                ?>
                            </tbody>
                        </table>
                </div>
            </div>
    </div>
    

    
    <!--WORK EXPERCIENCE NAVIGATION TAB-->
    <div class="tab-pane fade" id="nav-work" role="tabpanel" aria-labelledby="nav-work-tab">
                <br>
            <label for="validationCustom01" style="color:red"><strong><center> WORK EXPERIENCE</center></strong></label>
            <hr>
            <div class="card-body">
                <div class="">
                <table class="table table-hover table-responsive work" id="" width="100%" cellspacing="0">
                             <thead>
                                <tr>
                                    <th><b>FROM</b></th>
                                    <th><b>TO</b></th>
                                    <th><b><center>POSITION TITLE</center></b></th>
                                    <th><b><center>DEPARTMENT/AGENCY/OFFICE/COMPANY
                                    (Write in full / Do not abbreviate)</center></b></th>
                                    <th><b>MONTHLY SALARY</b></th>
                                    <th><b>SALARY JOB/PAY GRADE</b></th>
                                    <th><b>STATUS OF APPOINTMENT</b></th>
                                    <th><b>GOV`T SERVICE</b></th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                ob_start();
                                include_once "../../assets/connection.php";
                                $conn = dbConnect();
                                $Id = $_GET['edit'];
                                $account = $conn->prepare("SELECT * FROM emp_work INNER JOIN account ON emp_work.account_id = account.Id 
                                WHERE account.Id = $Id ORDER BY emp_work.work_from DESC");
                                $account->execute();
                                while($result = $account->fetch(PDO::FETCH_ASSOC)){
                                echo '<tr>
                                                <td>'.$result["work_from"].'</td>
                                                <td>'.$result["work_to"].'</td>
                                                <td><center>'.$result["work_position"].'</center></td>
                                                <td><center>'.$result["work_department"].'</center></td>
                                                <td>'.$result["work_salary"].'</td>
                                                <td>'.$result["work_grade"].'</td>
                                                <td>'.$result["work_status"].'</td>
                                                <td>'.$result["work_gov"].'</td>
                                        </tr>';
                                }
                                
                                ob_end_flush();
                                ?>

                            </tbody>
                        </table>
                </div>
            </div>
    </div>

    <!--VOLUNTARY WORK NAVIGATION TAB-->
    <div class="tab-pane fade" id="nav-voluntary" role="tabpanel" aria-labelledby="nav-voluntary-tab">
            <br>
            <label for="validationCustom01" style="color:red"><strong>VOLUNTARY WORK OR INVOLVEMENT IN CIVIC /NON-GOVERMENT/PEOPLE/VOLUNTARY ORGANIZATION/S</strong></label>
            <hr>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-hover voluntary" id="" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th><b>NAME OF ORGANIZATION</b></th>
                                    <th><b>ADDRESS</b></th>
                                    <th><b>FROM</b></th>
                                    <th><b>TO</b></th>
                                    <th><b>NUMBER OF HOURS</b></th>
                                    <th><b>POSITION/ NATURE OF WORK</b></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                ob_start();
                                include_once "../../assets/connection.php";
                                $conn = dbConnect();
                                $Id = $_GET['edit'];
                                $account = $conn->prepare("SELECT * FROM emp_voluntary INNER JOIN account ON emp_voluntary.account_id = account.Id 
                                WHERE account.Id = $Id");
                                $account->execute();
                                while($result = $account->fetch(PDO::FETCH_ASSOC)){
                                echo '<tr>
                                                <td>'.$result["voluntary_name"].'</td>
                                                <td>'.$result["voluntary_address"].'</td>
                                                <td>'.$result["voluntary_from"].'</td>
                                                <td>'.$result["voluntary_to"].'</td>
                                                <td>'.$result["voluntary_hours"].'</td>
                                                <td>'.$result["voluntary_position"].'</td>
                                        </tr>';
                                }
                                
                                ob_end_flush();
                                ?>

                            </tbody>
                        </table>
                </div>
            </div>
    </div>

    <!--LEARNING AND DEVELOPMENT NAVIGATION TAB-->
    <div class="tab-pane fade" id="nav-learning" role="tabpanel" aria-labelledby="nav-learning-tab">
            <br>
            <label for="validationCustom01" style="color:red"><strong>LEARNING AND DEVELOPMENT(L&D) INTERVENTIONS/TRAINING PROGRAMS ATTENDED</strong></label>
            <hr>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-hover program" id="" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th><b>NAME</b></th>
                                    <th><b>FROM</b></th>
                                    <th><b>TO</b></th>
                                    <th><b>NUMBER OF HOURS</b></th>
                                    <th><b>TYPE OF LD
                                    (Managerial/
                                    Supervisory/
                                    Techinical/etc)</b></th>
                                    <th><b>CONDUCTED/SPONSORED BY</b></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                ob_start();
                                include_once "../../assets/connection.php";
                                $conn = dbConnect();
                                $Id = $_GET['edit'];
                                $account = $conn->prepare("SELECT * FROM emp_program_attended INNER JOIN account ON emp_program_attended.account_id = account.Id 
                                WHERE account.Id = $Id");
                                $account->execute();
                                while($result = $account->fetch(PDO::FETCH_ASSOC)){
                                echo '<tr>
                                                <td>'.$result["attend_name"].'</td>
                                                <td>'.$result["attend_from"].'</td>
                                                <td>'.$result["attend_to"].'</td>
                                                <td>'.$result["attend_hours"].'</td>
                                                <td>'.$result["attend_ld"].'</td>
                                                <td>'.$result["attend_sponsored"].'</td>
                                        </tr>';
                                }
                                
                                ob_end_flush();
                                ?>

                            </tbody>
                        </table>
                </div>
            </div>
    </div>

     <!--OTHER INFORMATION NAVIGATION TAB-->
     <div class="tab-pane fade" id="nav-other" role="tabpanel" aria-labelledby="nav-other-tab">
            <br>
            <label for="validationCustom01" style="color:red"><strong>OTHER INFORMATION</strong></label>
            <hr>
           
            <!--OTHER INFORMATION SPECIAL SKILLS and HOBBIES NAVIGATION TAB-->          
            <div class="table-responsive ">
       <table class="table " >
                <thead>
                    <tr>
                        <th scope="col"><b>SPECIAL SKILLS and HOBBIES</b></th>
                        <th scope="col"><b>NON-ACADEMIC DISTINCTION/RECOGNATION</b></th>
                        <th scope="col"><b>MEMBERSHIP IN ASSOCIATION/ORGANIZATION</b></th>
                        
                    </tr>
                </thead>
                <tbody>
                     <tr>
                        <td><?php echo$hobbies_name?></td>
                        <td><?php echo$distinction_name?></td>
                        <td><?php echo$organization_name?></td>
                    </tr>
                    <tr>
                        <td><?php echo$hobbies_name1?></td>
                        <td><?php echo$distinction_name1?></td>
                        <td><?php echo$organization_name1?></td>
                    </tr>
                    <tr>
                        <td><?php echo$hobbies_name2?></td>
                        <td><?php echo$distinction_name2?></td>
                        <td><?php echo$organization_name2?></td>
                    </tr>
                    <tr>
                        <td><?php echo$hobbies_name3?></td>
                        <td><?php echo$distinction_name3?></td>
                        <td><?php echo$organization_name3?></td>
                    </tr>
                    <tr>
                        <td><?php echo$hobbies_name4?></td>
                        <td><?php echo$distinction_name4?></td>
                        <td><?php echo$organization_name4?></td>
                    </tr>
                    <tr>
                        <td><?php echo$hobbies_name5?></td>
                        <td><?php echo$distinction_name5?></td>
                        <td><?php echo$organization_name5?></td>
                    </tr>
                    <tr>
                        <td><?php echo$hobbies_name6?></td>
                        <td><?php echo$distinction_name6?></td>
                        <td><?php echo$organization_name6?></td>
                    </tr>
                </tbody>
        </table>
    </div>
          
   </div>
    <!--REFERENCES NAVIGATION TAB-->
    <div class="tab-pane fade" id="nav-references" role="tabpanel" aria-labelledby="nav-references-tab">
            <br>
            <label for="validationCustom01" style="color:red"><strong>REFERENCES</strong></label>
            <hr>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-hover" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th><b>NAME</b></th>
                                    <th><b>ADDRESS</b></th>
                                    <th><b>TELEPHONE NO.</b></th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><?php echo$reference_name?></td>
                                <td><?php echo$reference_address?></td>
                                <td><?php echo$reference_tel?></td>
                            </tr>
                            <tr>
                                <td><?php echo$reference_name1?></td>
                                <td><?php echo$reference_address1?></td>
                                <td><?php echo$reference_tel1?></td>
                            </tr>
                            <tr>
                                 <td><?php echo$reference_name2?></td>
                                <td><?php echo$reference_address2?></td>
                                <td><?php echo$reference_tel2?></td>
                            </tr>
                            </tbody>
                        </table>
                </div>
            </div>
    </div>

     <!--GOVERNMENT ISSUED ID NAVIGATION TAB-->
     <div class="tab-pane fade" id="nav-government" role="tabpanel" aria-labelledby="nav-government-tab">
            <br>
            <label for="validationCustom01" style="color:red"><strong>GOVERNMENT ISSUED ID</strong></label>
            <hr>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-hover" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th><b>GOVERNMENT ISSUED ID</b></th>
                                    <th><b>ID/LICENSE/PASSPORT NO.</b></th>
                                    <th><b>DATE & PLACE OF ISSUANCE</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo$government_name?></td>
                                    <td><?php echo$government_no?></td>
                                    <td><?php echo$government_date?> AT <?php echo$government_place?></td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </div>
    </div>

      <!--HISTORY NAVIGATION TAB-->
      <div class="tab-pane fade" id="nav-history" role="tabpanel" aria-labelledby="nav-history-tab">
            <br>
            <label for="validationCustom01" style="color:red"><strong>HISTORY</strong></label>
            <hr>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-hover" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th><b>WORK STATUS</b></th>
                                    <th><b>POSITION</b></th>
                                    <th><b>STATUS</b></th>
                                    <th><b>DATE</b></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                ob_start();
                                include_once "../../assets/connection.php";
                                $conn = dbConnect();
                                $Id = $_GET['edit'];
                                $account = $conn->prepare("SELECT * FROM emp_history INNER JOIN account ON emp_history.account_id = account.Id 
                                WHERE account.Id = $Id ORDER BY emp_history.date_work ASC ");
                                $account->execute();
                                while($result = $account->fetch(PDO::FETCH_ASSOC)){
                                echo '<tr>
                                                <td>'.$result["work_history"].'</td>
                                                <td>'.$result["work_position"].'</td>
                                                <td>'.$result["work_status"].'</td>
                                                <td>'.$result["date_work"].'</td>
                                               
                                        </tr>';
                                }
                                
                                ob_end_flush();
                                ?>

                            </tbody>
                        </table>
                </div>
            </div>
    </div>
</div>
<!--DATABLE OF LEARNING/PROGRAM ATTENDED -->
<script>
    $(document).ready(function() {
    $('table.civil').DataTable( {
        "paging":   true,
        "pageLength": 10,
        "searching": false,
        "ordering": false,
        "lengthChange": false
    } );
        } );

        $(document).ready(function() {
    $('table.voluntary').DataTable( {
        "paging":   true,
        "pageLength": 10,
        "searching": false,
        "ordering": false,
        "lengthChange": false
    } );
        } );

        $(document).ready(function() {
    $('table.program').DataTable( {
        "paging":   true,
        "pageLength": 10,
        "searching": false,
        "ordering": false,
        "lengthChange": false
    } );
        } );

        $(document).ready(function() {
    $('table.work').DataTable( {
        "paging":   true,
        "pageLength": 10,
        "searching": false,
        "ordering": false,
        "lengthChange": false
    } );
        } );
    </script>
    <script>$(document).ready(function() {
    if (location.hash) {
        $("a[href='" + location.hash + "']").tab("show");
    }
    $(document.body).on("click", "a[data-toggle='tab']", function(event) {
        location.hash = this.getAttribute("href");
    });
});
$(window).on("popstate", function() {
    var anchor = location.hash || $("a[data-toggle='tab']").first().attr("href");
    $("a[href='" + anchor + "']").tab("show");
});


$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
  </script>
</main>