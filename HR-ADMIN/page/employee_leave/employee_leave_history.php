<!--SIDEBAR OF THE SYSTEM-->
<?php
include "../sidebar1.php";
include "../../assets/leave_query.php";
// include "assets/profile_query.php";
?>
<main>
<!-- Begin Page Content -->
<div class="card card-cascade narrower">
<div class="col-lg-12"  id="Pall">
<!-- NAVIGATION TAB LIST-->
 

<br>
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-link waves-light active waves-effect waves-light" id="nav-pending-tab" data-toggle="tab" href="#nav-pending" role="tab" aria-controls="nav-pending" aria-selected="true">Approved History</a>

                <div  class="col-md-12 text-right">
                <p class=" font-weight-bold dark-grey-text text-end">LEAVE REQUEST HISTORY </p>
                </div>
                 </div>
                 
        </nav>

<div class="tab-content" id="nav-tabContent">
<!--PENDING REQUEST NAVIGATION TAB-->
  <div class="tab-pane fade show active" id="nav-pending" role="tabpanel" aria-labelledby="nav-pending-tab">
  
  <label for="validationCustom01"><strong>APPROVED REQUEST</strong></label>
       <div class="card-body">
           <div class="table-responsive">
           <table class="table table-striped  leaveSta1 " id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>NAME</th>
                        <th>DEPARTMENT</th>
                        <th>DATE FILE</th>
                        <th>TYPE</th>
                        <th>DATE</th>
                        <th class="text-center">DEAN`S / HEAD`S STATUS</th>
                        <th class="text-center">HR STATUS</th>
                        <th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>NAME</th>
                        <th>DEPARTMENT</th>
                        <th>DATE FILE</th>
                        <th>TYPE</th>
                        <th>DATE</th>
                        <th class="text-center">DEAN`S / HEAD`S STATUS</th>
                        <th class="text-center">HR STATUS</th>
                        <th></th>
                    </tr>
                </tfoot>
                <tbody>
                <?php
                    ob_start();
                    include_once "assets/connection.php";
                    $conn = dbConnect();
                    $account = $conn->prepare("SELECT * FROM emp_leave AS l INNER JOIN account 
                    ON  l.account_id = account.Id 
                    INNER JOIN emp_profile ON emp_profile.profile_id = account.Id 
                    WHERE l.leave_recommendation='Approved' AND l.leave_status='Approved'
                    AND l.leave_to <= DATE(NOW()) ");
                    $account->execute();
                    while($result = $account->fetch(PDO::FETCH_ASSOC)){


                        if( $leave_to = $result["leave_to"]){
                            $leave_to1 =date("m/d/Y", strtotime($leave_to));
                        }else{
                        $leave_to1 ='';
                        }
                        if($leave_from = $result["leave_from"]){
                        $leave_from1 =date("m/d", strtotime($leave_from));
                        } else {
                            $leave_from1 = '';
                        }
                      echo '<tr>
                                     <td>'.$result["leave_Id"].'</td>
                                    <td>'.$result["employee_firstname"].' '.$result["employee_middlename"].' ' .$result["employee_lastname"].''.$result["employee_extensionname"].  '</td>
                                    <td>'.$result["employee_department"].'</td>
                                    <td>'.$result["leave_filling"].'</td>
                                    <td>'.$result["leave_type"].'</td>
                                    <td>'.$leave_from1.' - '.$leave_to1.'</td>
                                    <td class="text-center" style="color:green"><strong>'.$result["leave_recommendation"].'</strong></td>
                                    <td class="text-center" style="color:green"><strong>'.$result["leave_status"].'</strong></td>
                                    <td> 
                                    <a href="employee_leave_profilee.php?editt='.$result["leave_Id"].'"class="btn btn-success btn-sm "><span class ="fa fa-eye"> View</a>
                                    </td>
                            </tr>';


                    }
                    

                    ob_end_flush();
                    ?>

                </tbody>
            </table>
           </div>
           
       </div>
 <br>
 <hr>
    </div>




<script>


        $(document).ready(function() {
    var table = $('table.leaveSta').DataTable();
 
    $('table.leaveSta tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
 
    $('#button').click( function () {
        table.row('.selected').remove().draw( false );
    } );
} );

$(document).ready(function() {
    var table = $('table.leaveSta1').DataTable();
 
    $('table.leaveSta tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
 
    $('#button').click( function () {
        table.row('.selected').remove().draw( false );
    } );
} );
</script>
</main>
   
