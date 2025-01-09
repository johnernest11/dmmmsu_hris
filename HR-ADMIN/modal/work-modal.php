<?php
include "../../assets/hr_profile_query.php";
?>
<!-- <!----------------------------------------------------------------------ADD EXPERCIENCE MODAL --------------------------------------------->
<!-- <div class="modal fade" id="work" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">WORK EXPERIENCE</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                <div class="form-row">
                                    <div class="col-md-2 mb-2">
                                    <input type="text" style="display: none;" id="employee_id"  name="employee_id" value="<?php echo$employee_id;?>" >
                                 
                                        <label for="validationCustom01"> From</label>
                                        <input type="date" class="form-control" id="work_from"  name="work_from" >
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <label for="validationCustom02">To</label>
                                        <input type="date" class="form-control" id="work_to"  name="work_to"  >
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="validationCustom02">Position</label>
                                        <input type="text" class="form-control" id="work_position"  name="work_position">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom01">Department</label>
                                        <input type="text" class="form-control" id="work_department"  name="work_department" >
                                    </div>
                                    <div class="col-md-3 mb-2">
                                        <label for="validationCustom02">Salary</label>
                                        <input type="text" class="form-control" id="work_salary"  name="work_salary"  >
                                    </div>
                                    <div class="col-md-3 mb-2">
                                        <label for="validationCustom02">Grade</label>
                                        <input type="text" class="form-control" id="work_grade"  name="work_grade"  >
                                    </div>
                                    <div class="col-md-3 mb-2">
                                        <label for="validationCustom02">Status</label>
                                        <input type="text" class="form-control" id="work_status"  name="work_status"  >
                                    </div>
                                    <div class="col-md-3 mb-2">
                                        <label for="validationCustom02">Gov`t(Y/N)</label>
                                        <input type="text" class="form-control" id="work_gov"  name="work_gov"  >
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button  type="button" class="btn btn-primary"  onclick="AddExperience();">ADD</button>
                                </div>

                </div>
            </div>
          </div>
        </div>
      </div> -->
<!----------------------------------------------------------------------END OF ADD EXPERCIENCE MODAL --------------------------------------------->
 -->


<!----------------------------------------------------------------------EDIT EXPERCIENCE MODAL --------------------------------------------->
<div class="modal fade" id="editworkModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"> UPDATE WORK EXPERIENCE</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                <form method="POST" class="needs-validation"  novalidate >
                <div class="form-row">
                                    <div class="col-md-2 mb-2">
                                        <input type="hidden"  id="work_ida" name="work_ida">
                                        <input type="hidden"  id="employee_ida" name="employee_ida">
                                       
                                        <label for="validationCustom01"> From  (mm/dd/yyyy)</label>
                                        <input type="text" class="form-control" id="work_froma"  name="work_froma" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" >
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <label for="validationCustom02">To (mm/dd/yyyy)</label>
                                        <input type="text" class="form-control" id="work_toa"  name="work_toa"   >
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="validationCustom02">Position</label>
                                        <input type="text" class="form-control" id="work_positiona"  name="work_positiona">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom01">Department</label>
                                        <input type="text" class="form-control" id="work_departmenta"  name="work_departmenta" >
                                    </div>
                                    <div class="col-md-3 mb-2">
                                        <label for="validationCustom02">Salary</label>
                                        <input type="text" class="form-control" id="work_salarya"  name="work_salarya"  >
                                    </div>
                                    <div class="col-md-3 mb-2">
                                        <label for="validationCustom02">Grade</label>
                                        <input type="text" class="form-control" id="work_gradea"  name="work_gradea"  >
                                    </div>
                                    <div class="col-md-3 mb-2">
                                        <label for="validationCustom02">Status</label>
                                        <input type="text" class="form-control" id="work_statusa"  name="work_statusa"  >
                                    </div>
                                    <div class="col-md-3 mb-2">
                                        <label for="validationCustom02">Gov`t(Y/N)</label>
                                        <input type="text" class="form-control" id="work_gova"  name="work_gova"  >
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <button class="btn btn btn-primary  float-right"  type="submit"  id="updateWork"   name="updateWork"><i class='fas fa-user-edit'></i>Update</button>
                                </div>
                </div>
            </div>
          </div>
        </div>
      </div>
<!----------------------------------------------------------------------END OF EDIT EXPERCIENCE MODAL --------------------------------------------->
