<?
session_start();
include 'models/viewModel.php'; 
$viewModel = new viewModel();
include 'models/usersModel.php';  
$usersModel = new usersModel();

if(isset($_GET["action"])){
	$action = $_GET["action"];
}else {
	$action = "";
}

if($action == "logout") {
	$_SESSION["loggedin"] = 0;
	$data = "";
	$viewModel->getView("login.php", $data);
	session_destroy();
}

$viewModel->getView("views/header.php");
$viewModel->getView("views/home.php");
$viewModel->getView("views/footer.php");

?>