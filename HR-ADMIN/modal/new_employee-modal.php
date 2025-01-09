      <?php 
        include_once "../../assets/employee_profile_query.php";
      ?>

 
     
        <!-- ADD NEW EMPLOYEE -->
        <div class="modal fade" id="newemployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"> Add New Employee</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
            <h5 class="modal-title text-primary" id="exampleModalLabel"><center>Employee Personal Information</center></h5>
               <hr>
                <form class="row g-3"method="post">
                <div class="col-md-6">
                
                            <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">Employee Id</span>
                                <input type="number" class="form-control" id="employee_id"  aria-describedby="inputGroupPrepend2" name="employee_id" required  >
                                </div>

                               
                                <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">First Name</span>
                                <input type="text" class="form-control" id="employee_firstname"  aria-describedby="inputGroupPrepend2" name="employee_firstname" required>
                                </div>

                                <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">Middle Name</span>
                                <input type="text" class="form-control" id="employee_middlename"  aria-describedby="inputGroupPrepend2" name="employee_middlename" required>
                                </div>

                                <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">Last Name</span>
                                <input type="text" class="form-control" id="employee_lastname"  aria-describedby="inputGroupPrepend2" name="employee_lastname" required>
                                </div>

                                <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">Extension Name</span>
                                <input type="text" class="form-control" id="employee_extensionname"  aria-describedby="inputGroupPrepend2" name="employee_extensionname" >
                                </div> 
                                
                                <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">Sex</span>
                                <select class="form-control" id ="employee_sex" name="employee_sex" required>
                                    <option></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                </div>

                                <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">Date of Birth</span>
                                <input type="date" class="form-control" id="employee_datebirth"  aria-describedby="inputGroupPrepend2" name="employee_datebirth" required>
                                </div>
                                
                                <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">Place of Birth</span>
                                <input type="text" class="form-control" id="employee_placebirth"  aria-describedby="inputGroupPrepend2" name="employee_placebirth" >
                                </div> 
                                
                                <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">Civil_Status</span>
                                <select class="form-control" id ="employee_civilstatus" name="employee_civilstatus" required>
                                    <option></option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Divorce">Divorce</option>
                                    <option value="Widowed">Widowed</option>
                                </select> 
                                </div>   

                                <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">Citizenship</span>
                                <input type="text" class="form-control" id="employee_citizenshipp"  aria-describedby="inputGroupPrepend2" name="employee_citizenshipp"  value="Filipino" >
                                </div>  

                                <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">Telephone</span>
                                <input type="text" class="form-control" id="employee_telephone"  aria-describedby="inputGroupPrepend2" name="employee_telephone"data-inputmask="'mask': '(999)-999-9999'" >
                                </div>    

                                <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">Contact No.</span>
                                <input type="text" class="form-control" id="employee_contact"  aria-describedby="inputGroupPrepend2" name="employee_contact" data-inputmask="'mask': '(999)-9999-999'" required>
                                </div>  

                                <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">Height (m)</span>
                                <input type="text" class="form-control" id="employee_height"  aria-describedby="inputGroupPrepend2" name="employee_height" data-inputmask="'mask': '99.99'">
                                </div>

                                <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">Weight (kg)</span>
                                <input type="text" class="form-control" id="employee_weight"  aria-describedby="inputGroupPrepend2" name="employee_weight" data-inputmask="'mask': '99.99'">
                                </div>
                                
                                <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">Blood Type</span>
                                <select class="form-control" id ="employee_bloodtype" name="employee_bloodtype">
                                    <option ></option>
                                    <option value="A+">A+</option>
                                    <option value="O+">O+</option>
                                    <option value="B+">B+</option>
                                    <option value="AB+">AB+</option>
                                    <option value="A-">A-</option>
                                    <option value="O-">O-</option>
                                    <option value="B-">B-</option>
                                    <option value="AB-">AB-</option>
                                </select> 
                                </div>

                                <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">Barangay</span>
                                <input type="text" class="form-control" id="employee_Pbarangay"  aria-describedby="inputGroupPrepend2" name="employee_Pbarangay" >
                                </div>

                                <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">City/Municipality</span>
                                <input type="text" class="form-control" id="employee_Pcity"  aria-describedby="inputGroupPrepend2" name="employee_Pcity" >
                                </div>

                                <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">Province</span>
                                <input type="text" class="form-control" id="employee_Pprovince"  aria-describedby="inputGroupPrepend2" name="employee_Pprovince" >
                                </div>  

                            </div>

                            <div class="col-md-6">
                                <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">PAGIBIG NO.</span>
                                <input type="text" class="form-control" id="employee_pagibig"  aria-describedby="inputGroupPrepend2" name="employee_pagibig" data-inputmask="'mask': '9999-9999-9999'">
                                </div>    

                                <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">PHILHEALTH NO.</span>
                                <input type="text" class="form-control" id="employee_philhealth"  aria-describedby="inputGroupPrepend2" name="employee_philhealth" data-inputmask="'mask': '99-999999999-9'" >
                                </div> 

                                <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">SSS NO.</span>
                                <input type="text" class="form-control" id="employee_sss"  aria-describedby="inputGroupPrepend2" name="employee_sss" data-inputmask="'mask': '99-999999999-9' " >
                                </div>

                                <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">TIN NO.</span>
                                <input type="text" class="form-control" id="employee_tin"  aria-describedby="inputGroupPrepend2" name="employee_tin" data-inputmask="'mask': '99-999999999-9' " >
                                </div>

                                <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">GSIS NO.</span>
                                <input type="text" class="form-control" id="employee_gsis"  aria-describedby="inputGroupPrepend2" name="employee_gsis" data-inputmask="'mask': '99-999999999-9'" >
                                </div>  

                               

                                <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">Position</span>
                                <input type="text" class="form-control" id="employee_position"  aria-describedby="inputGroupPrepend2" name="employee_position"  required> 
                                </div>

                                <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">Status</span>
                                <select class="form-control" id ="employee_status" name="employee_status" required>
                                    <option ></option>
                                    <option value="Contractual">Contractual</option>
                                    <option value="Casual">Casual</option>
                                    <option value="Temporary">Temporary</option>
                                    <option value="Permanent">Permanent</option>
                                    <option value="COS/JO">COS/JO</option>
                                </select> 
                                </div>

                                <script>
                               $('#employee_status').change(function() {
                                  if( $(this).val() == 'COS/JO') {
                                    document.getElementById("employee_salarycos").style.visibility = 'visible'
                                    document.getElementById("employee_salarygrade").style.visibility = 'hidden'
                                    document.getElementById("employee_salarystep").style.visibility = 'hidden'

                                  /*    $('#employee_salarycos').prop( "disabled", false );
                                      $('#employee_salarygrade').prop( "disabled", true );
                                      $('#employee_salarystep').prop( "disabled", true );*/
                                  } else {       
                                    document.getElementById("employee_salarycos").style.visibility = 'hidden'
                                    document.getElementById("employee_salarygrade").style.visibility = 'visible'
                                    document.getElementById("employee_salarystep").style.visibility = 'visible'
                                     /* $('#employee_salarycos').prop( "disabled", true );
                                      $('#employee_salarygrade').prop( "disabled", false );
                                      $('#employee_salarystep').prop( "disabled", false );*/
                                     
                                  }
                              });
                                </script>


                                <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2"> COS Salary</span>
                                <input type="text" class="form-control" id="employee_salarycos"  aria-describedby="inputGroupPrepend2" V name="employee_salarycos" data-inputmask="'alias': 'currency'" > 
                                </div>
                            
                                <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">Salary Grade</span>
                                <select class="form-control" id ="employee_salarygrade" name="employee_salarygrade" >
                                <?php  
                                  ob_start();
                                  include_once "assets/connection.php";
                                  $conn = dbConnect();
                                  $account = $conn->prepare("SELECT * FROM salary_grade");
                                  $account->execute(); ?> 
                                            <option value=" " ></option>
                                    <?php while($result = $account->fetch(PDO::FETCH_ASSOC)):;?>
                                            <option value="<?php echo $result['salary_id'];?>"><?php echo $result['grade'];?></option>
                                        <?php endwhile;?>
                                </select> 
                                </div>

                                <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">Salary Step</span>
                                <select class="form-control" id ="employee_salarystep" name="employee_salarystep" >
                                 <?php  
                                  ob_start();
                                  include_once "assets/connection.php";
                                  $conn = dbConnect();
                                  $account = $conn->prepare("SELECT * FROM sheet1 GROUP BY step");
                                  $account->execute(); ?> 
                                            <option value=" " ></option>
                                    <?php while($result = $account->fetch(PDO::FETCH_ASSOC)):;?>
                                            <option value="<?php echo $result['step'];?>"><?php echo $result['step'];?></option>
                                        <?php endwhile;?>
                                </select> 
                                </div>

                                <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend">Department</span>
                                <select class="form-control" id ="employee_department" name="employee_department" required>
                                <?php  
                                  ob_start();
                                  include_once "assets/connection.php";
                                  $conn = dbConnect();
                                  $account = $conn->prepare("SELECT * FROM department");
                                  $account->execute(); ?> 
                                            <option ></option>
                                    <?php while($result = $account->fetch(PDO::FETCH_ASSOC)):;?>
                                            <option value="<?php echo $result['dept_name'];?>"><?php echo $result['dept_name'];?></option>
                                        <?php endwhile;?>
                                </select>  </div> 

                                <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">Type</span>
                                <select class="form-control" id ="employee_type" name="employee_type" required>
                                    <option></option>
                                    <option value="Teaching Staff">Teaching Staff</option>
                                    <option value="Non-Teaching Staff">Non-Teaching Staff</option>
                                </select> 
                                </div>

                                <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">Account Privilage</span>
                                <select class="form-control" id ="account_privilage" name="account_privilage" required>
                                    <option></option>
                                    <option value="Admin">HR</option>
                                    <option value="Secretary">Secretary</option>
                                    <option value="Dean">Dean</option>
                                    <option value="Staff">Staff</option>
                                </select> 
                                </div> 

                                <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">Date Deploy</span>
                                <input type="date" class="form-control" id="employee_start"  aria-describedby="inputGroupPrepend2" name="employee_start"required >
                                </div>  

                                <div class="input-group">
                                <input type="hidden" value="Active" name="employee_active" class="form-control">
                                </div>

                                <div class="modal-footer">
                                <button class="btn btn-primary right-text" type="submit" name="submit">Submit form</button>
                                </div>


                            </div>
                         
                            <hr>
               </div>
                
            </form>

           
          
          </div>
        </div>
      </div>
