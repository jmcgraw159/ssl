<?
class validationModel{
	public function checkRegister(){
		if(!empty($_GET["action"])){
			if($_GET["action"] == "form"){
				// $viewModel->getView("views/form.php", $data);
			}else if($_GET["action"] == "register"){
				
				//Email Reg Ex
				$e = '/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/';
				//Password Reg Ex
				$p = '/^[a-zA-Z]\w{3,14}$/';
				//Date Reg Ex
				$d = '/^\d{1,2}\/\d{1,2}\/\d{4}$/';
				//Money Reg Ex
				$m = '/^\$?([1-9]{1}[0-9]{0,2}(\,[0-9]{3})*(\.[0-9]{0,2})?|[1-9]{1}[0-9]{0,}(\.[0-9]{0,2})?|0(\.[0-9]{0,2})?|(\.[0-9]{1,2})?)$/';
				//Website Reg Ex
				$w = '/^((http:\/\/www\.)|(www\.)|(http:\/\/))[a-zA-Z0-9._-]+\.[a-zA-Z.]{2,5}$/';

				//Email Checker
				if(preg_match($e, $_POST["email"])){
					echo $_POST["email"];
				}else {
					echo "email is incorrect";
				}

				//Password Checker
				if(preg_match($p, $_POST["password"])){
					//Passwords Match Checker
					if($_POST["password"] == $_POST["confirmpassword"]){
						echo "Passwords match";
					}else {
						echo "Passwords do not match";
					}
				}else {
					echo "password is incorrect";
				}

				//Date Checker
				if(preg_match($d, $_POST["date"])){
					echo $_POST["date"];
				}else {
					echo "date is incorrect";
				}

				//Donate Checker
				if(preg_match($m, $_POST["donate"])){
					echo $_POST["donate"];
				}else {
					echo "donate is incorrect";
				}

				//Website Checker
				if(preg_match($w, $_POST["website"])){
					echo $_POST["website"];
				}else {
					echo "website is incorrect";
				}
			}
		}else {
			// $viewModel->getView("views/form.php", $data);
		}
	}

	public function checkLogin(){
		if(!empty($_GET["action"])){
			if($_GET["action"] == "form"){
				// $viewModel->getView("views/form.php", $data);
			}else if($_GET["action"] == "login"){
				//Email Checker
				if(preg_match($e, $_POST["email"])){
					echo $_POST["email"];
				}else {
					echo "email is incorrect";
				}

				//Password Checker
				if(preg_match($p, $_POST["password"])){
					echo $_POST["password"];
				}else {
					echo "password is incorrect";
				}
			}
		}else {
			// $viewModel->getView("views/form.php", $data);
		}
	}
};

?>