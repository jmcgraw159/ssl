<?
session_start();
if(isset($_SESSION["loggedin"])){
	
}else {
	header("location: index.php");
}

include 'models/viewModel.php'; 
$viewModel = new viewModel();
include 'models/usersModel.php';  
$usersModel = new usersModel();

$viewModel->getView("views/header.php");

if(empty($_GET["action"])){
	$data = $usersModel->getUsers();
	$viewModel->getView("views/body.php", $data);
}else if($_GET["action"] == "updateForm"){
	$data = $usersModel->getUser($_GET["id"]);
	$viewModel->getView("views/updateForm.html", $data);
}else if($_GET["action"] == "updateuser"){

	if($_POST["gender"] == "Male" || $_POST["gender"] == "male"){
		$_POST["gender"] = 1;
	}else {
		$_POST["gender"] = 0;
	}

	if($_POST["newsletter"] == "Yes" || $_POST["newsletter"] == "yes"){
		$_POST["newsletter"] = 1;
	}else {
		$_POST["newsletter"] = 0;
	}

	$usersModel->updateUser($_POST["name"],$_POST["id"], $_POST["password"], $_POST["gender"], $_POST["newsletter"], $_POST["dob"], $_POST["country"], $_POST["website"], $_POST["donate"]);
	$data = $usersModel->getUsers();
	$viewModel->getView("views/body.php", $data);
}else if($_GET["action"] == "delete"){
	$usersModel->deleteUser($_GET["id"]);
	$data = $usersModel->getUsers();
	$viewModel->getView("views/body.php", $data);
}	

$viewModel->getView("views/footer.php");

?>