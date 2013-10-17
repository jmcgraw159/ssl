<?
class ckUser {
	public function checkUser($data){
		$db = new PDO("mysql:hostname=localhost", "root", "root");

		$q = "select email, password from blog.users where email = :email and password = :password";

		$st = $db->prepare($q);

		$st->execute(array(":email"=>$data["email"], ":password"=>$data["password"]));

		$st->fetchAll();
		$isgood = $st->rowCount();

		if($isgood > 0) {
			$_SESSION["loggedin"] = 1;
			return 1;
		}else {
			$_SESSION["loggedin"] = 0;
			return 0;
		}
	}
}
?>