<?php

class Query {
	
	protected $resultSet;
	protected $resultCount;
	
	function __construct($qry) {
		
		require_once('includes/config.database.php');
		$this->resultCount = 0;
		try	{
			$pdo	=	new	PDO(DBCONNSTRING,DBUSER,DBPASS);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$result	=	$pdo->query($qry);
			while	($row	=	$result->fetch()) {
				$this->resultSet[] = $row;
				$this->resultCount++;
			}
			$pdo	=	null;	
		}	
		catch	(PDOException	$e)	{
			die(	$e->getMessage()	);
		}		
	}
	
	public function resultSet() {
		return $this->resultSet;
	}

		public function resultCount() {
		return $this->resultCunt;
	}

}