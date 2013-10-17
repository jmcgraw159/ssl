<?
foreach($data as $par){
	echo "<br>";
	echo "ID: ".$par["id"]."<br>";
	echo "Email: ".$par["email"]."<br>";
	echo "Password: ".$par["password"]."<br>";
	echo "DOB: ".$par["dob"]."<br>";

	if($par["gender"] == 1){
		echo "Gender: Male<br>";
	}else {
		echo "Gender: Female<br>";
	};

	echo "Country: ".$par["country"]."<br>";
	echo "Website: ".$par["website"]."<br>";

	if($par["newsletter"] == 1){
		echo "Newsletter: Yes<br>";
	}else {
		echo "Newsletter: No<br>";
	};

	echo "Donate: $".$par["donate"]."<br>";
	echo "<a href='?action=delete&id=".$par["id"]."'>delete</a><br>";
	echo "<a href='?action=updateForm&id=".$par["id"]."'>update</a>";
	echo "<br>------------------<br>";
}

?>