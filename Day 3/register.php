<? 

include 'models/viewModel.php'; 
$viewModel = new viewModel();
include 'models/usersModel.php';  
$usersModel = new usersModel();

if(!empty($_GET["action"])){
	if($_GET["action"] == "form"){
		// $viewModel->getView("views/form.php", $data);
	}else if($_GET["action"] == "register"){

	}else if($_GET["action"] == "users") {
	$data = $usersModel->getUsers();
	var_dump($data);
	}
}

$viewModel->getView("views/header.php");
$viewModel->getView("views/form_registration.php");
$viewModel->getView("views/footer.php");

?>
