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

echo "<a href='?action=addform'>add User</a>";
?>

<!-- <div class="container">
	<div id="blogs">
		<div class="blogPost">
			<a href="#"><h2>Blog Title</h2></a>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus dignissim tortor, nec consectetur lorem vulputate sed. Donec varius ultricies eleifend. Pellentesque diam arcu, consectetur ut nibh vel, ultricies pharetra risus. Ut mattis felis leo, quis consequat nisi lobortis suscipit. Nunc adipiscing ligula et orci tincidunt, id lobortis eros consequat. Vivamus viverra vitae leo dictum placerat. Morbi ultricies luctus nulla a feugiat. Aliquam facilisis consectetur massa, eget feugiat dolor. Nunc fermentum massa sed risus venenatis, quis tristique tellus ullamcorper. Cras tincidunt scelerisque metus id faucibus. In mattis tortor non arcu aliquam hendrerit. Maecenas auctor quis orci id imperdiet. </p>
			<a href="#" class="readMore">Read more...</a>
		</div>
		<div class="blogPost">
			<a href="#"><h2>Blog Title 02</h2></a>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus dignissim tortor, nec consectetur lorem vulputate sed. Donec varius ultricies eleifend. Pellentesque diam arcu, consectetur ut nibh vel, ultricies pharetra risus. Ut mattis felis leo, quis consequat nisi lobortis suscipit. Nunc adipiscing ligula et orci tincidunt, id lobortis eros consequat. Vivamus viverra vitae leo dictum placerat. Morbi ultricies luctus nulla a feugiat. Aliquam facilisis consectetur massa, eget feugiat dolor. Nunc fermentum massa sed risus venenatis, quis tristique tellus ullamcorper. Cras tincidunt scelerisque metus id faucibus. In mattis tortor non arcu aliquam hendrerit. Maecenas auctor quis orci id imperdiet. </p>
			<a href="#" class="readMore">Read more...</a>
		</div>
	</div>
	<aside>
		<h3>Archives</h3>
		<a href="#">September 2013</a>
		<a href="#">August 2013</a>
		<a href="#">July 2013</a>
		<a href="#">June 2013</a>
	</aside>
</div> -->