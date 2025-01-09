
//-------------------------------------------ADD  PROGRAM ATTENDED-------------------------------------------------//
function AddAttended(){

	var employee_id = document.getElementById("employee_id").value;
	var attend_name = document.getElementById("attend_name").value;
	var attend_from = document.getElementById("attend_from").value;
    var attend_to = document.getElementById("attend_to").value;
	var attend_hours = document.getElementById("attend_hours").value;
    var attend_ld= document.getElementById("attend_ld").value;
	var attend_sponsored = document.getElementById("attend_sponsored").value;
	if ( attend_name == "" ||attend_from == "" ||attend_to == "" ||attend_hours == "" ||attend_ld == "" ||attend_sponsored == "") {
		Swal.fire({
			position: 'bottom-end',
			icon: 'error',
			title: 'Please Fill up all Program Attended Information.',
			showConfirmButton: false,
			timer: 1500
		  });return false;
	  }else{
		$.ajax({
		//GET QUERY//
		url: 'assets/attended_query.php',
		type: 'post',
		data: {employee_id:employee_id,attend_name:attend_name,attend_from:attend_from,
			attend_to:attend_to,attend_hours:attend_hours,
			attend_ld:attend_ld, attend_sponsored: attend_sponsored},
			success: function(response) {
				Swal.fire({
					position: 'bottom-end',
					icon: 'success',
					title: 'Successfuly Add New  Program Attended',
					showConfirmButton: false,
					timer: 1500
				  }).then(function() {
					window.location.reload();
				});
		} 
	});

	  }
}
//-------------------------------------------END OF PROGRAM ATTENDED-------------------------------------------------//


//EDIT /FETCH PROGRAM ATTENDED DATA
function editProgram(programm){
	Swal.fire({
		title: 'Do you want to Continue?',
		showCancelButton: true,
		confirmButtonText: `Yes`,
	  }).then((result) => {
		/* Read more about isConfirmed, isDenied below */
		if (result.isConfirmed) {
			document.getElementById("attend_idc").value=programm;
			var Id = programm;
			// alert(Id);
		
	$("#editAttendedModal").modal("show");;
	$.ajax({
	        url: 'assets/attended_view.php',
	        type: 'post',
	        data: {Id:Id},
	        success: function(response) {
	          console.log(response);
	     		var data = JSON.parse(response);
                for(var ctr=0;ctr<data.length; ctr++){
					document.getElementById("employee_idc").value = data[ctr].employee_id; 
					  document.getElementById("attend_namec").value= data[ctr].attend_name; 
					  document.getElementById("attend_fromc").value= data[ctr].attend_from; 
					  document.getElementById("attend_toc").value= data[ctr].attend_to; 
					  document.getElementById("attend_hoursc").value= data[ctr].attend_hours; 
					  document.getElementById("attend_ldc").value= data[ctr].attend_ld; 
					  document.getElementById("attend_sponsoredc").value= data[ctr].attend_sponsored;
				}
	        } 
	    });
		} else if (result.isDismissed) {
		  Swal.fire('Thank You', '', 'info')
		}
	  })
}
