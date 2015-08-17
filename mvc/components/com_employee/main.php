<?php
require_once('mvc/model.php');
require_once('mvc/view.php');
require_once('mvc/controller.php');

$Controller = new EmployeeController();
$task = '';

if(isset($_POST['task'])){

	$task = $_POST['task'];

}

if(isset($_GET['task'])){

	$task = $_GET['task'];

}

switch($task){

	case 'employee-details':
	
		$return = $Controller->getEmployeeDetails();
		echo $return;
		 
		break;
	default:
	
		$return = $Controller->_default();
		echo $return;
		
		break;
}

?>