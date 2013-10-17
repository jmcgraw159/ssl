<?
session_start();
include 'models/viewModel.php'; 
$viewModel = new viewModel();
include 'models/usersModel.php';  
$usersModel = new usersModel();
include 'models/checklogin.php';
$logins = new ckuser();

$viewModel->getView("views/header.php");

if(isset($_GET["action"])){
	$action = $_GET["action"];
}else {
	$action = "";
}

if(empty($_GET["action"])){
	$data = $usersModel->getUsers();
	$viewModel->getView("views/form_login.php", $data);
}else if($action == "checklogin") {
	$data = array("email"=>$_POST["email"],
			"password"=>md5($_POST["password"]));

	$test = $logins->checkUser($data);
	$msg = "Invalid Login";

	if($test == 1){
		$viewModel->getView("views/home.php");
	}else {
		$viewModel->getView("views/form_login.php", $msg);
		echo "Username or password incorrect";
	}
	
}else if($action == "logout") {
	$_SESSION["loggedin"] = 0;
	$data = "";
	$viewModel->getView("views/login.php", $data);
	session_destroy();
}

$viewModel->getView("views/footer.php");
?>