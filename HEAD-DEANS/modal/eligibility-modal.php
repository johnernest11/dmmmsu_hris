<?php
include "../../assets/profile_query.php";
?>
<!-----------------------------------------------------------------ADD ELIGIBILITY MODAL ------------------------------------------->
<!-- <div class="modal fade" id="Eligibility" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">CIVIL SERVICE ELIGIBILITY</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="container-fluid">
            <div class="form-row">
                                <div class="col-md-3 mb-2">
                                <input type="text" style="display: none;" id="employee_id"  name="employee_id" value="<?php echo$employee_id;?>" >
                                    <label for="validationCustom01"> Name of Eligibility</label>
                                    <input type="text" class="form-control" id="eligibility_name"  name="eligibility_name" >
                                </div>
                                <div class="col-md-1 mb-2">
                                    <label for="validationCustom02">Rating</label>
                                    <input type="text" class="form-control" id="eligibility_rating"  name="eligibility_rating"   >
                                </div>
                                <div class="col-md-2 mb-2">
                                    <label for="validationCustom02">Date(mm/dd/yyy)</label>
                                    <input type="text" class="form-control" id="eligibility_date"  name="eligibility_date">
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label for="validationCustom01"> Place of Examination</label>
                                    <input type="text" class="form-control" id="eligibility_place"  name="eligibility_place" >
                                </div>
                                <div class="col-md-2 mb-2">
                                    <label for="validationCustom02">License No</label>
                                    <input type="text" class="form-control" id="eligibility_number"  name="eligibility_number"  >
                                </div>
                                <div class="col-md-2 mb-2">
                                    <label for="validationCustom02">Date of Validity(mm/dd/yyy)</label>
                                    <input type="text" class="form-control" id="eligibility_validity"  name="eligibility_validity"  >
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" onclick="AddEligibility();">ADD</button>
                            </div>
            </div>
        </div>
    </div>
    </div>
  </div> -->
<!-----------------------------------------------------------END OF ADD ELIGIBILITY MODAL ------------------------------------------->

 
        <!-------------------------------------------------------EDIT ELIGIBILITY MODAL --------------------------------------------->
        <div class="modal fade" id="editEligibilityModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">  UPDATE CIVIL SERVICE ELIGIBILITY</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                <form method="POST" class="needs-validation"  novalidate >
                                    <div class="form-row">
                                    <div class="col-md-3 mb-2">
                                        <input type="hidden"  id="eligibility_ide" name="eligibility_ide">
                                        <input type="hidden"  id="employee_ide" name="employee_ide"disabled>
                                        <label for="validationCustom01"> Name of Eligibility</label>
                                        <input type="text" class="form-control" id="eligibility_namee"  name="eligibility_namee">
                                    </div>
                                    <div class="col-md-1 mb-2">
                                        <label for="validationCustom02">Rating</label>
                                        <input type="text" class="form-control" id="eligibility_ratinge"name="eligibility_ratinge" data-inputmask="'mask': '99.99'" >
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <label for="validationCustom02">Date(mm/dd/yyyy)</label>
                                        <input type="text" class="form-control" id="eligibility_datee" name="eligibility_datee" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy">
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="validationCustom01"> Place of Examination</label>
                                        <input type="text" class="form-control" id="eligibility_placee" name="eligibility_placee">
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <label for="validationCustom02">License No</label>
                                        <input type="text" class="form-control" id="eligibility_numbere"name="eligibility_numbere" >
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <label for="validationCustom02">Validity(mm/dd/yyyy)</label>
                                        <input type="text" class="form-control" id="eligibility_validitye" name="eligibility_validitye" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <button class="btn btn btn-primary  float-right  "  type="submit"  id="updateEligibility"   name="updateEligibility"><i class='fas fa-user-edit'></i>Update</button>
                                </div>
                    </form>
                </div>
            </div>
          </div>
        </div>
      </div>
 <!------------------------------------------------------------- END OF EDIT ELIGIBILITY MODAL --------------------------------->

