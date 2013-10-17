<?php
include 'models/validationModel.php'; 
$validationModel = new validationModel();
$validationModel->checkLogin();
?>

<div id="login">
	<h2>Login</h2>
	<form action="?action=checklogin" method="post">
		<label for="#">Email:</label>
		<input type="email" name="email">
		<label for="#">Password:</label>
		<input type="password" name="password">
		<input type="submit" value="Submit">
	</form>
</div>