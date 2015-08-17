<?php
Class EmployeeModel{

	function getEmployees(){
		
		$query = 'SELECT * FROM employee ORDER BY fname DESC';
		$process = mysql_query($query) or die(mysql_error().$query);
		
		$results = array();
		
		
		while($rows = mysql_fetch_object($process)){
		
			array_push($results, $rows);
		}
		
		return $results;
	}
}
?>