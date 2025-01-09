
//-------------------------------------------ADD  MEMBERSHIP IN ASSOCIATION/ORGANIZATION-------------------------------------------------//
function AddReferences(){

	var employee_id = document.getElementById("employee_id").value;
	var reference_name = document.getElementById("reference_name").value;
	var reference_position = document.getElementById("reference_position").value;
	var reference_address = document.getElementById("reference_address").value;
	var reference_tel = document.getElementById("reference_tel").value;
	
	if ( reference_name == "" || reference_position == "" || reference_address == "" || reference_tel == "" ) {
		Swal.fire({
			position: 'bottom-end',
			icon: 'error',
			title: 'Please Fill up all References Information.',
			showConfirmButton: false,
			timer: 1500
		  });return false;
	  }else{
		$.ajax({
		//GET QUERY//
		url: 'assets/reference_query.php',
		type: 'post',
		data: {employee_id:employee_id,reference_name:reference_name,reference_position:reference_position,
			reference_address:reference_address,reference_tel:reference_tel},
			success: function(response) {
				Swal.fire({
					position: 'bottom-end',
					icon: 'success',
					title: 'Successfuly Add New References',
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


//-------------------------------------------EDIT REFERNECES-------------------------------------------------//

function  editReferences(referencessa){
	Swal.fire({
		title: 'Do you want to Continue?',
		showCancelButton: true,
		confirmButtonText: `Yes`,
	  }).then((result) => {
		/* Read more about isConfirmed, isDenied below */
		if (result.isConfirmed) {
			document.getElementById("references_idl").value=referencessa;
			var Id = referencessa;
			alert(Id);
		
	$("#editReferencesModal").modal("show");;
	$.ajax({
	        url: 'assets/reference_view.php',
	        type: 'post',
	        data: {Id:Id},
	        success: function(response) {
	          console.log(response);
	     		var data = JSON.parse(response);
                for(var ctr=0;ctr<data.length; ctr++){
					document.getElementById("employee_idl").value = data[ctr].employee_id; 
					  document.getElementById("reference_namel").value= data[ctr].reference_name; 
					  document.getElementById("reference_positionl").value = data[ctr].reference_position; 
					  document.getElementById("reference_addressl").value= data[ctr].reference_address; 
					  document.getElementById("reference_tell").value = data[ctr].reference_tel; 
					 	}
	        } 
	    });
		} else if (result.isDismissed) {
		  Swal.fire('Thank You', '', 'info')
		}
	  })
}