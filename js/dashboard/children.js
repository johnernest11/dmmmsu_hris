
//ADD CHILDREN
function AddChild(){

	var employee_id = document.getElementById("employee_id").value;
	var child_name = document.getElementById("child_name").value;
    var child_birthdate = document.getElementById("child_birthdate").value;
	if ( child_name == "" ||child_birthdate == "") {
		Swal.fire({
			position: 'bottom-end',
			icon: 'error',
			title: 'Please Fill up all Children Information.',
			showConfirmButton: false,
			timer: 1500
		  });return false;
	  }else{
		$.ajax({
		//GET QUERY//
		url: 'assets/child_query.php',
		type: 'post',
		data: {employee_id:employee_id,child_name:child_name,child_birthdate:child_birthdate
			},
			success: function(response) {
				Swal.fire({
					position: 'bottom-end',
					icon: 'success',
					title: 'Successfuly Add New Children',
					showConfirmButton: false,
					timer: 1500
				  }).then(function() {
					window.location.reload();
				});
		} 
	});

	  }
}

//EDIT /FETCH CHILDREN DATA


function editChild(childd){
	Swal.fire({
		title: 'Do you want to Continue?',
		showCancelButton: true,
		confirmButtonText: `Yes`,
	  }).then((result) => {
		/* Read more about isConfirmed, isDenied below */
		if (result.isConfirmed) {
			document.getElementById("children_idc").value=childd;
			var Id = childd;
			alert(Id);
		
			$("#EditChildrenModal").modal("show");;
			$.ajax({
					url: 'assets/child_view.php',
					type: 'post',
					data: {Id:Id},
					success: function(response) {
					  console.log(response);
						 var data = JSON.parse(response);
						for(var ctr=0;ctr<data.length; ctr++){
							 document.getElementById("employee_idc").value = data[ctr].employee_id; 
							  document.getElementById("child_namee").value= data[ctr].child_name; 
							  document.getElementById("child_birthdatee").value= data[ctr].child_birthdate; 
							}
					} 
				});
		} else if (result.isDismissed) {
		  Swal.fire('Thank You', '', 'info')
		}
	  })
}