//-------------------------------------------ADD  ELIGIBILITY-----------------------------------------------//
//ADD ELIGIBILITY
function AddEligibility(){

	var employee_id = document.getElementById("employee_id").value;
	var eligibility_name = document.getElementById("eligibility_name").value;
	var eligibility_rating = document.getElementById("eligibility_rating").value;
    var eligibility_date = document.getElementById("eligibility_date").value;
	var eligibility_place = document.getElementById("eligibility_place").value;
    var eligibility_number= document.getElementById("eligibility_number").value;
	var eligibility_validity = document.getElementById("eligibility_validity").value;
	if ( eligibility_name == "" ||eligibility_rating == "" ||eligibility_date == "" ||eligibility_place == "" ||eligibility_number == "" ||eligibility_validity == "") {
		Swal.fire({
			position: 'bottom-end',
			icon: 'error',
			title: 'Please Fill up all  Eligibility Information.',
			showConfirmButton: false,
			timer: 1500
		  });return false;
	  }else{
		$.ajax({
		//GET QUERY//
		url: 'assets/eligibility_query.php',
		type: 'post',
		data: {employee_id:employee_id,eligibility_name:eligibility_name,eligibility_rating:eligibility_rating,
			eligibility_date:eligibility_date,eligibility_place:eligibility_place,
			eligibility_number:eligibility_number, eligibility_validity: eligibility_validity},
			success: function(response) {
				Swal.fire({
					position: 'bottom-end',
					icon: 'success',
					title: 'Successfuly Add New Civil Service Eligibility',
					showConfirmButton: false,
					timer: 1500
				  }).then(function() {
					window.location.reload();
				});
		} 
	});

	  }
}
//----------------------------------------------------END OF ADD ELIGIBILITY---------------------------------------//

//-------------------------------------------EDIT/FETCH ELIGIBILITY-------------------------------------------------//

function editEligibilitye(did){
	Swal.fire({
		title: 'Do you want to Continue?',
		showCancelButton: true,
		confirmButtonText: `Yes`,
	  }).then((result) => {
		/* Read more about isConfirmed, isDenied below */
		if (result.isConfirmed) {
			document.getElementById("eligibility_ide").value=did;
			var Id = did;
			//alert(Id);
		
	$("#editEligibilityModal").modal("show");;
	$.ajax({
	        url: 'assets/eligibility_view.php',
	        type: 'post',
	        data: {Id:Id},
	        success: function(response) {
	          console.log(response);
	     		var data = JSON.parse(response);
                for(var ctr=0;ctr<data.length; ctr++){
					document.getElementById("employee_ide").value = data[ctr].employee_id; 
					  document.getElementById("eligibility_namee").value= data[ctr].eligibility_name; 
					  document.getElementById("eligibility_ratinge").value= data[ctr].eligibility_rating; 
					  document.getElementById("eligibility_datee").value= data[ctr].eligibility_date; 
					  document.getElementById("eligibility_placee").value= data[ctr].eligibility_place; 
					  document.getElementById("eligibility_numbere").value= data[ctr].eligibility_number; 
					  document.getElementById("eligibility_validitye").value= data[ctr].eligibility_validity;
				}
	        } 
	    });
		} else if (result.isDismissed) {
		  Swal.fire('Thank You', '', 'info')
		}
	  })
}

//------------------------------------------- END EDIT/FETCH ELIGIBILITY-------------------------------------------------//



//-------------------------------------------UPDATE ELIGIBILITY-------------------------------------------------//

//edit/save dept
function UpdateEligibility(){
	var eligibility_ide = document.getElementById("eligibility_ide").value;
	var employee_ide = document.getElementById("employee_ide").value;
	var eligibility_namee = document.getElementById("eligibility_namee").value;
	var eligibility_ratinge = document.getElementById("eligibility_ratinge").value;
    var eligibility_datee = document.getElementById("eligibility_datee").value;
	var eligibility_placee = document.getElementById("eligibility_placee").value;
    var eligibility_numbere= document.getElementById("eligibility_numbere").value;
	var eligibility_validitye = document.getElementById("eligibility_validitye").value;
	alert(eligibility_ide);
	alert(employee_ide);
	alert(eligibility_namee);

	$.ajax({
	        url: 'assets/eligibility_update.php',
	        type: 'post',
	        data: {eligibility_ide:eligibility_ide,employee_ide:employee_ide,eligibility_namee:eligibility_namee,eligibility_ratinge:eligibility_ratinge,
				eligibility_datee:eligibility_datee,eligibility_placee:eligibility_placee,
				eligibility_numbere:eligibility_numbere, eligibility_validitye: eligibility_validitye},
	        success: function(response) {
				Swal.fire({
					position: 'bottom-end',
					icon: 'success',
					title: 'Successfuly Updated Civil Service Eligibility',
					showConfirmButton: false,
					timer: 1500
				  }).then(function() {
					window.location.reload();
				});
	        } 
	    });


}