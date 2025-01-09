
<?php
include "../sidebar1.php";
include "../../modal/new_employee-modal.php";
?>

  <!-- Begin Page Content -->
<div class="container-fluid">
      
<main>
<!-- Page Heading -->
<br>
<h1 class="h3 mb-2 text-gray-800">LIST OF RESIGNED EMPLOYEES</h1>
<br>
<hr>
        <br>
            <br>

<!-- DataTales Example -->
<div class="card shadow mb-4 ">
    <div class="card-header py-3 btn peach-primary btn-rounded">
        <h6 class="m-0 font-weight-bold text-primary">Resigneded Employees</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <table id="myTable" class="table table-striped employee" cellspacing="0" width="100%">
                <thead>
                    <tr>
                         <th>#</th>
                        <th>Emp_Id</th>
                        <th>Fullname</th>
                        <th>Department</th>
                        <th>Position</th>
                        <th>Date</th>
                         <th>Status</th>
                        <th>Operation</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                         <th>#</th>
                        <th>Emp_Id</th>
                        <th>Fullname</th>
                        <th>Department</th>
                        <th>Position</th>
                        <th>Date</th>
                         <th>Status</th>
                        <th>Operation</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php
                    ob_start();
                    include_once "../../assets/connection.php";
                    $conn = dbConnect();
                    $account = $conn->prepare("SELECT * FROM account 
                    INNER JOIN emp_profile ON emp_profile.account_id = account.Id
                    INNER JOIN emp_history ON emp_history.account_id =account.Id 
                    WHERE emp_history.work_history ='Resign'");
                    $account->execute();
                    while($result = $account->fetch(PDO::FETCH_ASSOC)){
                      echo '<tr>
                                  <td>'.$result["history_id"].'</td>
                               <td>'.$result["employee_id"].'</td>
                              <td>'.$result["employee_firstname"].'  '.$result["employee_middlename"].'  '.$result["employee_lastname"].''.$result["employee_extensionname"].'</td>
                              <td>'.$result["employee_department"].'</td>
                              <td>'.$result["employee_position"].'</td>
                               <td>'.$result["date_work"].'</td>
                               <td style="color:red"><strong>'.$result["work_history"].'</strong></td>
                              <td>  <a href="employee_profile.php?edit='.$result["Id"].'"class="btn btn-success btn-sm"><span class ="fa fa-eye"> View</a>
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
    var table = $('table.employee').DataTable();
     $('table.employee tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
} );
</script>
</main>

