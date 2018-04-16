<?php

class TypesGlass {
	
	protected $resultSet;
	private $active;
	
	function __construct() {
		
		$sql = "SELECT * 
		  FROM typesglass";

		$query 	= new Query($sql);
		$this->resultSet = $query->resultSet();
	}

	public function allFrames() {
		return $this->resultSet;
	}
	
	public function optionList() {

		$this->active = 0;
		// as a workaround to the missing ability to overload functions
		// in PHP, we can check how many arguments have been passed to 
		// our function and react on that
		if(func_num_args() > 0){
			$parameters = func_get_args();
			$this->active = $parameters[0]; 
		}
	
		foreach($this->resultSet as $result){
			echo '<option ';
			if ($result['GlassID'] == $this->active) echo 'selected ';
			echo 'value="'.$result['GlassID'].'">'.$result['Title'].' - '.$result['Description'].' - '.$result['Price'].'</option>';
		}
	}
}