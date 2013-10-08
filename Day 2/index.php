<? 

include 'models/viewModel.php'; 
$viewModel = new viewModel();

$viewModel->getView("views/header.php");
$viewModel->getView("views/body.php");
$viewModel->getView("views/footer.php");

?>