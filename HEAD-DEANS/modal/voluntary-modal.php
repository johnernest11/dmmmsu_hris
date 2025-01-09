 <?php
include "../../assets/profile_query.php";
?>
<!----------------------------------------------------------------------ADD VOLUNTARY  MODAL --------------------------------------------->
<!-- <div class="modal fade" id="voluntary" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">VOLUNTARY WORK OR INVOLVEMENT IN CIVIC /NON-GOVERMENT/PEOPLE/VOLUNTARY ORGANIZATION/S</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                
                <div class="form-row">
                                    <div class="col-md-2 mb-2">
                                    <input type="text" style="display: none;" id="employee_id"  name="employee_id" value="<?php echo$employee_id;?>" >
                                 
                                        <label for="validationCustom01">Name</label>
                                        <input type="text" class="form-control" id="voluntary_name"  name="voluntary_name" >
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <label for="validationCustom02">Address</label>
                                        <input type="text" class="form-control" id="voluntary_address"  name="voluntary_address"  >
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <label for="validationCustom02">From</label>
                                        <input type="date" class="form-control" id="voluntary_from"  name="voluntary_from" >
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="validationCustom01">To</label>
                                        <input type="date" class="form-control" id="voluntary_to"  name="voluntary_to" >
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <label for="validationCustom02">No. of Hours</label>
                                        <input type="text" class="form-control" id="voluntary_hours"  name="voluntary_hours"  >
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <label for="validationCustom02">Position</label>
                                        <input type="text" class="form-control" id="voluntary_position"  name="voluntary_position"  >
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button  type="button" class="btn btn-primary"  onclick="AddVoluntary();">ADD</button>
                                </div>

                </div>
            </div>
          </div>
        </div>
      </div> -->
<!----------------------------------------------------------------------END OF ADD VOLUNTARY MODAL --------------------------------------------->


<!----------------------------------------------------------------------ADD VOLUNTARY  MODAL --------------------------------------------->
<div class="modal fade" id="editVoluntaryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"> UPDATE VOLUNTARY WORK OR INVOLVEMENT IN CIVIC /NON-GOVERMENT/PEOPLE/VOLUNTARY ORGANIZATION/S</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                <form method="POST" class="needs-validation"  novalidate >
                <div class="form-row">
                                    <div class="col-md-2 mb-2">
                                         <input type="hidden"  id="voluntary_ida" name="voluntary_idv">
                                        <input type="hidden"  id="employee_idv" name="employee_idv">
                                        <label for="validationCustom01">Name</label>
                                        <input type="text" class="form-control" id="voluntary_namev"  name="voluntary_namev" >
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <label for="validationCustom02">Address</label>
                                        <input type="text" class="form-control" id="voluntary_addressv"  name="voluntary_addressv"  >
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <label for="validationCustom02">From (mm/dd/yyy)</label>
                                        <input type="text" class="form-control" id="voluntary_fromv"  name="voluntary_fromv" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy">
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="validationCustom01">To (mm/dd/yyy)</label>
                                        <input type="text" class="form-control" id="voluntary_tov"  name="voluntary_tov" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" >
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <label for="validationCustom02">No. of Hours</label>
                                        <input type="number" class="form-control" id="voluntary_hoursv"  name="voluntary_hoursv" >
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <label for="validationCustom02">Position</label>
                                        <input type="text" class="form-control" id="voluntary_positionv"  name="voluntary_positionv"   >
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <button class="btn btn btn-primary  float-right"  type="submit"  id="updateVoluntary"   name="updateVoluntary"><i class='fas fa-user-edit'></i>Update</button>
                                </div>

                </div>
            </div>
          </div>
        </div>
      </div>
<!----------------------------------------------------------------------END OF ADD VOLUNTARY MODAL --------------------------------------------->

