<!--SIDEBAR OF THE SYSTEM-->
<?php
include "sidebar.php";
?>

  <!-- Begin Page Content -->
  <div class="container-fluid">
      

<!-- Page Heading -->
<br>
<h1 class="h3 mb-2 text-gray-800">REQUEST EMPLOYEE LEAVE</h1>
<br>
<hr>
<!-- DataTales Example -->
<div class="card shadow mb-4 border-left-primary">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> Employees Leave</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Employee Id</th>
                        <th>Fullname</th>
                        <th>Position</th>
                        <th>Status</th>
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
                        <th>Status</th>
                        <th>Date Start</th>
                        <th>Date End</th>
                        <th>Operation</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php
                    ob_start();
                    include_once "assets/connection.php";
                    $conn = dbConnect();
                    $account = $conn->prepare("SELECT * FROM emp_leave AS lea INNER JOIN employee AS emp
                    WHERE lea.leave_recommendation=''  AND lea.employee_id = emp.employee_id ");
                    $account->execute();
                    while($result = $account->fetch(PDO::FETCH_ASSOC)){
                      echo '<tr>
                                    <td>'.$result["leave_Id"].'</td>
                                    <td>'.$result["employee_id"].'</td>
                                    <td>'.$result["employee_firstname"].''.$result["employee_middlename"].''.$result["employee_lastname"].'</td>
                                    <td>'.$result["employee_position"].'</td>
                                    <td>'.$result["leave_status"].'</td>
                                    <td>'.$result["leave_date"].'</td>
                                    <td>'.$result["leave_date_end"].'</td>
                                    <td> 
                                    <a href="employee_leave_profile.php?edit='.$result["leave_Id"].'"class="btn btn-primary btn-lg"><span class ="fa fa-eye"></a>
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

<!-- Footer -->
<footer class="sticky-footer bg-white">
<div class="container my-auto">
<div class="copyright text-center my-auto">
    <span>Copyright &copy;2021 <a href="https://www.dmmmsu.edu.ph"> MIS</a></span>
</div>
</div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->