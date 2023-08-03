<?php
include_once('connection2.php');

class User{
	public $uid;
	public $pass;
	public $employeeID;

	function set_uid($uid){
        $this->uid = $uid;
    }
    function set_brand($pass){
        $this->pass = $pass; 
    }
    function set_model($employeeID){
        $this->employeeID = $employeeID;
    }

    function get_uid(){
        return $this->uid;
    }
    function get_pass(){
        return $this->pass;
    }
    function get_employeeID(){
        return $this->employeeID;
    }

    function credentialCheck($uid,$pass){
    	//For future purposes: md5 encryption
    	$database = new Connection();
    	$sql = "SELECT * FROM users WHERE uid = '" . $uid . "'" . "AND pass = '" . $pass . "'";
    	$stmt = $database->query($sql);
    	if($stmt->rowCount() > 0){
    		return true;
    	}
    	else{
    		return false;
    	}

    }

}
?>