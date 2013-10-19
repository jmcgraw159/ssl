<?
class usersModel {
	public function getUsers(){
		$db = new PDO("mysql:hostname=localhost; dbname=blog", "root", "root");
		$st = $db->prepare("select * from users");
		$st->execute();
		$obs = $st->fetchAll();
		return $obs;
	}

	public function getUser($id=0){
		$db = new PDO("mysql:hostname=localhost; dbname=blog", "root", "root");
		$st = $db->prepare("select * from users where id = :id");
		$st->execute(array(":id"=>$id));
		$obs = $st->fetchAll();
		return $obs;
	}

	public function updateUser($name='', $id=0, $password, $gender, $newsletter, $dob, $country, $website, $donate){
		$db = new PDO("mysql:hostname=localhost; dbname=blog", "root", "root");
		$sql = "update users set
				email = :email,
				password = :password,
				gender = :gender,
				newsletter = :newsletter,
				dob = :dob,
				country = :country,
				website = :website,
				donate = :donate
				where id = :id";
		$st = $db->prepare($sql);
		$st->execute(array(":email"=>$name, ":id"=>$id, ":password"=>$password, ":gender"=>$gender, ":newsletter"=>$newsletter, ":dob"=>$dob, ":country"=>$country, ":website"=>$website, ":donate"=>$donate));		
	}

	public function deleteUser($id=0){
		$db = new PDO("mysql:hostname=localhost; dbname=blog", "root", "root");
		$sql = "delete from users
				where id = :id";
		$st = $db->prepare($sql);
		$st->execute(array(":id"=>$id));
	}

	public function addUser($name, $password, $gender, $newsletter, $dob, $country, $website, $donate){
		$db = new PDO("mysql:hostname=localhost; dbname=blog", "root", "root");
		$sql = "insert into users(email, password, gender, newsletter, dob, country, website, donate)
				values(:email, :password, :gender, :newsletter, :dob, :country, :website, :donate)";
		$st = $db->prepare($sql);
		$st->execute(array(":email"=>$name, ":password"=>$password, ":gender"=>$gender, ":newsletter"=>$newsletter, ":dob"=>$dob, ":country"=>$country, ":website"=>$website, ":donate"=>$donate));
	}
}

?>