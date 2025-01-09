
//-------------------------------------------ADD  NON-ACADEMIC DISTINCTIONS / RECOGNITION-------------------------------------------------//
function AddDistinction(){

	var employee_id = document.getElementById("employee_id").value;
	var distinction_name = document.getElementById("distinction_name").value;
	
	if ( distinction_name == "" ) {
		Swal.fire({
			position: 'bottom-end',
			icon: 'error',
			title: 'Please Fill up all Distinctions / Recognition Information.',
			showConfirmButton: false,
			timer: 1500
		  });return false;
	  }else{
		$.ajax({
		//GET QUERY//
		url: 'assets/distinction_query.php',
		type: 'post',
		data: {employee_id:employee_id,distinction_name:distinction_name},
			success: function(response) {
				Swal.fire({
					position: 'bottom-end',
					icon: 'success',
					title: 'Successfuly Add New Non-Academic Distinctions / Recognition',
					showConfirmButton: false,
					timer: 1500
				  }).then(function() {
					window.location.reload();
				});
		} 
	});

	  }
}
//-------------------------------------------END OF  NON-ACADEMIC DISTINCTIONS / RECOGNITION-------------------------------------------------//


//-------------------------------------------EDIT  NON-ACADEMIC DISTINCTIONS / RECOGNITION-------------------------------------------------//

function editDistinction(distinction){
	Swal.fire({
		title: 'Do you want to Continue?',
		showCancelButton: true,
		confirmButtonText: `Yes`,
	  }).then((result) => {
		/* Read more about isConfirmed, isDenied below */
		if (result.isConfirmed) {
			document.getElementById("distinction_idv").value=distinction;
			var Id = distinction;
			alert(Id);
		
	$("#EditDistinctionModal").modal("show");;
	$.ajax({
	        url: 'assets/distinction_view.php',
	        type: 'post',
	        data: {Id:Id},
	        success: function(response) {
	          console.log(response);
	     		var data = JSON.parse(response);
                for(var ctr=0;ctr<data.length; ctr++){
					document.getElementById("employee_idv").value = data[ctr].employee_id; 
					  document.getElementById("distinction_nameq").value= data[ctr].distinction_name; 
					 	}
	        } 
	    });
		} else if (result.isDismissed) {
		  Swal.fire('Thank You', '', 'info')
		}
	  })
}