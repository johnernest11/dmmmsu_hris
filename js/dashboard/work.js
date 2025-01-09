
//-------------------------------------------ADD WORK EXPERIENCE-------------------------------------------------//
function AddExperience(){

	var employee_id = document.getElementById("employee_id").value;
	var work_from = document.getElementById("work_from").value;
	var work_to = document.getElementById("work_to").value;
    var work_position = document.getElementById("work_position").value;
	var work_department = document.getElementById("work_department").value;
    var work_salary= document.getElementById("work_salary").value;
	var work_status = document.getElementById("work_status").value;
	var work_gov = document.getElementById("work_gov").value;
	if ( work_from == "" ||work_to == "" ||work_position == "" ||work_department == "" ||work_salary == "" ||work_status == ""|| work_gov == "") {
		Swal.fire({
			position: 'bottom-end',
			icon: 'error',
			title: 'Please Fill up all Work Experience Information.',
			showConfirmButton: false,
			timer: 1500
		  });return false;
	  }else{
		$.ajax({
		//GET QUERY//
		url: 'assets/work_query.php',
		type: 'post',
		data: {employee_id:employee_id,work_from:work_from,work_to:work_to,
			work_position:work_position,work_department:work_department,
			work_salary:work_salary, work_status: work_status, work_gov:work_gov},
			success: function(response) {
				Swal.fire({
					position: 'bottom-end',
					icon: 'success',
					title: 'Successfuly Add New Work Experience',
					showConfirmButton: false,
					timer: 1500
				  }).then(function() {
					window.location.reload();
				});
		} 
	});

	  }
}
//-------------------------------------------END OF VWORK EXPERIENCE-------------------------------------------------//
//EDIT /FETCH WORK EXPERIENCE DATA
function editWorke(workk){
	Swal.fire({
		title: 'Do you want to Continue?',
		showCancelButton: true,
		confirmButtonText: `Yes`,
	  }).then((result) => {
		/* Read more about isConfirmed, isDenied below */
		if (result.isConfirmed) {
			document.getElementById("work_ida").value=workk;
	var Id = workk;
	//alert(Id);
	$("#editworkModal").modal("show");;
	$.ajax({
	        url: 'assets/work_view.php',
	        type: 'post',
	        data: {Id:Id},
	        success: function(response) {
	          console.log(response);
	     		var data = JSON.parse(response);
                for(var ctr=0;ctr<data.length; ctr++){
					  document.getElementById("employee_ida").value = data[ctr].employee_id; 
					  document.getElementById("work_froma").value= data[ctr].work_from; 
					  document.getElementById("work_toa").value= data[ctr].work_to; 
					  document.getElementById("work_positiona").value= data[ctr].work_position; 
					  document.getElementById("work_departmenta").value= data[ctr].work_department; 
					  document.getElementById("work_salarya").value= data[ctr].work_salary; 
					  document.getElementById("work_gradea").value= data[ctr].work_grade;
					  document.getElementById("work_statusa").value= data[ctr].work_status;
					  document.getElementById("work_gova").value= data[ctr].work_gov;
                  }
	        } 
	    });
		} else if (result.isDismissed) {
		  Swal.fire('Thank You', '', 'info')
		}
	  })
}
