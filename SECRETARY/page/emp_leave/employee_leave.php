<!--SIDEBAR OF THE SYSTEM-->
<?php
include "../sidebar.php";
?>
<main>
  <!-- Begin Page Content -->
  <div class="container-fluid">
      

<!-- Page Heading -->
<br>
<h1 class="h3 mb-2 text-gray-800">REQUEST EMPLOYEE LEAVE</h1>
<br>
<hr>
<!-- DataTales Example -->
<div class="card shadow mb-4 border-left-primary">
    <div class="card-body">
    <div class="table-responsive">
            <table class="table table-striped  leaveSta " id="dataTable" width="100%" cellspacing="0">
                   <thead>
                    <tr>
                        <th>#</th>
                        <th>Employee Id</th>
                        <th>Date filling</th>
                        <th>Fullname</th>
                        <th>Position</th>
                        
                        <th></th>
                        <th>Status</th>
                        <th>Operation</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Employee Id</th>
                        <th>Date filling</th>
                        <th>Fullname</th>
                        <th>Position</th>
                        <th></th>
                        <th>Status</th>
                        <th>Operation</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php
                    ob_start();
                    include_once "../../assets/connection.php";
                    $conn = dbConnect();
                    $account = $conn->prepare("SELECT * FROM emp_leave AS lea 
                    INNER JOIN account AS a ON lea.account_id = a.Id
                    INNER JOIN emp_profile as pro ON pro.account_id = a.Id
                    WHERE lea.leave_recommendation='Pending'  AND a.employee_department = '$_SESSION[employee_department]' ");
                    $account->execute();
                    while($result = $account->fetch(PDO::FETCH_ASSOC)){
                        $StatustDean= $result["leave_recommendation"];
                        $pending ="<td style='color: red;'><b>$StatustDean";
                        $disapprove ="<td style='color: red;'><b>$StatustDean";
                        $approve ="<td style='color: green;'><b>$StatustDean";
                        
                         if($StatustDean == 'Pending'){
                            $StatustDean =  $pending;
                        }else  if($StatustDean == 'Approved'){
                            $StatustDean =   $approve;
                        }else{
                            $StatustDean= $disapprove;
                        }
                      echo '<tr>
                                    <td>'.$result["leave_Id"].'</td>
                                    <td>'.$result["employee_id"].'</td>
                                    <td>'.$result["leave_filling"].'</td>
                                    <td>'.$result["employee_firstname"].' '.$result["employee_middlename"].' '.$result["employee_lastname"].'</td>
                                    <td>'.$result["employee_position"].'</td>
                                    <td><strong>'.$StatustDean.'</strong></td>
                                    
                                    <td> 
                                    <a href="employee_leave_profile.php?edit='.$result["leave_Id"].'"class="btn btn-success btn-sm "><span class ="fa fa-eye"> View</a>
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

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



</div>
<!-- End of Content Wrapper -->

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
</script>
<!-- End of Page Wrapper -->
</main>