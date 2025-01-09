
//-------------------------------------------ADD  MEMBERSHIP IN ASSOCIATION/ORGANIZATION-------------------------------------------------//
function AddOrganization(){

	var employee_id = document.getElementById("employee_id").value;
	var organization_name = document.getElementById("organization_name").value;
	
	if ( organization_name == "" ) {
		Swal.fire({
			position: 'bottom-end',
			icon: 'error',
			title: 'Please Fill up all Association/Organization Information.',
			showConfirmButton: false,
			timer: 1500
		  });return false;
	  }else{
		$.ajax({
		//GET QUERY//
		url: 'assets/organization_query.php',
		type: 'post',
		data: {employee_id:employee_id,organization_name:organization_name},
			success: function(response) {
				Swal.fire({
					position: 'bottom-end',
					icon: 'success',
					title: 'Successfuly Add New Association/Organization',
					showConfirmButton: false,
					timer: 1500
				  }).then(function() {
					window.location.reload();
				});
		} 
	});

	  }
}
//-------------------------------------------END OF MEMBERSHIP IN ASSOCIATION/ORGANIZATION-------------------------------------------------//



//-------------------------------------------EDIT  MEMBERSHIP IN ASSOCIATION/ORGANIZATION-------------------------------------------------//

function  editOrganization(organizationn){
	Swal.fire({
		title: 'Do you want to Continue?',
		showCancelButton: true,
		confirmButtonText: `Yes`,
	  }).then((result) => {
		/* Read more about isConfirmed, isDenied below */
		if (result.isConfirmed) {
			document.getElementById("organization_idp").value=organizationn;
			var Id = organizationn;
			alert(Id);
		
	$("#EditOrganizationModal").modal("show");;
	$.ajax({
	        url: 'assets/organization_view.php',
	        type: 'post',
	        data: {Id:Id},
	        success: function(response) {
	          console.log(response);
	     		var data = JSON.parse(response);
                for(var ctr=0;ctr<data.length; ctr++){
					document.getElementById("employee_idp").value = data[ctr].employee_id; 
					  document.getElementById("organization_namep").value= data[ctr].organization_name; 
					 	}
	        } 
	    });
		} else if (result.isDismissed) {
		  Swal.fire('Thank You', '', 'info')
		}
	  })
}