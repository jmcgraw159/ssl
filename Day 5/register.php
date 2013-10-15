<? 
session_start();
include 'models/viewModel.php'; 
$viewModel = new viewModel();
include 'models/usersModel.php';  
$usersModel = new usersModel();
$viewModel->getView("views/header.php");

if(!empty($_GET["action"])){
	if($_GET["action"] == "newuser"){
		$data = array('email'=>"Jeremy");
		$viewModel->getView("views/form_registration.php", $data);
	}else if($_GET["action"] == "adduser"){
		$email = $_POST["email"];
		$password = $_POST["password"];
		$securePassword = md5($password);

		$gender = $_POST["gender"];
		if ($gender == 'male') {
			$gender = 1;
		}else if ($gender == 'female') {
			$gender = 0;
		};

		if (isset($_POST['newsletter'])) {
			$newsletter = 1;
		} else {
			$newsletter = 0;
		};

		$dob = $_POST["dob"];
		$originalDate = $dob;
		$newDate = date("Y-m-d", strtotime($originalDate));

		$country = $_POST["country"];
		$website = $_POST["website"];
		$donate = $_POST["donate"];

		$usersModel->addUser($email, $securePassword, $gender, $newsletter, $newDate, $country, $website, $donate); 
		$data = $usersModel->getUsers();
		$viewModel->getView("views/body.php", $data);
	}else if($_GET["action"] == "updateForm"){
		$data = $usersModel->getUser($_GET["id"]);
		$viewModel->getView("views/updateForm.html", $data);
	}else if($_GET["action"] == "updateuser"){
		$usersModel->updateUser($_POST["name"],$_POST["id"], $_POST["password"], $_POST["gender"], $_POST["newsletter"], $_POST["dob"], $_POST["country"], $_POST["website"], $_POST["donate"]);
		$data = $usersModel->getUsers();
		$viewModel->getView("views/body.php", $data);
	}else if($_GET["action"] == "users") {
		$data = $usersModel->getUsers();
		$viewModel->getView("views/body.php", $data);
	}else if($_GET["action"] == "delete"){
		$usersModel->deleteUser($_GET["id"]);
		$data = $usersModel->getUsers();
		$viewModel->getView("views/body.php", $data);
	}
}

$viewModel->getView("views/footer.php");

?>
