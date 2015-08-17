<?php
Class EmployeeView extends EmployeeModel{
	
	function _default(){
	
		$return = $this->renderEmployeeMasterlist();
		
		return $return;
	}
	

	function renderEmployeeMasterlist(){
		$return  = '';
		
		$return .= '<table style="width:450px;" border="1">';
			$return .= '<thead>';
				$return .= '<th>ID</th>';
				$return .= '<th>First Name</th>';
				$return .= '<th>Last Name</th>';
			$return .= '</thead>';
			$return .= '<tbody>';
				$return .= $this->renderEmployees();
			$return .= '</tbody>';
		$return .= '</table>';
		
		return $return;
	}
	
	function renderEmployees(){
	
		$return  = '';
		$results = parent::getEmployees();
		
		foreach($results as $employee){
		
			$return .= '<tr>';
				$return .= '<td>'. $employee->uid .'</td>';
				$return .= '<td>'. $employee->fname .'</td>';
				$return .= '<td>'. $employee->lname .'</td>';			
			$return .= '</tr>';
		}
	 
		return $return;
	}
	
	function renderEmployeeDetails(){
		$return  = '';
		
		$return .= '<table style="width:450px;" border="1">';
			$return .= '<tbody>';
					$return .= '<tr>';
						$return .= '<td>First Name:</td>';
						$return .= '<td><input type="text"></td>';
					$return .= '</tr>';
					$return .= '<tr>';
						$return .= '<td>Last Name:</td>';
						$return .= '<td><input type="text"></td>';
					$return .= '</tr>';
			$return .= '</tbody>';
		$return .= '</table>';
		
		return $return;
	}
	
}
?>