<? 
include 'models/viewModel.php'; 
$viewModel = new viewModel();
include 'models/usersModel.php';  
$usersModel = new usersModel();

$viewModel->getView("views/header.php");

if(!empty($_GET["action"])){
	if($_GET["action"] == "updateForm"){
		$data = $usersModel->getUser($_GET["id"]);
		$viewModel->getView("views/updateForm.html", $data);
	}else if($_GET["action"] == "updateuser"){
		$usersModel->updateUser($_POST["name"],$_POST["id"], $_POST["password"], $_POST["gender"], $_POST["newsletter"], $_POST["dob"], $_POST["country"], $_POST["website"], $_POST["donate"]);
		$data = $usersModel->getUsers();
		$viewModel->getView("views/body.php", $data);
	}else if($_GET["action"] == "delete"){
		$usersModel->deleteUser($_GET["id"]);
		$data = $usersModel->getUsers();
		$viewModel->getView("views/body.php", $data);
	}else if($_GET["action"] == "addform"){
		$data = array('email'=>"Jeremy");
		$viewModel->getView("views/addUser.html", $data);
	}else if($_GET["action"] == "adduser"){
		$email = $_POST["name"];
		$password = $_POST["password"];
		$gender = $_POST["gender"];
		$newsletter = $_POST["newsletter"];
		$dob = $_POST["dob"];
		$country = $_POST["country"];
		$website = $_POST["website"];
		$donate = $_POST["donate"];
		$usersModel->addUser($email, $password, $gender, $newsletter, $dob, $country, $website, $donate); 
		$data = $usersModel->getUsers();
		$viewModel->getView("views/body.php", $data);
	}else if($_GET["action"] == "login"){
		$viewModel->getView("views/form_login.php");
	}else if($_GET["action"] == "users") {
		$data = $usersModel->getUsers();
		$viewModel->getView("views/body.php", $data);
	}
}

$viewModel->getView("views/footer.php");

?>
