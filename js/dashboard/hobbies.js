
//-------------------------------------------ADD  HOBBIES-------------------------------------------------//
function AddHobbies(){

	var employee_id = document.getElementById("employee_id").value;
	var hobbies_name = document.getElementById("hobbies_name").value;
	
	if ( hobbies_name == "" ) {
		Swal.fire({
			position: 'bottom-end',
			icon: 'error',
			title: 'Please Fill up all Skills/Hobbies Information.',
			showConfirmButton: false,
			timer: 1500
		  });return false;
	  }else{
		$.ajax({
		//GET QUERY//
		url: 'assets/hobbies_query.php',
		type: 'post',
		data: {employee_id:employee_id,hobbies_name:hobbies_name},
			success: function(response) {
				Swal.fire({
					position: 'bottom-end',
					icon: 'success',
					title: 'Successfuly Add New Skills/Hobbies',
					showConfirmButton: false,
					timer: 1500
				  }).then(function() {
					window.location.reload();
				});
		} 
	});

	  }
}
//-------------------------------------------END OF HOBBIES-------------------------------------------------//

//-------------------------------------------EDIT HOBBIES-------------------------------------------------//

function  editHobbies(hobbiess){
	Swal.fire({
		title: 'Do you want to Continue?',
		showCancelButton: true,
		confirmButtonText: `Yes`,
	  }).then((result) => {
		/* Read more about isConfirmed, isDenied below */
		if (result.isConfirmed) {
			document.getElementById("hobbies_idm").value=hobbiess;
			var Id = hobbiess;
			alert(Id);
		
	$("#EditHobbiesModal").modal("show");;
	$.ajax({
	        url: 'assets/hobbies_view.php',
	        type: 'post',
	        data: {Id:Id},
	        success: function(response) {
	          console.log(response);
	     		var data = JSON.parse(response);
                for(var ctr=0;ctr<data.length; ctr++){
					document.getElementById("employee_idm").value = data[ctr].employee_id; 
					  document.getElementById("hobbies_namem").value= data[ctr].hobbies_name; 
					 	}
	        } 
	    });
		} else if (result.isDismissed) {
		  Swal.fire('Thank You', '', 'info')
		}
	  })
}