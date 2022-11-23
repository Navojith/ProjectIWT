

//change form action and enctype
function changeDestination(){
	var submitbtn = document.getElementById('profile');
	submitbtn.action = '../includes/uploadProfileImg.inc.php';
	submitbtn.enctype="multipart/form-data";
	
}