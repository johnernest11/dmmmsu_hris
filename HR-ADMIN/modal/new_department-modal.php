<?php 
        include '../../assets/addnewdepartment.php';
      ?>
     
        <!-- ADD NEW DEPARTMENT -->
        <div class="modal fade" id="newDepartment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"> </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
            <h5 class="modal-title text-primary" id="exampleModalLabel"><center>Add New Department</center></h5>
               <hr>
                <form class="row g-3"method="post">
                <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">Department Name</span>
                                <input type="text" class="form-control" id="department_name"  aria-describedby="inputGroupPrepend2" name="department_name" required >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">Department Code</span>
                                <input type="text" class="form-control" id="department_code"  aria-describedby="inputGroupPrepend2" name="department_code" >
                                </div>    
                            </div>
                            <div class="col-md-3">
                            <div class="input-group">
                                <input type="hidden" class="form-control">
                                </div>
                            </div>
                            <br>
                            <hr>
                            
                            <br>
                            <hr>
                            
                            <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <button class="btn btn-primary float-right" type="submit" name="submit">Add new Department</button>
                                </div>
                <div class="modal-footer">
                <hr>
               
                </div>
          
            </form>

            </div>
          
          </div>
        </div>
      </div>


        <!-------------------------------------------------------- EDIT DEPARTMENT -->
        <div class="modal fade" id="editDepartmentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"> </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
            <h5 class="modal-title text-primary" id="exampleModalLabel"><center>Update Department</center></h5>
               <hr>
                <form method="POST" class="needs-validation"  novalidate >
                <div class="col-md-12">
                            <div class="input-group">
                                <input type="hidden"  id="dept_ide" name="dept_ide">
                                <span class="input-group-text" id="inputGroupPrepend2">Department Name</span>
                                <input type="text" class="form-control" id="dept_namee"  aria-describedby="inputGroupPrepend2" name="dept_namee"  >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">Department Code</span>
                                <input type="text" class="form-control" id="dept_codee"  aria-describedby="inputGroupPrepend2" name="dept_codee" >
                                 </div> 
                            </div>
                            <div class="col-md-3">
                            <div class="input-group">
                                <input type="hidden" class="form-control">
                                </div>
                            </div>
                            <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <button class="btn btn btn-primary  float-right  "  type="submit"  id="updateDepartment"   name="updateDepartment"><i class='fas fa-user-edit'></i>Update</button>
                                </div>
          
            </form>

            </div>
          
          </div>
        </div>
      </div>