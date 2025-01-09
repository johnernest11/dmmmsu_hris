
//-------------------------------------------ADD  MEMBERSHIP IN ASSOCIATION/ORGANIZATION-------------------------------------------------//
function AddVoluntary(){

	var employee_id = document.getElementById("employee_id").value;
	var voluntary_name = document.getElementById("voluntary_name").value;
	var voluntary_address= document.getElementById("voluntary_address").value;
	var voluntary_from = document.getElementById("voluntary_from").value;
	var voluntary_to= document.getElementById("voluntary_to").value;
	var voluntary_hours = document.getElementById("voluntary_hours").value;
	var voluntary_position = document.getElementById("voluntary_position").value;
	
	
	if (voluntary_name == "" || voluntary_address == "" || voluntary_from == "" || voluntary_to == ""
	|| voluntary_hours == ""|| voluntary_position == ""  ) {
		Swal.fire({
			position: 'bottom-end',
			icon: 'error',
			title: 'Please Fill up all Voluntary Information.',
			showConfirmButton: false,
			timer: 1500
		  });return false;
	  }else{
		$.ajax({
		//GET QUERY//
		url: 'assets/reference_query.php',
		type: 'post',
		data: {employee_id:employee_id,voluntary_name:voluntary_name,voluntary_address:voluntary_address,
			voluntary_from:voluntary_from ,voluntary_to:voluntary_to,voluntary_hours:voluntary_hours,voluntary_position:voluntary_position},
			success: function(response) {
				Swal.fire({
					position: 'bottom-end',
					icon: 'success',
					title: 'Successfuly Add New Voluntary Work',
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

//EDIT /FETCH VOLUNTARY DATA
function editVoluntary(voluntaryy1){
	Swal.fire({
		title: 'Do you want to Continue?',
		showCancelButton: true,
		confirmButtonText: `Yes`,
	  }).then((result) => {
		/* Read more about isConfirmed, isDenied below */
		if (result.isConfirmed) {
			document.getElementById("voluntary_ida").value=voluntaryy1;
			var Id = voluntaryy1;
			alert(Id);
		
	$("#editVoluntaryModal").modal("show");;
	$.ajax({
	        url: 'assets/voluntary_view.php',
	        type: 'post',
	        data: {Id:Id},
	        success: function(response) {
	          console.log(response);
	     		var data = JSON.parse(response);
                for(var ctr=0;ctr<data.length; ctr++){
					document.getElementById("employee_idv").value = data[ctr].employee_id; 
					  document.getElementById("voluntary_namev").value= data[ctr].voluntary_name; 
					  document.getElementById("voluntary_addressv").value= data[ctr].voluntary_address; 
					  document.getElementById("voluntary_fromv").value= data[ctr].voluntary_from; 
					  document.getElementById("voluntary_tov").value= data[ctr].voluntary_to; 
					  document.getElementById("voluntary_hoursv").value= data[ctr].voluntary_hours; 
					  document.getElementById("voluntary_positionv").value= data[ctr].voluntary_position;
				}
	        } 
	    });
		} else if (result.isDismissed) {
		  Swal.fire('Thank You', '', 'info')
		}
	  })
}
