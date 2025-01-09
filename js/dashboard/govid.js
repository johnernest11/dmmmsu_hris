
//ADD GOVERNMENT ID
function AddGovernId(){

	var employee_id = document.getElementById("employee_id").value;
	var government_name = document.getElementById("government_name").value;
    var government_no = document.getElementById("government_no").value;
    var government_date = document.getElementById("government_date").value;
    var government_place = document.getElementById("government_place").value;
	
	if ( government_name == "" ||government_no == ""||government_date == ""||government_place == ""||child_birthdate == "") {
		Swal.fire({
			position: 'bottom-end',
			icon: 'error',
			title: 'Please Fill up all Government ID`s Information.',
			showConfirmButton: false,
			timer: 1500
		  });return false;
	  }else{
		$.ajax({
		//GET QUERY//
		url: 'assets/govid_query.php',
		type: 'post',
		data: {employee_id:employee_id,government_name:government_name,
            government_no:government_no, government_date:government_date, government_place:government_place
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

//EDIT /FETCH GOVERNMENT ID DATA



function editGovernid(govidd){
	Swal.fire({
		title: 'Do you want to Continue?',
		showCancelButton: true,
		confirmButtonText: `Yes`,
	  }).then((result) => {
		/* Read more about isConfirmed, isDenied below */
		if (result.isConfirmed) {
			document.getElementById("goverment_idg").value=govidd;
	var Id = govidd;
	alert(Id)

$("#editGovernmentidModal").modal("show");;
	$.ajax({
	        url: 'assets/govid_view.php',
	        type: 'post',
	        data: {Id:Id},
	        success: function(response) {
	          console.log(response);
	     		var data = JSON.parse(response);
                for(var ctr=0;ctr<data.length; ctr++){
					 document.getElementById("employee_idc").value = data[ctr].employee_id; 
					  document.getElementById("government_nameg").value= data[ctr].government_name; 
					  document.getElementById("government_nog").value= data[ctr].government_no; 
                      document.getElementById("government_dateg").value= data[ctr].government_date; 
					  document.getElementById("government_placeg").value= data[ctr].government_place; 
					 
                  }
	        } 
	    });
		} else if (result.isDismissed) {
		  Swal.fire('Thank You', '', 'info')
		}
	  })
}
