<?php

class dbconnect{


	public $hostaddress='localhost';
	public $user='root';
	public $password='';
	public $db_name='facebook';
	public $link;


	public function __construct(){
		$this->connection();
	}


	public function connection(){

		$this->link=new mysqli($this->hostaddress,$this->user,$this->password,$this->db_name);
		if ($this->link) {
			$this->message="Database Connect";
		}
		else{
			$this->message="Database Not Connect";
		}

	}


	public function __destruct(){
		$this->link->close();
	}





}











?>