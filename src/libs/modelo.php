<?php 

class Modelo{
	protected $db;
	function __construct(){
		$this->db = new Database();
	}
}

 ?>