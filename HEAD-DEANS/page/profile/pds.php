
<?php
include "../sidebar.php";
include "../../modal/eligibility-modal.php";
include "../../modal/work-modal.php";
include "../../modal/voluntary-modal.php";
include "../../modal/program-modal.php";
include "../../assets/profile_query.php";
?>
    <main>
    
<!-- Begin Page Content -->
<div class="container-fluid">
      <!-- Page Heading -->
      <h1 class="h3 mb-2 text-gray-800">MY PERSONAL DATA SHEET</h1>
      <hr>
<div class="container" id="detail">
    <div class="row">
    <!--  -->
        <div class="col-sm-3">
        <div class="">
         <!-- Card -->
            <div class="card profile-card">
              <!-- Avatar -->
              <div class="avatar z-depth-1-half mb-4">
                <img class="card-img-top"src="<?php echo $profile_picture;?>" alt="Card image cap" class="rounded-circle">
                </div>
                <small class="red-text"><center>Go to Profile to Change Your Picture</center></small>
              <div class="card-body pt-0 mt-0">

                <!-- Name -->
                <h3 class="mb-3 font-weight-bold"><center><strong><?php echo $result['employee_firstname'],' 
                ',$result['employee_middlename'],' ', $result['employee_lastname'] ;?></strong></center></h3>
                <h6 class="font-weight-bold cyan-text mb-4"><center><?php echo $result['employee_position'];?></center></h6>

                <p class="mt-4 text-muted"> <center>Employee No:<?php echo $_SESSION['employee_id'];?>
                    <br>Date Deployed: <?php echo $result['employee_start'];?>  </center></p>
                <p class="mt-4 text-muted"></p>
                <a class="btn btn-dark-green btn-block btn-rounded" href="../../fpdf/PDS.php?edit=<?php echo $_SESSION['Id'];?>" target="_blank"> 
                <span class ="fa fa-print">PDS</a>
                

              </div>

            </div>
        </div>
        </div>
        <!--  -->
<div class="col-sm-9"  id="Pall">
<!-- NAVIGATION TAB LIST-->
 <!-- Card -->
 <div class=" card-cascade cascading-admin-card user-card">

<!-- Card Data -->
<div class="admin-up d-flex justify-content-start">
  <i class="fas fa-edit info-color py-4 mr-3 z-depth-2"></i>
  <div class="data">
    <h5 class="font-weight-bold dark-grey-text">Edit Profile - <span class="text-muted">Complete your
        profile</span></h5>
  </div>
</div>
<br>
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-link waves-light active waves-effect waves-light" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="true">Profile</a>
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
            <label for="validationCustom01"><strong><center> PERSONAL INFORMATION</center></strong></label>
            <hr>
            <div class="form-row">
            <input type="text"  style="display: none;"class="form-control" id="validationCustom01" name="Id" value="<?php echo$Id;?>">
                <div class="col-md-4 mb-3">
                    <label for="validationCustom01"> Surname</label>
                    <input type="text" class="form-control" id="validationCustom01"  name="employee_firstname" value="<?php echo$employee_firstname;?>">
                </div>
                <div class="col-md-3 mb-2">
                    <label for="validationCustom02">First Name</label>
                    <input type="text" class="form-control" id="validationCustom02"  name="employee_middlename" value="<?php echo$employee_middlename;?>" > 
                </div>
                <div class="col-md-3 mb-2">
                    <label for="validationCustom02">Middle Name</label>
                    <input type="text" class="form-control" id="validationCustom02"  name="employee_lastname" value="<?php echo$employee_lastname;?>" >
                </div>
                <div class="col-md-2 mb-2">
                    <label for="validationCustom02">Ex. Name</label>
                    <input type="text" class="form-control" id="validationCustom02"  name="employee_extensionname" value="<?php echo$employee_extensionname;?>" >
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="validationCustom03">Date of Birth</label>
                    <input type="date" class="form-control" id="validationCustom03"  name="employee_datebirth" value="<?php  echo$employee_datebirth;?>" >
                    
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom04">Place of Birth</label>
                    <input type="text" class="form-control" id="validationCustom04" name="employee_placebirth" value="<?php echo$employee_placebirth;?>">
                </div>
                <div class="col-md-2 mb-3">
                    <label for="validationCustom05">Sex</label>   
                    <select class="form-control"   id="employee_sex" name="employee_sex">
                        <option><?php echo$employee_sex;?></option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="col-md-2 mb-3">
                <label for="exampleFormControlSelect1">Civil Status</label>
                    <select class="form-control"  id="employee_civilstatus" name="employee_civilstatus">
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
                    <select class="form-control"  id="Bloodtype" name="employee_bloodtype">
                        <option><?php echo$employee_bloodtype;?></option>
                        <option>A+</option>
                        <option>O+</option>
                        <option>B+</option>
                        <option>AB+</option>
                        <option>A-</option>
                        <option>O-</option>
                        <option>B-</option>
                        <option>AB-</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-2 mb-3">
                    <label for="validationCustom03">Height(m)</label>
                    <input type="text" class="form-control" id="validationCustom05"  name="employee_height" value="<?php  echo$employee_height;?>" data-inputmask="'mask': '99.99'" required>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="validationCustom04">Weight(kg)</label>
                    <input type="text" class="form-control" id="validationCustom05"  name="employee_weight" value="<?php  echo$employee_weight;?>" data-inputmask="'mask': '99.99'"  required>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="validationCustom05">Citizenship</label>
                    <input type="text" class="form-control" id="validationCustom05"  name="employee_citizenship" value="<?php  echo$employee_citizenship;?>" >
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom05">Telephone</label>
                    <input type="text" class="form-control" id="validationCustom05"  name="employee_telephone" value="<?php  echo$employee_telephone;?>" data-inputmask="'mask': '(999)-9999-999'">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom03">Contact No.</label>
                    <input type="text" class="form-control" id="validationCustom03"  name="employee_contact" value="<?php  echo$employee_contact;?>" data-inputmask="'mask': '(999)-9999-999'">
                </div>
            </div>
            <hr>
            <label for="validationCustom03"><strong>RESIDENTIAL ADDRESS</strong></label>
            <hr>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationCustom03">House/Block/Lot No.</label>
                    <input type="text" class="form-control" id="validationCustom03" name="employee_Rblock" value="<?php echo$employee_Rblock;?>">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom04">Street</label>
                    <input type="text" class="form-control" id="validationCustom04"  name="employee_Rstreet" value="<?php echo$employee_Rstreet;?>">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom05">Subdivision/Village</label>
                    <input type="text" class="form-control" id="validationCustom05"  name="employee_Rvillage" value="<?php echo$employee_Rvillage;?>">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom03">Barangay</label>
                    <input type="text" class="form-control" id="validationCustom03" name="employee_Rbarangay" value="<?php echo$employee_Rbarangay;?>">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom04">City/Municipality</label>
                    <input type="text" class="form-control" id="validationCustom04"  name="employee_Rcity" value="<?php echo$employee_Rcity;?>">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom05">Province</label>
                    <input type="text" class="form-control" id="validationCustom05"  name="employee_Rprovince" value="<?php echo$employee_Rprovince;?>">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom05">Zipcode</label>
                    <input type="text" class="form-control" id="validationCustom05"  name=" employee_Rzipcode" value="<?php echo$employee_Rzipcode;?>" data-inputmask="'mask': '9999'">
                </div>
            </div>
            <hr>
            <label for="validationCustom03"><strong>PERMANENT ADDRESS</strong></label>
            <hr>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationCustom03">House/Block/Lot No.</label>
                    <input type="text" class="form-control" id="validationCustom03" name="employee_Pblock" value="<?php echo$employee_Pblock;?>">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom04">Street</label>
                    <input type="text" class="form-control" id="validationCustom04"  name="employee_Pstreet" value="<?php echo$employee_Pstreet;?>">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom05">Subdivision/Village</label>
                    <input type="text" class="form-control" id="validationCustom05"  name="employee_Pvillage" value="<?php echo$employee_Pvillage;?>">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom03">Barangay</label>
                    <input type="text" class="form-control" id="validationCustom03" name="employee_Pbarangay" value="<?php echo$employee_Pbarangay;?>">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom04">City/Municipality</label>
                    <input type="text" class="form-control" id="validationCustom04"  name="employee_Pcity" value="<?php echo$employee_Pcity;?>">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom05">Province</label>
                    <input type="text" class="form-control" id="validationCustom05"  name="employee_Pprovince" value="<?php echo$employee_Pprovince;?>">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom05">Zipcode</label>
                    <input type="text" class="form-control" id="validationCustom05"  name="employee_Pzipcode" value="<?php echo$employee_Pzipcode;?>" data-inputmask="'mask': '9999'">
                </div>
            </div>
            <a><strong>GOVERNMENT ID NO.</strong></a>
            <hr>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationCustom04">GSIS NO.</label>
                    <input type="text" class="form-control" id="validationCustom04"  name="employee_gsis" value="<?php echo$employee_gsis;?>" data-inputmask="'mask': '99-999999999-9' ">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom05">PAG-IBIG NO.</label>
                    <input type="text" class="form-control" id="validationCustom05"  name="employee_pagibig" value="<?php echo$employee_pagibig;?>" data-inputmask="'mask': '99-999999999-9' ">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom03">PHILHEALTH</label>
                    <input type="text" class="form-control" id="validationCustom05"  name="employee_philhealth" value="<?php echo$employee_philhealth;?>" data-inputmask="'mask': '99-999999999-9' ">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationCustom04">SSS</label>
                    <input type="text" class="form-control" id="validationCustom05"  name="employee_sss" value="<?php echo$employee_sss;?>" data-inputmask="'mask': '99-999999999-9' ">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom05">TIN</label>
                    <input type="text" class="form-control" id="validationCustom05"  name="employee_tin" value="<?php echo$employee_tin;?>" data-inputmask="'mask': '99-999999999-9' ">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationCustom04">Agency Employee No</label>
                    <input type="number" class="form-control" id="validationCustom05"  name="employee_agency" value="<?php echo$employee_agency;?>" >
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom05">E-mail Address</label>
                    <input type="text" class="form-control" id="validationCustom05"  name="employee_email" value="<?php echo$employee_email;?>" data-inputmask="'alias': 'email' " >
                </div>
            </div>
            <!-- UPDATE BUTTON MODAL -->
            <a class="btn btn btn-warning  float-right" href="#" data-toggle="modal" data-target="#updateModal">
                <i class="fas fa-edit "></i>
                Update
            </a>  
                <!--MODAL FOR CONFIRMATION-->
            <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                                <h4 class="modal-title" id="exampleModalCenterTitle" style="color:black;"><strong><center>Are you Sure to Update Your Personal Information?</center></strong></h4>
                                <br>
                                <button class="btn btn btn-primary  float-center  "  type="submit"  id="Update"  name="Update">Yes</button>
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

<!--FAMILY BACKGROUND NAVIGATION TAB-->
    <div class="tab-pane fade" id="nav-family" role="tabpanel" aria-labelledby="nav-family-tab">
        <br>
        <label for="validationCustom01"><strong><center> FAMILY BACKGROUND</center></strong></label>
        <form method="POST" class="needs-validation"  novalidate >
                <div class="form-row">
                <input type="hidden"  class="form-control" id="validationCustom01" name="fam_id" value="<?php echo$fam_id;?>">
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom01">SPOUSE`S SURNAME</label>
                        <input type="text" class="form-control" id="validationCustom01"  name="spouse_surname" value="<?php echo$spouse_surname;?>">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="validationCustom02">FIRST NAME</label>
                        <input type="text" class="form-control" id="validationCustom02"  name="spouse_firstname" value="<?php echo$spouse_firstname;?>" > 
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="validationCustom02">MIDDLE NAME</label>
                        <input type="text" class="form-control" id="validationCustom02"  name="spouse_middlename" value="<?php echo$spouse_middlename;?>" >
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="validationCustom02">EXTENSION NAME</label>
                        <input type="text" class="form-control" id="validationCustom02"  name="spouse_extension" value="<?php echo$spouse_extension;?>" >
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom03">OCCUPATION</label>
                        <input type="text" class="form-control" id="validationCustom03"  name="spouse_occupation" value="<?php echo$spouse_occupation;?>" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom04">EMP/BUSINESS NAME</label>
                        
                        <input type="text" class="form-control" id="validationCustom04" name="spouse_business" value="<?php echo$spouse_business;?>">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom04">EMP/BUSINESS NAME</label>
                        
                        <input type="text" class="form-control" id="validationCustom04" name="spouse_business_add" value="<?php echo$spouse_business_add;?>">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom05">TELEPHONE NO.</label>
                        <input type="text" class="form-control" id="Sextext"  name="spouse_no" value="<?php echo$spouse_no;?>" data-inputmask="'mask': '(999)-9999-999'" required>
                    </div>
                </div>
                <hr>
                <div class="form-row">
                    <div class="col-md-3 mb-3">
                    <label for="exampleFormControlSelect1">FATHER`S SURNAME</label>
                            <input type="text" class="form-control" id="Civilstatustext" name="father_surname"  value="<?php echo$father_surname;?>" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom05">FIRST NAME</label>
                        <input type="text" class="form-control" id="Bloodtypetext"  name="father_firstname" value="<?php echo$father_firstname;?>" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom03">MIDDLE NAME</label>
                        <input type="text" class="form-control" id="validationCustom05"  name="father_middlename" value="<?php echo$father_middlename;?>" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom04">EXTENSION NAME</label>
                        <input type="text" class="form-control" id="validationCustom05"  name="father_extensionname" value="<?php echo$father_extensionname;?>" required>
                    </div>
                </div>
                <hr>
                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom05">MOTHER`S MAIDEN NAME</label>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom05">SURNAME</label>
                        <input type="text" class="form-control" id="validationCustom05"  name="mother_surname" value="<?php echo$mother_surname;?>">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom03">FIRST NAME</label>
                        <input type="text" class="form-control" id="validationCustom03"  name="mother_firstname" value="<?php echo$mother_firstname;?>">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom03">MIDDLE NAME</label>
                        <input type="text" class="form-control" id="validationCustom03"  name="mother_middlename" value="<?php echo$mother_middlename;?>">
                    </div>
                </div>
                <hr>    
                <!-- UPDATE MODAL FAMILY BACKGROUND -->
                <a class="btn btn btn-warning  float-right" href="#" data-toggle="modal" data-target="#familyModal">
                <i class="fas fa-edit "></i>
                    Update
                 </a>  
                    <!--MODAL FOR CONFIRMATION FAMILY BACKGROUND-->
                <div class="modal fade" id="familyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalCenterTitle"><strong><center>Are you Sure to Update Your Family Background?</center></strong></h4>
                            <div class="modal-body">
                                <br>
                            </div>
                            </div><div class="text-center">
                                <button class="btn btn btn-primary  float-center  "  type="submit"  id="updatefamily"   name="updatefamily">Yes</button>
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
      <br>
      <hr>
      <!--FAMILY BACKGROUND NAVIGATION TAB-->
      <label for="validationCustom01"><strong><center>CHILDREN</center></strong></label>
      <p style="color:red;">* Just Fill up the Input Box if you want to add more.</p>
    <form method="POST" class="needs-validation"  novalidate >
            <div class="form-row">
                <input type="hidden"  class="form-control" id="validationCustom01" name="child_id" value="<?php echo$child_id;?>">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom01">NAME</label>
                    <input type="text" class="form-control" id="validationCustom01"  name="child_name" value="<?php echo$child_name;?>" >
                </div>
                <div class="col-md-6 mb-2">
                    <label for="validationCustom02">BIRTH DATE (mm/dd/yyyy)</label>
                    <input type="text" class="form-control" id="validationCustom02"  name="child_birthdate" value="<?php echo$child_birthdate;?>" data-inputmask="'mask': '99/99/9999'" > 
                </div>
                <div class="col-md-6 mb-2">
                    <input type="text" class="form-control" id="validationCustom02"  name="child_name1" value="<?php echo$child_name1;?>" >
                </div>
                <div class="col-md-6 mb-2">
                    <input type="text" class="form-control" id="validationCustom02"  name="child_birthdate1" value="<?php echo$child_birthdate1;?>" data-inputmask="'mask': '99/99/9999'" >
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" id="validationCustom03"  name="child_name2" value="<?php echo$child_name2;?>" required>
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" id="validationCustom04" name="child_birthdate2" value="<?php echo$child_birthdate2;?>" data-inputmask="'mask': '99/99/9999'">
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" id="Sextext"  name="child_name3" value="<?php echo$child_name3;?>" required>
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" id="Sextext"  name="child_birthdate3" value="<?php echo$child_birthdate3;?>" data-inputmask="'mask': '99/99/9999'" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" id="Civilstatustext" name="child_name4"  value="<?php echo$child_name4;?>" required>
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" id="Bloodtypetext"  name="child_birthdate4" value="<?php echo$child_birthdate4;?>" data-inputmask="'mask': '99/99/9999'" required>
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" id="validationCustom05"  name="child_name5" value="<?php echo$child_name5;?>"  required>
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" id="validationCustom05"  name="child_birthdate5" value="<?php echo$child_birthdate5;?>" data-inputmask="'mask': '99/99/9999'" required>
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" id="validationCustom05"  name="child_name6" value="<?php echo$child_name6;?>" required>
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" id="validationCustom05"  name="child_birthdate6" value="<?php echo$child_birthdate6;?>"  data-inputmask="'mask': '99/99/9999'"required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" id="validationCustom05"  name="child_name7" value="<?php echo$child_name7;?>">
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" id="validationCustom05"  name="child_birthdate7" value="<?php echo$child_birthdate7;?>" data-inputmask="'mask': '99/99/9999'">
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" id="validationCustom03"  name="child_name8" value="<?php echo$child_name8;?>">
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" id="validationCustom03"  name="child_birthdate8" value="<?php echo$child_birthdate8;?>" data-inputmask="'mask': '99/99/9999'">
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" id="validationCustom05"  name="child_name9" value="<?php echo$child_name9;?>">
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" id="validationCustom05"  name="child_birthdate9" value="<?php echo$child_birthdate9;?>" data-inputmask="'mask': '99/99/9999'">
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" id="validationCustom03"  name="child_name10" value="<?php echo$child_name10;?>">
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" id="validationCustom03"  name="child_birthdate10" value="<?php echo$child_birthdate10;?>" data-inputmask="'mask': '99/99/9999'">
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" id="validationCustom05"  name="child_name11" value="<?php echo$child_name11;?>">
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" id="validationCustom05"  name="child_birthdate11" value="<?php echo$child_birthdate11;?>" data-inputmask="'mask': '99/99/9999'">
                </div>
            </div>
            <hr>    
            <!-- UPDATE MODAL FOR CHILDREN -->
            <a class="btn btn btn-warning  float-right" href="#" data-toggle="modal" data-target="#childrenModal">
            <i class="fas fa-edit "></i>
                    Update
            </a>  
                    <!--MODAL FOR CONFIRMATION FAMILY BACKGROUND-->
            <div class="modal fade" id="childrenModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalCenterTitle"><strong><center>Are you Sure to Update Your Children Background?</center></strong></h4>
                            <div class="modal-body">
                                <br>
                                </div>
                            </div><div class="text-center">
                                <button class="btn btn btn-primary  float-center  "  type="submit"  id="updateChildren"   name="updateChildren">Yes</button>
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <hr>
                            </div>
                        </div>
                    </div>
            </div>
        </form>
        </div>

<!--EDUCATION NAVIGATION TAB-->
    <div class="tab-pane fade" id="nav-education" role="tabpanel" aria-labelledby="nav-education-tab">
    <br>
    <label for="validationCustom01"><strong><center>EDUCATIONAL BACKGROUND </center></strong></label>
       <br>
       <hr>
       <div class="">
         <form method="POST" class="needs-validation"  novalidate >
            <label for="validationCustom01"><strong>ELEMENTARY</strong></label>
                <div class="form-row">
                    <input type="hidden"  class="form-control" id="validationCustom01" name="education_id" value="<?php echo$education_id;?>">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">NAME OF SCHOOL</label>
                        <input type="text" class="form-control" id="validationCustom01"  name="elem_name" value="<?php echo$elem_name;?>">
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="validationCustom02">BASIC EDUCATION</label>
                        <input type="text" class="form-control" id="validationCustom02"  name="elem_degree" value="<?php echo$elem_degree;?>" > 
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for="validationCustom02">FROM</label>
                        <input type="text" class="form-control" id="validationCustom02"  name="elem_from" value="<?php echo$elem_from;?>" data-inputmask="'mask': '9999'">
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for="validationCustom02">TO</label>
                        <input type="text" class="form-control" id="validationCustom02"  name="elem_to" value="<?php echo$elem_to;?>" data-inputmask="'mask': '9999'">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom03">HIGHEST LEVEL/UNIT EARNED</label>
                        <input type="text" class="form-control" id="validationCustom03"  name="elem_earned" value="<?php echo$elem_earned;?>" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom04">YEAR GRADUATED</label>
                        <input type="text" class="form-control" id="validationCustom04" value="<?php echo$elem_to;?>" disabled>
                    </div>
                    <div class="col-md-5 mb-3">
                        <label for="validationCustom05">SCHOLARSHIP/ACADEMIC RECIEVED</label>
                        <input type="text" class="form-control" id="Sextext"  name="elem_honor" value="<?php echo$elem_honor;?>" required>
                    </div>
                </div>
                <hr>
                <label for="validationCustom01"><strong>SECONDARY</strong></label>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">NAME OF SCHOOL</label>
                        <input type="text" class="form-control" id="validationCustom01"  name="sec_name" value="<?php echo$sec_name;?>">
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="validationCustom02">BASIC EDUCATION</label>
                        <input type="text" class="form-control" id="validationCustom02"  name="sec_degree" value="<?php echo$sec_degree;?>" > 
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for="validationCustom02">FROM</label>
                        <input type="text" class="form-control" id="validationCustom02"  name="sec_from" value="<?php echo$sec_from;?>" data-inputmask="'mask': '9999'">
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for="validationCustom02">TO</label>
                        <input type="text" class="form-control" id="validationCustom02"  name="sec_to" value="<?php echo$sec_to;?>" data-inputmask="'mask': '9999'">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom03">HIGHEST LEVEL/UNIT EARNED</label>
                        <input type="text" class="form-control" id="validationCustom03"  name="sec_earned" value="<?php echo$sec_earned;?>" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom04">YEAR GRADUATED</label>
                        
                        <input type="text" class="form-control" id="validationCustom04"  value="<?php echo$sec_to;?>" disabled>
                    </div>
                    <div class="col-md-5 mb-3">
                        <label for="validationCustom05">SCHOLARSHIP /ACADEMIC RECIEVED</label>
                        <input type="text" class="form-control" id="Sextext"  name="sec_honor" value="<?php echo$sec_honor;?>" required>
                    </div>
                </div>
                <hr>
                <label for="validationCustom01"><strong>VOCATIONAL/TRADE COURSE</strong></label>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">NAME OF SCHOOL</label>
                        <input type="text" class="form-control" id="validationCustom01"  name="voc_name" value="<?php echo$voc_name;?>">
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="validationCustom02">BASIC DEGREE/COURSE</label>
                        <input type="text" class="form-control" id="validationCustom02"  name="voc_degree" value="<?php echo$voc_degree;?>" > 
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for="validationCustom02">FROM</label>
                        <input type="text" class="form-control" id="validationCustom02"  name="voc_from" value="<?php echo$voc_from;?>" data-inputmask="'mask': '9999'">
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for="validationCustom02">TO</label>
                        <input type="text" class="form-control" id="validationCustom02"  name="voc_to" value="<?php echo$voc_to;?>" data-inputmask="'mask': '9999'">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom03">HIGHEST LEVEL/UNIT EARNED</label>
                        <input type="text" class="form-control" id="validationCustom03"  name="voc_earned" value="<?php echo$voc_earned;?>" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom04">YEAR GRADUATED</label>
                        
                        <input type="text" class="form-control" id="validationCustom04"  value="<?php echo$voc_to;?>" disabled>
                    </div>
                    <div class="col-md-5 mb-3">
                        <label for="validationCustom05">SCHOLARSHIP /ACADEMIC RECIEVED</label>
                        <input type="text" class="form-control" id="Sextext"  name="voc_honor" value="<?php echo$voc_honor;?>" required>
                    </div>
                </div>
                <hr>
                <label for="validationCustom01"><strong>COLLEGE</strong></label>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">NAME OF SCHOOL</label>
                        <input type="text" class="form-control" id="validationCustom01"  name="col_name" value="<?php echo$col_name;?>">
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="validationCustom02">BASIC DEGREE/COURSE</label>
                        <input type="text" class="form-control" id="validationCustom02"  name="col_degree" value="<?php echo$col_degree;?>" > 
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for="validationCustom02">FROM</label>
                        <input type="text" class="form-control" id="validationCustom02"  name="col_from" value="<?php echo$col_from;?>" data-inputmask="'mask': '9999'">
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for="validationCustom02">TO</label>
                        <input type="text" class="form-control" id="validationCustom02"  name="col_to" value="<?php echo$col_to;?>" data-inputmask="'mask': '9999'">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom03">HIGHEST LEVEL/UNIT EARNED</label>
                        <input type="text" class="form-control" id="validationCustom03"  name="col_earned" value="<?php echo$col_earned;?>" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom04">YEAR GRADUATED</label>
                        <input type="text" class="form-control" id="validationCustom04"  value="<?php echo$col_to;?>" disabled>
                    </div>
                    <div class="col-md-5 mb-3">
                        <label for="validationCustom05">SCHOLARSHIP /ACADEMIC RECIEVED</label>
                        <input type="text" class="form-control" id="Sextext"  name="col_honor" value="<?php echo$col_honor;?>" required>
                    </div>
                </div>
                <hr>
                <label for="validationCustom01"><strong>GRADUATE STUDIES<span class="text-muted"> (Masteral)</span></strong></label>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">NAME OF SCHOOL</label>
                        <input type="text" class="form-control" id="validationCustom01"  name="gad_name" value="<?php echo$gad_name;?>">
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="validationCustom02">BASIC DEGREE/COURSE</label>
                        <input type="text" class="form-control" id="validationCustom02"  name="gad_degree" value="<?php echo$gad_degree;?>" > 
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for="validationCustom02">FROM</label>
                        <input type="text" class="form-control" id="validationCustom02"  name="gad_from" value="<?php echo$gad_from;?>"  data-inputmask="'mask': '9999'">
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for="validationCustom02">TO</label>
                        <input type="text" class="form-control" id="validationCustom02"  name="gad_to" value="<?php echo$gad_to;?>"  data-inputmask="'mask': '9999'">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom03">HIGHEST LEVEL/UNIT EARNED</label>
                        <input type="text" class="form-control" id="validationCustom03"  name="gad_earned" value="<?php echo$gad_earned;?>" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom04">YEAR GRADUATED</label>
                        <input type="text" class="form-control" id="validationCustom04"  value="<?php echo$gad_to;?>" disabled>
                    </div>
                    <div class="col-md-5 mb-3">
                        <label for="validationCustom05">SCHOLARSHIP /ACADEMIC RECIEVED</label>
                        <input type="text" class="form-control" id="Sextext"  name="gad_honor" value="<?php echo$gad_honor;?>" required>
                    </div>
                </div>
                <label for="validationCustom01"><strong>GRADUATE STUDIES<span class="text-muted"> (Doctorate)</span></strong></label>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">NAME OF SCHOOL</label>
                        <input type="text" class="form-control" id="gad_name1"  name="gad_namee" value="<?php echo$gad_namee;?>">
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="validationCustom02">BASIC DEGREE/COURSE</label>
                        <input type="text" class="form-control" id="gad_degree1"  name="gad_degreee" value="<?php echo$gad_degreee;?>" > 
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for="validationCustom02">FROM</label>
                        <input type="text" class="form-control" id="gad_from1"  name="gad_frome" value="<?php echo$gad_frome;?>" data-inputmask="'mask': '9999'" >
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for="validationCustom02">TO</label>
                        <input type="text" class="form-control" id="gad_to1"  name="gad_toe" value="<?php echo$gad_toe;?>" data-inputmask="'mask': '9999'" >
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom03">HIGHEST LEVEL/UNIT EARNED</label>
                        <input type="text" class="form-control" id="gad_earned1"  name="gad_earnede" value="<?php echo$gad_earnede;?>" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom04">YEAR GRADUATED</label>
                        <input type="text" class="form-control" id="validationCustom04"  value="<?php echo$gad_toe;?>" disabled>
                    </div>
                    <div class="col-md-5 mb-3">
                        <label for="validationCustom05">SCHOLARSHIP /ACADEMIC RECIEVED</label>
                        <input type="text" class="form-control" id="gad_honor1"  name="gad_honore" value="<?php echo$gad_honore;?>" required>
                    </div>
                </div>
                <hr>    
                <!-- UPDATE MODAL FOR EDUCATION -->
                <a class="btn btn btn-warning float-right" href="#" data-toggle="modal" data-target="#educationModal">
                <i class="fas fa-edit "></i>
                        Update
                </a>  
                <!--MODAL FOR CONFIRMATION FAMILY BACKGROUND-->
                <div class="modal fade" id="educationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalCenterTitle"><strong><center>Are you Sure to Update Your Education Background?</center></strong></h4>
                            <div class="modal-body">
                                <br>
                                </div>
                            </div><div class="text-center">
                                <button class="btn btn btn-primary  float-center"  type="submit"  id="updateEducation"   name="updateEducation">Yes</button>
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
            <hr>
            <!-- <label for="validationCustom01"><strong> MORE GRADUATE STUDIES</strong></label>
            <div class="table-responsive">
                <table class="table table-hover" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>NAME OF SCHOOL</th>
                                    <th>BASIC EDUCATION/DEGREE/COURSE</th>
                                    <th><center>FROM</center></th>
                                    <th><center>TO</center></th>
                                    <th>HIGHEST LEVEL/UNIT EARNED</th>
                                    <th>YEAR GRADUATED</th>
                                    <th>SCHOLARSHIP /ACADEMIC HONOR RECIEVED</th>
                                    <th> <button type="button" class="btn btn-success  float-right"  data-toggle="modal" data-target="#work">ADD</button>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                // ob_start();
                                // include_once "assets/connection.php";
                                // $conn = dbConnect();
                                // $account = $conn->prepare("SELECT * FROM emp_graduate INNER JOIN account WHERE emp_graduate.employee_id = account.employee_id 
                                // AND account.Id = $_SESSION[Id]   ORDER BY emp_graduate.grad_to DESC");
                                // $account->execute();
                                // while($result = $account->fetch(PDO::FETCH_ASSOC)){
                                // $workk= $result["work_id"];
                                // echo '<tr>
                                //                 <td>'.$result["grad_name"].'</td>
                                //                 <td>'.$result["grad_degree"].'</td>
                                //                 <td><center>'.$result["grad_from"].'</center></td>
                                //                 <td><center>'.$result["grad_to"].'</center></td>
                                //                 <td>'.$result["grad_earned"].'</td>
                                //                 <td>'.$result["grad_to"].'</td>
                                //                 <td>'.$result["grad_honor"].'</td>
                                            
                                //                 <td> 
                                //                 <button type="button" onclick=" editWorke('.$workk.');" class="btn btn-warning"><span class ="fa fa-edit">Update</span></button>
                                //                 </td>
                                //         </tr>';
                                // }
                                
                                // ob_end_flush();
                                ?>

                            </tbody>
                        </table>
                </div> -->
            </div>

    
    <!--CIVIL SERVICE ELIGIBILITY NAVIGATION TAB-->
    <div class="tab-pane fade" id="nav-civil-service" role="tabpanel" aria-labelledby="nav-civil-service-tab">
        <br>
        <label for="validationCustom01"><strong><center> CIVIL SERVICE ELIGIBILITY</center></strong></label>
        <hr>
        <div class="card-body">
            <div class="">
            <table class="table table-hover table-responsive civil" id="" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>NAME OF ELIGIBILITY</th>
                        <th>RATING</th>
                        <th>DATE OF EXAMINATION</th>
                        <th>PLACE OF EXAMINATION</th>
                        <th>LICENSE NO</th>
                        <th>DATE OF VALIDITY</th>
                        <th></th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            ob_start();
                            include_once "../../assets/connection.php";
                            $conn = dbConnect();
                            $account = $conn->prepare("SELECT * FROM emp_eligibility INNER JOIN account ON emp_eligibility.account_id = account.Id AND account.Id = $_SESSION[Id] ");
                            $account->execute();
                            while($result = $account->fetch(PDO::FETCH_ASSOC)){
                            $did= $result["eligibility_id"];
                            echo '<tr>
                                        <td>'.$result["eligibility_name"].'</td>
                                        <td>'.$result["eligibility_rating"].'</td>
                                        <td>'.$result["eligibility_date"].'</td>
                                        <td>'.$result["eligibility_place"].'</td>
                                        <td>'.$result["eligibility_number"].'</td>
                                        <td>'.$result["eligibility_validity"].'</td>
                                    
                                        <td> 
                                        <button type="button" onclick="editEligibilitye('.$did.');" class="btn btn-warning"><span class ="fa fa-edit">Update</span></button>
                                        </td>
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
        <label for="validationCustom01"><strong><center> WORK EXPERIENCE</center></strong></label>
        <p style="color:red;">* (Include private employment. Start from your recent work ) Description of duties should be indicated.</p>
        <hr>
        <div class="card-body">
            <div class="">
            <table class="table table-hover table-responsive work" id="" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>FROM</th>
                            <th>TO</th>
                            <th><center>POSITION TITLE</center></th>
                            <th><center>DEPARTMENT/AGENCY/OFFICE/COMPANY
                            (Write in full / Do not abbreviate)</center></th>
                            <th>MONTHLY SALARY</th>
                            <th>SALARY JOB/PAY GRADE</th>
                            <th>STATUS OF APPOINTMENT</th>
                            <th>GOV`T SERVICE</th>
                            <th>  <!-- <button type="button" class="btn btn-success  float-right"  data-toggle="modal" data-target="#work">ADD</button> -->
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            ob_start();
                            include_once "../../assets/connection.php";
                            $conn = dbConnect();
                            $account = $conn->prepare("SELECT * FROM emp_work INNER JOIN account WHERE emp_work.account_id = account.Id 
                            AND account.Id = $_SESSION[Id]   ORDER BY emp_work.work_from DESC");
                            $account->execute();
                            while($result = $account->fetch(PDO::FETCH_ASSOC)){
                            $workk= $result["work_id"];
                            echo '<tr>
                                        <td>'.$result["work_from"].'</td>
                                        <td>'.$result["work_to"].'</td>
                                        <td><center>'.$result["work_position"].'</center></td>
                                        <td><center>'.$result["work_department"].'</center></td>
                                        <td>'.$result["work_salary"].'</td>
                                        <td>'.$result["work_grade"].'</td>
                                        <td>'.$result["work_status"].'</td>
                                        <td>'.$result["work_gov"].'</td>
                                    
                                        <td> 
                                        <button type="button" onclick=" editWorke('.$workk.');" class="btn btn-warning"><span class ="fa fa-edit">Update</span></button>
                                        </td>
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
            <label for="validationCustom01"><strong>VOLUNTARY WORK OR INVOLVEMENT IN CIVIC /NON-GOVERNMENT/PEOPLE/VOLUNTARY ORGANIZATION/S</strong></label>
            <hr>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-hover voluntary" id="" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>NAME OF ORGANIZATION</th>
                                <th>ADDRESS</th>
                                <th>FROM</th>
                                <th>TO</th>
                                <th>NUMBER OF HOURS</th>
                                <th>POSITION/ NATURE OF WORK</th>
                                <th>  <!--<button type="button" class="btn btn-success btn-sm float-right"  data-toggle="modal" data-target="#voluntary">ADD</button> -->
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                ob_start();
                                include_once "../../assets/connection.php";
                                $conn = dbConnect();
                                $account = $conn->prepare("SELECT * FROM emp_voluntary INNER JOIN account WHERE emp_voluntary.account_id = account.Id AND account.Id = $_SESSION[Id] ");
                                $account->execute();
                                while($result = $account->fetch(PDO::FETCH_ASSOC)){
                                $voluntaryy1= $result["voluntary_id"];
                                echo '<tr>
                                            <td>'.$result["voluntary_name"].'</td>
                                            <td>'.$result["voluntary_address"].'</td>
                                            <td>'.$result["voluntary_from"].'</td>
                                            <td>'.$result["voluntary_to"].'</td>
                                            <td>'.$result["voluntary_hours"].'</td>
                                            <td>'.$result["voluntary_position"].'</td>
                                        
                                            <td> 
                                            <button type="button" onclick=" editVoluntary('.$voluntaryy1.');" class="btn btn-warning"><span class ="fa fa-edit">Update</span></button>
                                            </td>
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
            <label for="validationCustom01"><strong>LEARNING AND DEVELOPMENT(L&D) INTERVENTIONS/TRAINING PROGRAMS ATTENDED</strong></label>
            <hr>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-hover program" id="" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>NAME</th>
                                <th>FROM</th>
                                <th>TO</th>
                                <th>NUMBER OF HOURS</th>
                                <th>TYPE OF LD
                                (Managerial/
                                Supervisory/
                                Techinical/etc)</th>
                                <th>CONDUCTED/SPONSORED BY</th>
                                    <th> <!--<button type="button" class="btn btn-success btn-sm float-right"  data-toggle="modal" data-target="#attended">ADD</button> -->
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                ob_start();
                                include_once "../../assets/connection.php";
                                $conn = dbConnect();
                                $account = $conn->prepare("SELECT * FROM emp_program_attended INNER JOIN account WHERE emp_program_attended.account_id = account.Id AND account.Id = $_SESSION[Id]");
                                $account->execute();
                                while($result = $account->fetch(PDO::FETCH_ASSOC)){
                                $programm= $result["attend_id"];
                                echo '<tr>
                                            <td>'.$result["attend_name"].'</td>
                                            <td>'.$result["attend_from"].'</td>
                                            <td>'.$result["attend_to"].'</td>
                                            <td>'.$result["attend_hours"].'</td>
                                            <td>'.$result["attend_ld"].'</td>
                                            <td>'.$result["attend_sponsored"].'</td>
                                        
                                            <td> 
                                            <button type="button" onclick=" editProgram('. $programm.');" class="btn btn-warning"><span class ="fa fa-edit">Update</span></button>
                                            </td>
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
            <label for="validationCustom01"><strong>OTHER INFORMATION</strong></label>
            <hr>
            <!--SPECIAL SKILLS & HOBBIES NAVIGATION TAB-->     
            <label for="validationCustom01"><strong>SPECIAL SKILLS & HOBBIES</strong></label>     
                <form method="POST" class="needs-validation"  novalidate >
                    <div class="form-row">
                        <input type="hidden"  class="form-control" id="validationCustom01" name="hobbies_id" value="<?php echo$hobbies_id;?>">
                        <div class="col-md-12 mb-3">
                            <input type="text" class="form-control" id="validationCustom01"  name="hobbies_name" value="<?php echo$hobbies_name;?>" >
                        </div>
                        <div class="col-md-12 mb-2">
                            <input type="text" class="form-control" id="validationCustom02"  name="hobbies_name1" value="<?php echo$hobbies_name1;?>"  > 
                        </div>
                        <div class="col-md-12 mb-2">
                            <input type="text" class="form-control" id="validationCustom02"  name="hobbies_name2" value="<?php echo$hobbies_name2;?>" >
                        </div>
                        <div class="col-md-12 mb-3">
                            <input type="text" class="form-control" id="validationCustom01"  name="hobbies_name3" value="<?php echo$hobbies_name3;?>" >
                        </div>
                        <div class="col-md-12 mb-2">
                            <input type="text" class="form-control" id="validationCustom02"  name="hobbies_name4" value="<?php echo$hobbies_name4;?>"  > 
                        </div>
                        <div class="col-md-12 mb-2">
                            <input type="text" class="form-control" id="validationCustom02"  name="hobbies_name5" value="<?php echo$hobbies_name5;?>">
                        </div>
                        <div class="col-md-12 mb-3">
                            <input type="text" class="form-control" id="validationCustom01"  name="hobbies_name6" value="<?php echo$hobbies_name6;?>" >
                        </div>
                    </div>
                               <!-- MODAL HOBBIES -->
                    <a class="btn btn btn-warning  float-right" href="#" data-toggle="modal" data-target="#hobbiesModal">
                    <i class="fas fa-edit "></i>
                            Update
                    </a>  
                                                            <!--MODAL FOR HOBBIES-->
                        <div class="modal fade" id="hobbiesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalCenterTitle"><strong><center>Are you Sure to Update Your Special Skill & Hobbies?</center></strong></h4>
                                    <div class="modal-body">
                                        <br>
                                    </div>
                                    </div><div class="text-center">
                                        <button class="btn btn btn-primary  float-center  "  type="submit"  id="updateHobbies"   name="updateHobbies">Yes</button>
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                <hr>
                <br>
            <!--OTHER INFORMATION ORGANIZATION NAVIGATION TAB--> 
            <label for="validationCustom01"><strong>MEMBERSHIP IN ASSOCIATION/ORGANIZATION</strong></label>
            <form method="POST" class="needs-validation"  novalidate >
                        <div class="form-row">
                            <input type="hidden"  class="form-control" id="validationCustom01" name="organization_id" value="<?php echo$organization_id;?>">
                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" id="validationCustom01"  name="organization_name" value="<?php echo$organization_name;?>" >
                            </div>
                            <div class="col-md-12 mb-2">
                                <input type="text" class="form-control" id="validationCustom02"  name="organization_name1" value="<?php echo$organization_name1;?>"  > 
                            </div>
                            <div class="col-md-12 mb-2">
                                <input type="text" class="form-control" id="validationCustom02"  name="organization_name2" value="<?php echo$organization_name2;?>" >
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" id="validationCustom01"  name="organization_name3" value="<?php echo$organization_name3;?>" >
                            </div>
                            <div class="col-md-12 mb-2">
                                <input type="text" class="form-control" id="validationCustom02"  name="organization_name4" value="<?php echo$organization_name4;?>"  > 
                            </div>
                            <div class="col-md-12 mb-2">
                                <input type="text" class="form-control" id="validationCustom02"  name="organization_name5" value="<?php echo$organization_name5;?>">
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" id="validationCustom01"  name="organization_name6" value="<?php echo$organization_name6;?>" >
                            </div>
                        </div>
                               <!--MODAL ORGANIZATION  -->
                        <a class="btn btn btn-warning float-right" href="#" data-toggle="modal" data-target="#organizationModal">
                        <i class="fas fa-edit "></i>
                                Update
                        </a>  
                        <!--MODAL FOR CONFIRMATION FAMILY BACKGROUND-->
                        <div class="modal fade" id="organizationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalCenterTitle"><strong><center>Are you Sure to Update Your Membership in Association/Organization?</center></strong></h4>
                                    <div class="modal-body">
                                        <br>
                                        </div>
                                    </div><div class="text-center">
                                            <button class="btn btn btn-primary  float-center  "  type="submit"  id="updateOrganization"   name="updateOrganization">Yes</button>
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
            </form>
            <hr>
            <br>
             <!--NON-ACADEMIC DISTINCTIONS / RECOGNITION NAVIGATION TAB-->
             <label for="validationCustom01"><strong>NON-ACADEMIC DISTINCTIONS / RECOGNITION</strong></label>
              <form method="POST" class="needs-validation"  novalidate >
                            <div class="form-row">
                                <input type="hidden"  class="form-control" id="validationCustom01" name="distinction_id" value="<?php echo$distinction_id;?>">
                                <div class="col-md-12 mb-3">
                                    <input type="text" class="form-control" id="validationCustom01"  name="distinction_name" value="<?php echo$distinction_name;?>" >
                                </div>
                                <div class="col-md-12 mb-2">
                                    <input type="text" class="form-control" id="validationCustom02"  name="distinction_name1" value="<?php echo$distinction_name1;?>"  > 
                                </div>
                                <div class="col-md-12 mb-2">
                                    <input type="text" class="form-control" id="validationCustom02"  name="distinction_name2" value="<?php echo$distinction_name2;?>" >
                                </div>
                                <div class="col-md-12 mb-3">
                                    <input type="text" class="form-control" id="validationCustom01"  name="distinction_name3" value="<?php echo$distinction_name3;?>" >
                                </div>
                                <div class="col-md-12 mb-2">
                                    <input type="text" class="form-control" id="validationCustom02"  name="distinction_name4" value="<?php echo$distinction_name4;?>"  > 
                                </div>
                                <div class="col-md-12 mb-2">
                                    <input type="text" class="form-control" id="validationCustom02"  name="distinction_name5" value="<?php echo$distinction_name5;?>">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <input type="text" class="form-control" id="validationCustom01"  name="distinction_name6" value="<?php echo$distinction_name6;?>" >
                                </div>
                            </div>
                            <!-- MODAL DISTINCTION -->
                            <a class="btn btn btn-warning  float-right" href="#" data-toggle="modal" data-target="#distinctionModal">
                            <i class="fas fa-edit "></i>
                                   Update
                            </a>  
                            <!--MODAL FOR CONFIRMATION FAMILY BACKGROUND-->
                            <div class="modal fade" id="distinctionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="exampleModalCenterTitle"><strong><center>Are you Sure to Update Your Non-Academic Distinction/ Recognition?</center></strong></h4>
                                        <div class="modal-body">
                                            <br>
                                            </div>
                                        </div><div class="text-center">
                                            <button class="btn btn btn-primary  float-center  "  type="submit"  id="updateDistinction"   name="updateDistinction"><i class='fas fa-user-edit'></i>Yes</button>
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </form>
                    <hr>
                    <br>
    </div>
    <!--REFERENCES NAVIGATION TAB-->
    <div class="tab-pane fade" id="nav-references" role="tabpanel" aria-labelledby="nav-references-tab">
            <br>
            <label for="validationCustom01"><strong>REFERENCES</strong></label>
            <p style="color:red;">* Person not related by consanguinity or affinity to applicant/appointee.</p>
            <hr>
            <form method="POST" class="needs-validation"  novalidate >
                            <div class="form-row">
                                <input type="hidden"  class="form-control" id="validationCustom01" name="reference_id" value="<?php echo$reference_id;?>">
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom01">NAME</label>
                                    <input type="text" class="form-control" id="validationCustom01"  name="reference_name" value="<?php echo$reference_name;?>" >
                                </div>
                                <div class="col-md-5 mb-2">
                                    <label for="validationCustom02">ADDRES</label>
                                    <input type="text" class="form-control" id="validationCustom02"  name="reference_address" value="<?php echo$reference_address;?>"  > 
                                </div>
                                <div class="col-md-3 mb-2">
                                    <label for="validationCustom02">TEL NO.</label>
                                    <input type="text" class="form-control" id="validationCustom02"  name="reference_tel" value="<?php echo$reference_tel;?>" data-inputmask="'mask': '(999)-9999-999'">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <input type="text" class="form-control" id="validationCustom01"  name="reference_name1" value="<?php echo$reference_name1;?>" >
                                </div>
                                <div class="col-md-5 mb-2">
                                    <input type="text" class="form-control" id="validationCustom02"  name="reference_address1" value="<?php echo$reference_address1;?>"  > 
                                </div>
                                <div class="col-md-3 mb-2">
                                    <input type="text" class="form-control" id="validationCustom02"  name="reference_tel1" value="<?php echo$reference_tel1;?>" data-inputmask="'mask': '(999)-9999-999'">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <input type="text" class="form-control" id="validationCustom01"  name="reference_name2" value="<?php echo$reference_name2;?>" >
                                </div>
                                <div class="col-md-5 mb-2">
                                    <input type="text" class="form-control" id="validationCustom02"  name="reference_address2" value="<?php echo$reference_address2;?>"  > 
                                </div>
                                <div class="col-md-3 mb-2">
                                    <input type="text" class="form-control" id="validationCustom02"  name="reference_tel2" value="<?php echo$reference_tel2;?>" data-inputmask="'mask': '(999)-9999-999'">
                                </div>
                            </div>
                            <hr>    
                            <!-- MODAL REFERENCE -->
                            <a class="btn btn btn-warning  float-right" href="#" data-toggle="modal" data-target="#referencesModal">
                            <i class="fas fa-edit "></i>
                                    Update
                                </a>  
                                    <!--MODAL FOR CONFIRMATION FAMILY BACKGROUND-->
                                    <div class="modal fade" id="referencesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="exampleModalCenterTitle"><strong><center>Are you Sure to Update YourReferences Information?</center></strong></h4>
                                                <div class="modal-body">
                                                    <br>
                                                </div>
                                                </div><div class="text-center">
                                                    <button class="btn btn btn-primary  float-center  "  type="submit"  id="updateReferences"   name="updateReferences">Yes</button>
                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
            </form>
    </div>

     <!--GOVERNMENT ISSUED ID NAVIGATION TAB-->
     <div class="tab-pane fade" id="nav-government" role="tabpanel" aria-labelledby="nav-government-tab">
            <br>
            <label for="validationCustom01"><strong>GOVERNMENT ISSUED ID</strong></label>
            <p style="color:red;">* i.e,Passport, GSIS, SSS, PRC, Driver`s Lincense, etc.</p>
            <hr>
            <form method="POST" class="needs-validation"  novalidate >
                            <div class="form-row">
                                <input type="hidden"  class="form-control" id="validationCustom01" name="government_id" value="<?php echo$government_id;?>">
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom01">GOVERNMENT ISSUED ID</label>
                                    <input type="text" class="form-control" id="validationCustom01"  name="government_name" value="<?php echo$government_name;?>" >
                                </div>
                                <div class="col-md-3 mb-2">
                                    <label for="validationCustom02">ID/LICENSE NO.</label>
                                    <input type="text" class="form-control" id="validationCustom02"  name="government_no" value="<?php echo$government_no;?>"   > 
                                </div>
                                <div class="col-md-2 mb-2">
                                    <label for="validationCustom02">DATE</label>
                                    <input type="text" class="form-control" id="validationCustom02"  name="government_date" value="<?php echo$government_date;?>" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy">
                                    <input type="text" class="form-control" id="validationCustom02"  name="government_date" value="<?php echo$government_date;?>" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy">
                                </div>
                                <div class="col-md-3 mb-2">
                                    <label for="validationCustom02">PLACE OF ISSUANCE</label>
                                    <input type="text" class="form-control" id="validationCustom02"  name="government_place" value="<?php echo$government_place;?>" >
                                </div>
                            </div>
                            <hr>    
                            <!-- MODAL GOVERNMENT -->
                            <a class="btn btn btn-warning  float-right" href="#" data-toggle="modal" data-target="#governmentModal">
                            <i class="fas fa-edit "></i>
                                   Update
                            </a>  
                                <!--MODAL FOR CONFIRMATION FAMILY BACKGROUND-->
                            <div class="modal fade" id="governmentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="exampleModalCenterTitle"><strong><center>Are you Sure to Update  Government Issued Id?</center></strong></h4>
                                        <div class="modal-body">
                                            <br>
                                        </div>
                                        </div><div class="text-center">
                                            <button class="btn btn btn-primary  float-center  "  type="submit"  id="updateGovernment"   name="updateGovernment">Yes</button>
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
            </form>
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
                                $account = $conn->prepare("SELECT * FROM emp_history INNER JOIN account ON emp_history.account_id = account.Id 
                                WHERE account.Id = $_SESSION[Id]  ORDER BY emp_history.date_work ASC");
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

 <!-- Dashboard js plugins -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../../bootstrap/js/dashboard/eligibility.js"></script>
    <script src="../../bootstrap/js/dashboard/program.js"></script>
    <script src="../../bootstrap/js/dashboard/reference.js"></script>
    <script src="../../bootstrap/js/dashboard/work.js"></script>
    <script src="../../bootstrap/js/dashboard/voluntary.js"></script>
    <!--DATABLE OF LEARNING/PROGRAM ATTENDED -->
   <!--DATABLE OF LEARNING/PROGRAM ATTENDED -->
<script>
    $(document).ready(function() {
    $('table.civil').DataTable( {
        "paging":   true,
        "pageLength": 5,
        "searching": false,
        "ordering": false,
        "lengthChange": false
    } );
        } );

        $(document).ready(function() {
    $('table.voluntary').DataTable( {
        "paging":   true,
        "pageLength": 5,
        "searching": false,
        "ordering": false,
        "lengthChange": false
    } );
        } );

        $(document).ready(function() {
    $('table.program').DataTable( {
        "paging":   true,
        "pageLength": 5,
        "searching": false,
        "ordering": false,
        "lengthChange": false
    } );
        } );

        $(document).ready(function() {
    $('table.work').DataTable( {
        "paging":   true,
        "pageLength": 5,
        "searching": false,
        "ordering": false,
        "lengthChange": false
    } );
        } );
    </script>
<script>
    // SideNav Initialization
    $(".button-collapse").sideNav();

    var container = document.querySelector('.custom-scrollbar');
    var ps = new PerfectScrollbar(container, {
      wheelSpeed: 2,
      wheelPropagation: true,
      minScrollbarLength: 20
    });

    // Data Picker Initialization
    $('.datepicker').pickadate();

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
  </script>
    </main>