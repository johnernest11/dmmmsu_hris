
//-------------------------------------------ADD  VOLUNTARY-------------------------------------------------//
function AddVoluntary(){

	var employee_id = document.getElementById("employee_id").value;
	var voluntary_name = document.getElementById("voluntary_name").value;
	var voluntary_address = document.getElementById("voluntary_address").value;
    var voluntary_from = document.getElementById("voluntary_from").value;
	var voluntary_to = document.getElementById("voluntary_to").value;
    var voluntary_hours= document.getElementById("voluntary_hours").value;
	var voluntary_position = document.getElementById("voluntary_position").value;
	if ( voluntary_name == "" ||voluntary_address == "" ||voluntary_from == "" ||voluntary_to == "" ||voluntary_hours == "" ||voluntary_position == "") {
		Swal.fire({
			position: 'bottom-end',
			icon: 'error',
			title: 'Please Fill up all.',
			showConfirmButton: false,
			timer: 1500
		  });return false;
	  }else{
		$.ajax({
		//GET QUERY//
		url: 'assets/voluntary_query.php',
		type: 'post',
		data: {employee_id:employee_id,voluntary_name:voluntary_name,voluntary_address:voluntary_address,
			voluntary_from:voluntary_from,voluntary_to:voluntary_to,
			voluntary_hours:voluntary_hours, voluntary_position: voluntary_position},
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
//-------------------------------------------END OF VOLUNTARY-------------------------------------------------//
