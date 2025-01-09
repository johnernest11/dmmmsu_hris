<!--SIDEBAR OF THE SYSTEM-->
<?php
include "../sidebar1.php";
include "../../modal/new_department-modal.php";
?>

<main>
  <!-- Begin Page Content -->
  <div class="container-fluid">
      

<!-- Page Heading -->
<br>
<h1 class="h3 mb-2 text-gray-800"><span class ="fa fa-building"> LIST OF DEPARTMENT</h1>
<br>
<hr>
<!-- <button type="button" class="btn peach-gradient btn-rounded" data-toggle="modal" data-target="#newDepartment">
<span class ="fa fa-building"></span>
        New Department
        </button> -->
        <br>
            <br>
     
<!-- DataTales Example -->
<div class="card shadow mb-4 border-left-primary">
    <div class="card-header py-3 peach-primary">
        <h6 class="m-0 font-weight-bold text-primary">Registered Department</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped department" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Department_Id</th>
                        <th>Department</th>
                        <th></th>
                        <th>Operation</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Department_Id</th>
                        <th>Department</th>
                        <th>CODE</th>
                        <th>Operation</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php
                    ob_start();
                    include_once "../../assets/connection.php";
                    $conn = dbConnect();
                    $account = $conn->prepare("SELECT * FROM department");
                    $account->execute();
                    while($result = $account->fetch(PDO::FETCH_ASSOC)){
                        $department= $result["dept_id"];
                      echo '<tr>
                              <td>'.$result["dept_id"].'</td>
                              <td>'.$result["dept_name"].'</td>
                              <td>'.$result["dept_code"].'</td>
                              <td>   <a href="department_employee.php?edit='.$result["dept_id"].'"class="btn btn-success btn-sm"><span class ="fa fa-eye">VIEW</a>
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
    var table = $('table.department').DataTable();
 
    $('table.department tbody').on( 'click', 'tr', function () {
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






