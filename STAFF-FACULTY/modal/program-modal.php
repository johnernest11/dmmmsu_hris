<?php
include "assets/profile_query.php";
?>

<!----------------------------------------------------------------------ADD PROGRAM ATTENDED  MODAL --------------------------------------------->
<div class="modal fade" id="attended" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">LEARNING AND DEVELOPMENT(L&D) INTERVENTIONS/TRAINING PROGRAMS ATTENDED</h5>
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
                                        <input type="text" class="form-control" id="attend_name"  name="attend_name" >
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <label for="validationCustom02">From</label>
                                        <input type="text" class="form-control" id="attend_from"  name="attend_from">
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="validationCustom01">To</label>
                                        <input type="text" class="form-control" id="attend_to"  name="attend_to" >
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <label for="validationCustom02">No. of Hours</label>
                                        <input type="text" class="form-control" id="attend_hours"  name="attend_hours"  >
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <label for="validationCustom02">TYPE OF LD </label>
                                        <input type="text" class="form-control" id="attend_ld"  name="attend_ld"  >
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <label for="validationCustom02">Conducted/Sponsored</label>
                                        <input type="text" class="form-control" id="attend_sponsored"  name="attend_sponsored"  >
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button  type="button" class="btn btn-primary"  onclick="AddAttended();">ADD</button>
                                </div>

                </div>
            </div>
          </div>
        </div>
      </div>
<!----------------------------------------------------------------------END OF PROGRAM ATTENDED MODAL --------------------------------------------->



<!----------------------------------------------------------------------ADD PROGRAM ATTENDED  MODAL --------------------------------------------->
<div class="modal fade" id="editAttendedModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">LEARNING AND DEVELOPMENT(L&D) INTERVENTIONS/TRAINING PROGRAMS ATTENDED</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                <form method="POST" class="needs-validation"  novalidate >
                <div class="form-row">
                                    <div class="col-md-2 mb-2">
                                    <input type="hidden"  id="attend_idc"  name="attend_idc" >
                                    <input type="hidden" id="employee_idc"  name="employee_idc" >
                                 
                                        <label for="validationCustom01">Name</label>
                                        <input type="text" class="form-control" id="attend_namec"  name="attend_namec" >
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <label for="validationCustom02">From (mm/dd/yyyy)</label>
                                        <input type="text" class="form-control" id="attend_fromc"  name="attend_fromc">
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="validationCustom01">To (mm/dd/yyyy)</label>
                                        <input type="text" class="form-control" id="attend_toc"  name="attend_toc" >
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <label for="validationCustom02">No. of Hours</label>
                                        <input type="text" class="form-control" id="attend_hoursc"  name="attend_hoursc"  >
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <label for="validationCustom02">TYPE OF LD </label>
                                        <input type="text" class="form-control" id="attend_ldc"  name="attend_ldc"  >
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <label for="validationCustom02">Conducted/Sponsored</label>
                                        <input type="text" class="form-control" id="attend_sponsoredc"  name="attend_sponsoredc"  >
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <button class="btn btn btn-primary  float-right"  type="submit"  id="updateProgram"   name="updateProgram"><i class='fas fa-user-edit'></i>Update</button>
                                </div>

                </div>
            </div>
          </div>
        </div>
      </div>
<!----------------------------------------------------------------------END OF PROGRAM ATTENDED MODAL --------------------------------------------->
