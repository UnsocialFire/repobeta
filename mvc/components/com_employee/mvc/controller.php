<?php
Class EmployeeController extends EmployeeView{

	function _default(){
		
		$return = parent::_default();
		
		return $return;
	}
	
	function getEmployeeDetails(){
		
		$return = parent::renderEmployeeDetails();
		
		return $return;
	}
}
?>