
<?php
include "../sidebar1.php";
include "../../modal/reset_password-modal.php";
?>
<main>
  <!-- Begin Page Content -->
  <div class="container-fluid">
      

<!-- Page Heading -->
<br>
<h1 class="h3 mb-2 text-gray-800">LIST OF EMPLOYEE ACCOUNT</h1>
<br>
<hr>
    <a type="button" class="btn btn-primary " href="fpdf/ACCOUNT.php?"  target="_blank">
        <span class ="fa fa-print "></span>
            Print
</a>
    <br>
<br>
<!-- DataTales Example -->
<div class="card shadow mb-4 ">
<div class="card-header py-3 btn peach-primary btn-rounded">
        <h6 class="m-0 font-weight-bold text-primary">Employees Account</h6>
</div>
    <div class="card-body">
        <div class="table-responsive">
        <table id="myTable" class="table table-striped account" cellspacing="0" width="100%">
            <thead>
                    <tr>
                        <th>#</th>
                        <th>Emp_Id</th>
                        <th>Fullname</th>
                        <th>Password</th>
                        <th>Position</th>
                        <th></th>
                        <th>Status</th><th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Emp_Id</th>
                        <th>Fullname</th>
                        <th>Password</th>
                        <th>Position</th>
                        <th></th>
                        <th>Status</th><th></th>
                    </tr>
                </tfoot>
                <tbody>
                <?php
                    ob_start();
                    include_once "../../assets/connection.php";
                    $conn = dbConnect();
                    $account = $conn->prepare("SELECT * FROM account 
                    INNER JOIN emp_profile ON emp_profile.account_id = account.Id
                    WHERE account.employee_history = ''   AND account.Id != $_SESSION[Id];");
                    
                    $account->execute();
                    while($result = $account->fetch(PDO::FETCH_ASSOC)){
                    $Active= $result['employee_active'];
                    $warning ="<td style='color: red;'><b>$Active";
                    $actively ="<td style='color: green;'><b>$Active";
                    
                     if($Active == 'Active'){
                        $Active =  $actively;
                    }else{
                        $Active =   $warning;
                         }
                        
                      echo '<tr>
                                    <td>'.$result["Id"].'</td>
                                    <td>'.$result["employee_id"].'</td>
                                    <td>'.$result["employee_firstname"].'  '.$result["employee_middlename"].'  '.$result["employee_lastname"].''.$result["employee_extensionname"].'</td>
                                    <td>'.$result["password"].'</td>
                                    <td>'.$result["employee_position"].'</td>
                                    <td>'.$Active.'</td>
                                    <td>  <a  role="button" href="employee_account_update.php?edit='.$result["Id"].'"class="btn btn-success btn-sm"><span class ="fa fa-eye"> View</a>
                                          <a role="button" onclick="ResetPass('.$result["Id"].');" class="btn btn-danger btn-sm"><span class ="fa fa-undo"> Reset Password</span></a>
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
<!-- End of Page Wrapper --><script src="../../bootstrap/js/dashboard/reset_password.js"></script>
<script>


        $(document).ready(function() {
    var table = $('table.account').DataTable();
 
    $('table.account tbody').on( 'click', 'tr', function () {
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