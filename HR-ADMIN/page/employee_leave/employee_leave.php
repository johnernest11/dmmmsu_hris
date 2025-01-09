   <!--SIDEBAR OF THE SYSTEM-->
<?php
include "../sidebar1.php";
?>
<main>
  <!-- Begin Page Content -->
  <div class="container-fluid">
      

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">REQUEST EMPLOYEE LEAVE</h1>
<hr>
<!-- DataTales Example -->
<div class="card shadow mb-4 border-left-primary">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> Employees Leave</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-stripped leavereq" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Employee Id</th>
                        <th>Fullname</th>
                        <th>Position</th>
                        <th>Department</th>
                        <th>Date Start</th>
                        <th>Date End</th>
                        <th>Operation</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Employee Id</th>
                        <th>Fullname</th>
                        <th>Position</th>
                        <th>Department</th>
                        <th>Date Start</th>
                        <th>Date End</th>
                        <th>Operation</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php
                    ob_start();
                    include_once "../../assets/connection.php";
                    $conn = dbConnect();
                    $account = $conn->prepare("SELECT * FROM emp_leave AS lea INNER JOIN emp_profile AS emp
                    ON emp.account_id = lea.account_id
                    INNER JOIN account ON emp.account_id = account.Id
                    WHERE  lea.leave_recommendation='Approved' AND lea.leave_status='Pending'");
                    $account->execute();
                    while($result = $account->fetch(PDO::FETCH_ASSOC)){
                      echo '<tr>
                                    <td>'.$result["leave_Id"].'</td>
                                    <td>'.$result["employee_id"].'</td>
                                    <td>'.$result["employee_firstname"].' '.$result["employee_middlename"].' '.$result["employee_lastname"].' '.$result["employee_extensionname"].'</td>
                                    <td>'.$result["employee_position"].'</td>
                                    <td>'.$result["employee_department"].'</td>
                                    <td>'.$result["leave_from"].'</td>
                                    <td>'.$result["leave_to"].'</td>
                                    <td> 
                                    <a href="employee_leave_profile.php?editt='.$result["leave_Id"].'"class="btn btn-success btn-sm"><span class ="fa fa-eye"> View</a>
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


<script>


        $(document).ready(function() {
    var table = $('table.leavereq').DataTable();
 
    $('table.leavereq tbody').on( 'click', 'tr', function () {
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