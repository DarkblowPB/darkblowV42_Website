function ShowToast(Time, Icon, Messages) {
	Swal.fire({
		toast: true,
		timer: Time,
		position: 'center',
		timerProgressBar: true,
		icon: Icon,
		title: Messages,
		showConfirmButton: false
	})
}

/**
 * Set Attribute
 * 
 * This Function Can Be Used Only By Input Element.
 */
function SetAttribute(Button_ID, Type, Value) {
	var Q = document.getElementById(Button_ID);

	Q.setAttribute('type', Type);
	Q.setAttribute('value', Value);
}
