<?php

class TypesShippers {
	
	protected $resultSet;
	private $active;
	
	function __construct($country) {
		
		switch ($country) {
			case 'USA':
				$filter = "LIKE '%USA%'";
				break;
			case 'Canada':
				$filter = "NOT rlike 'USA|International'";
				break;
			default:
				$filter = "LIKE '%International%'";
				break;
		}

		$sql = "SELECT * 
				  FROM typesshippers
				 WHERE shipperName $filter" ;
		$query 	= new Query($sql);
		$this->resultSet = $query->resultSet();

	}

	public function getShippers() {
		return $this->resultSet;
	}
	
}