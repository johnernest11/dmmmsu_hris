//-------------------------------------------RESET PASSWORD-----------------------------------------------//

function ResetPass(acc_id){
	Swal.fire({
		title: 'Do you want to Reset Password?',
		showCancelButton: true,
		confirmButtonText: `Yes`,
	  }).then((result) => {
		/* Read more about isConfirmed, isDenied below */
		if (result.isConfirmed) {
			document.getElementById("Reset_password").value=acc_id;
			var Id = acc_id;
			// alert(Id);
		
	$("#resetPasswordModal").modal("show");;

		} 
	  })
}

//------------------------------------------- END EDIT/FETCH ELIGIBILITY-------------------------------------------------//



