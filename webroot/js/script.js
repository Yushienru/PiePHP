function showPassForm(){
	if (document.getElementById("passForm").style.display == "block") {
		document.getElementById("passForm").style.display = "none";
	}else{
		document.getElementById("passForm").style.display = "block";
	}
}
function showEmailForm(){
	if (document.getElementById("emailForm").style.display == "block") {
		document.getElementById("emailForm").style.display = "none";
	}else{
		document.getElementById("emailForm").style.display = "block";
	}
}
function showModifyForm(){
	if (document.getElementById("modifyForm").style.display == "block") {
		document.getElementById("modifyForm").style.display = "none";
	}else{
		document.getElementById("modifyForm").style.display = "block";
	}
}

// Plugin jQuery pour gérer le tableau (pagination, nombre de ligne / page)
$(document).ready( function () {
    $('#myTable').DataTable();
} );