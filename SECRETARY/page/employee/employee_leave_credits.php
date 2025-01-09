<!--SIDEBAR OF THE SYSTEM-->
<?php
include "../sidebar.php";
include "../../assets/leave_query.php";
// include "../../assets/employee_profile_query.php";
?>
<main>
<!-- Begin Page Content -->
<div class="card card-cascade narrower">
<div class="col-lg-12"  id="Pall">
<!-- NAVIGATION TAB LIST-->
 

<br>
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-link waves-light active waves-effect waves-light" id="nav-Index-tab" data-toggle="tab" href="#nav-Index" role="tab" aria-controls="nav-Index" aria-selected="true">INDEX</a>
                <a class="nav-item nav-link" id="nav-Credits-tab" data-toggle="tab" href="#nav-Credits" role="tab" aria-controls="nav-Credits" aria-selected="false">CREDITS</a>
                    <div  class="col-md-12 text-right">
                        <p class=" font-weight-bold dark-grey-text text-right">LEAVE INDEX CARD </p>
                    </div>
            </div>
        </nav>

<div class="tab-content" id="nav-tabContent">
<!--PERSONAL INFORMATION NAVIGATION TAB-->
<div class="tab-pane fade show active" id="nav-Index" role="tabpanel" aria-labelledby="nav-Index-tab">
   <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered  leaveSta " id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th colspan="7"><b>Name: <?php echo$employee_firstname; echo' '; echo$employee_middlename; echo'. ';  echo$employee_lastname; echo$employee_extensionname;?></b></th>
                        <th colspan="6"><b>Office/Division: <?php echo$employee_department; ?></b></th>
                    </tr>
                    <tr>
                        <th rowspan="2"><b>#</b></th>
                        <th rowspan="2"><b>PERIOD/MONTH</b></th>
                        <th rowspan="2"><b>PARTICULAR</b></th>
                        <th colspan="4"><b>VACATION LEAVE</b></th>
                        <th colspan="4"><b>SICK LEAVE</b></th>
                        <th><b></b></th>
                    </tr>
                    <tr>
                        <th><b>EARNED</b></th>
                        <th><b>ABS UND W/P</b></th>
                        <th><b>BALANCE</b></th>
                        <th><b>ABS END WOP</b></th>
                        <th><b>EARNED</b></th>
                        <th><b>ABS UND W/P</b></th>
                        <th><b>BALANCE</b></th>
                        <th><b>ABS END WOP</b></th>
                        <th><b>Date & action taken on application for leave</b></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        ob_start();
                        include_once "../../assets/connection.php";
                        $conn = dbConnect();
                        $account = $conn->prepare("SELECT * FROM emp_credit  WHERE account_id = $Id AND   cre_status='Approved'");
                        $account->execute();
                        while($result = $account->fetch(PDO::FETCH_ASSOC)){
                            if( $leave_to = $result["cre_dateto"]){
                                $leave_to1 =date("m/d/Y", strtotime($leave_to));
                            }else{
                            $leave_to1 ='';
                            }
                            if($leave_from = $result["cre_datefrom"]){
                            $leave_from1 =date("m/d", strtotime($leave_from));
                            } else {
                                $leave_from1 = '';
                            }
                        echo '<tr>
                        
                                    <td>'.$result["cre_id"].'</td>
                                    <td><b>'.$result["month_date"].'</b></td>
                                    <td>'.$result["cre_days"].' - '.$result["cre_type"].'</td>
                                    <td>'.$result["cre_vearned"].'</td>
                                    <td>'.$result["cre_vwpay"].'</td>
                                    <td>'.$result["cre_vbalance"].'</td>
                                    <td>'.$result["cre_vwopay"].'</td>
                                    <td>'.$result["cre_searned"].'</td>
                                    <td>'.$result["cre_swpay"].'</td>
                                    <td>'.$result["cre_sbalance"].'</td>
                                    <td>'.$result["cre_swopay"].'</td>
                                    <td>'.$result["cre_type"].' '.$leave_from1. '-'. $leave_to1.'</td>
                                    
                                </tr>';
                        }
                        ob_end_flush();
                    ?>
                </tbody>
            </table>
            
        </div>
    </div>
    
</div>

<!--PERSONAL INFORMATION NAVIGATION TAB-->
<div class="tab-pane fade " id="nav-Credits" role="tabpanel" aria-labelledby="nav-Credits-tab">
  <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered  credits " id="dataTable" width="100%" cellspacing="0">
                <thead>
                            <tr>
                            <th colspan="5"><b>Name: <?php echo$employee_firstname; echo' '; echo$employee_middlename; echo'. ';  echo$employee_lastname; echo$employee_extensionname;?></b></th>
                                <th colspan="4"><b>Office/Division: <?php echo$employee_department; ?></b></th>
                            </tr>
                            <tr>
                            <th rowspan="2"><b>#</b></th>
                            <th rowspan="2"><b>PERIOD</b></th>
                            <th colspan="3"><b>VACATION LEAVE</b></th>
                           
                                <th colspan="2"><b>SICK LEAVE</b></th>
                                <th></th>
                            </tr>
                            <tr>
                                
                                <th><b>EARNED</b></th>
                                <th><b>BALANCE</b></th>
                                <th></th>
                                <th><b>EARNED</b></th>
                                <th><b>BALANCE</b></th>
                                <th></th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                ob_start();
                                include_once "../../assets/connection.php";
                                $conn = dbConnect();
                                $account = $conn->prepare("SELECT * FROM emp_credit  WHERE account_id = $Id AND month_date !=''
                                ");
                                $account->execute();
                                while($result = $account->fetch(PDO::FETCH_ASSOC)){

                                    $month_name = $result["month_date"];
                                    $month_name1 =date("Y F", strtotime($month_name));


                                echo '<tr>
                                            <td>'.$result["cre_id"].'</td>
                                            <td><b>'.$month_name1.'</b></td>
                                            <td>'.$result["cre_vearned"].'</td>
                                            <td>'.$result["cre_vbalance"].'</td>
                                            <td></td>
                                            <td>'.$result["cre_searned"].'</td>
                                            <td>'.$result["cre_sbalance"].'</td>
                                            <td></td>

                                        </tr>';
                                }
                                
                                ob_end_flush();
                            ?>
                                 </tbody>
                                 </table>
                                 
                  </div>
                
            </div>
<div class="row">
    <div class="col-md-6">
        <p><b>LEGEND:</b></p>
        <p class="ml-5"><b> ABS </b> -Absent</p>
        <p class="ml-5"><b> UND </b> -Undertime</p>
        <p class="ml-5"><b> W/P </b> -With Pay</p>
        <p class="ml-5"><b> WOP </b> -Without Pay</p>
    </div>
    <div class="col-md-6">
        <p><b> Recorded By: </b>____________________</p>
        <p class="ml-5"><b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;HRM Assistant</b></p>
        <p><b>Verified by:</b>&emsp;<u> RAHFIE C. NULLAR</u></p>
        <p class="ml-5"><b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;HRMO</p>
</div>
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
    var table = $('table.credits').DataTable();
 
    $('table.credits tbody').on( 'click', 'tr', function () {
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
   
