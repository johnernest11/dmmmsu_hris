<!--SIDEBAR OF THE SYSTEM-->
<?php
include "../sidebar1.php";

if (isset($_GET['edit'])){
    include_once "../../assets/connection.php";
    $conn = dbConnect();
    $Id = $_GET['edit'];
    $account = $conn->prepare("SELECT * FROM account INNER JOIN department ON 
    account.employee_department = department.dept_name WHERE department.dept_id = $Id ");
    $account->execute();

    $result = $account->fetch(PDO::FETCH_ASSOC);
    $dept_name =$result['dept_name'];

}

?>



<main>
  <!-- Begin Page Content -->
  <div class="container-fluid">
      

<!-- Page Heading -->
<br>
<br>
<hr>
       <!-- DataTales Example -->
<div class="card shadow mb-4 border-left-primary">
    <div class="card-header py-3 ">
        <h6 class="m-0 font-weight-bold text-primary">EMPLOYEE OF <?php echo $result['dept_name'];?></h6> 
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped deptemp" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Employee Id</th>
                        <th>Department</th>
                        <th>Code</th>
                        <th>Operation</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Employee Id</th>
                        <th>Department</th>
                        <th>Code</th>
                        <th>Operation</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php
                    ob_start();
                    include_once "../../assets/connection.php";
                    $conn = dbConnect();
                    $Id = $_GET['edit'];
                    $account = $conn->prepare("SELECT * FROM account INNER JOIN department ON 
                    account.employee_department = department.dept_name
                    INNER JOIN emp_profile ON emp_profile.account_id = account.Id WHERE
                    account.employee_active ='Active' AND department.dept_id = $Id ");
                    $account->execute();
                    while($result = $account->fetch(PDO::FETCH_ASSOC)){
                      echo '<tr>
                              <td>'.$result["employee_id"].'</td>
                              <td>'.$result["employee_firstname"].'</td>
                              <td>'.$result["employee_position"].'</td>
                              <td>   <a href="employee_profile.php?edit='.$result["Id"].'"class="btn btn-success btn-rounded"><span class ="fa fa-eye"> View</a>
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
<!-- End of Page Wrapper -->
<script>

    //ADD NEW DEPARTMENT 
function addDepartment(){

	var departmentname = document.getElementById("department_name").value;
	var departmentshortcut = document.getElementById("department_shortcut").value;
	//alert(deptname);
	//alert(deptshort);
		$.ajax({
            //GET QUERY//
	        url: 'assets/addnewdepartment.php',
	        type: 'post',
	        data: {departmentname:departmentname,departmentshortcut:departmentshortcut},
	        success: function(response) {
	          //console.log(response);
	     	alert("Succefully Added!");
	     	window.location.reload();
	                   
	                        

	        } 
	    });
	   

}



// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
    </script>
    <script>


$(document).ready(function() {
var table = $('table.deptemp').DataTable();

$('table.deptemp tbody').on( 'click', 'tr', function () {
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