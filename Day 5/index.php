<?
session_start();
include 'models/viewModel.php'; 
$viewModel = new viewModel();
include 'models/usersModel.php';  
$usersModel = new usersModel();

$viewModel->getView("views/header.php");

$viewModel->getView("views/home.php");

$viewModel->getView("views/footer.php");

?>