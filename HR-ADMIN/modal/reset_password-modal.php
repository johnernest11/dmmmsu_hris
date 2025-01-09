<?php
include "../../assets/change_password.php";

?>

<div class="modal fade" id="resetPasswordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                <form method="POST" class="needs-validation"  novalidate >
                <h4 class="modal-title" id="exampleModalCenterTitle" style="color:black;"><strong><center>Reset Password</center></strong></h4>
                                                
                <input type="hidden" class="form-control" id="Reset_password"  name="Reset_password">
                <br>
            <div class="text-center">
                <button class="btn btn-primary btn-lg " type="submit" name="Reset_pass">Reset</button>
            </div>
                    </form>
                </div>
            </div>
          </div>
        </div>
      </div>