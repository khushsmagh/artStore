<?php

class TypesFrames {
	
	protected $resultSet;
	private $active;
	
	function __construct() {
		
		$sql = "SELECT * 
		  FROM typesframes";

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
			if ($result['FrameID'] == $this->active) echo 'selected ';
			echo 'value="'.$result['FrameID'].'">'.$result['Title'].' - '.$result['Color'].' - '.$result['Syle'].' - $'.number_format($result['Price'],2).'</option>';
		}		
	}
}