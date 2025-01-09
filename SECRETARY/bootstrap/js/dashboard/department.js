//-------------------------------------------ADD  ELIGIBILITY-----------------------------------------------//

//-------------------------------------------EDIT/FETCH ELIGIBILITY-------------------------------------------------//

function editDepartmente(department){
	Swal.fire({
		title: 'Do you want to Continue?',
		showCancelButton: true,
		confirmButtonText: `Yes`,
	  }).then((result) => {
		/* Read more about isConfirmed, isDenied below */
		if (result.isConfirmed) {
			document.getElementById("dept_ide").value=department;
			var Id = department;
			// alert(Id);
		
	$("#editDepartmentModal").modal("show");;
	$.ajax({
	        url: 'assets/department_view.php',
	        type: 'post',
	        data: {Id:Id},
	        success: function(response) {
	          console.log(response);
	     		var data = JSON.parse(response);
                for(var ctr=0;ctr<data.length; ctr++){
					document.getElementById("dept_ide").value = data[ctr].dept_id; 
					  document.getElementById("dept_namee").value= data[ctr].dept_name; 
					  document.getElementById("dept_codee").value= data[ctr].dept_code; 
            }
	        } 
	    });
		} 
	  })
}

//------------------------------------------- END EDIT/FETCH ELIGIBILITY-------------------------------------------------//



//-------------------------------------------UPDATE ELIGIBILITY-------------------------------------------------//
