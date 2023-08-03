<?php
include_once('connection2.php');

class Car{
    //public $process;
    public $plate;
    public $brand;
    public $model;
    public $year;
    public $color;
    public $transmission;
    public $employeeID;
    public $lastUpdatedBy;
    public $summary;
    public $uid;
    
    //setters
    function set_plate($plate){
        $this->plate = $plate;
    }
    function set_brand($brand){
        $this->brand = $brand; 
    }
    function set_model($model){
        $this->model = $model;
    }
    function set_year($year){
        $this->year = $year;        
    }
    function set_color($color){
        $this->color = $color;      
    }
    function set_transmission($transmission){
        $this->transmission = $transmission;        
    }
    function set_employeeID($employeeID){
        $this->employeeID = $employeeID;
    }
    function set_lastUpdatedBy($lastUpdatedBy){
        $this->lastUpdatedBy = $lastUpdatedBy;
    }
    function set_summary($summary){
        $this->summary = $summary;
    }
    function set_uid($uid){
        $this->uid = $uid;
    }
    
    //getters
    function get_plate(){
    	return $this->plate;
    }

    function get_brand(){
    	return $this->brand;
    }
    function get_model(){
    	return $this->model;
    }
    function get_year(){
    	return $this->year;
    }
    function get_color(){
        return $this->color;
    }
    function get_transmission(){
    	return $this->transmission;
    }
    function get_employeeID(){
        return $this->employeeID;
    }
    function get_lastUpdatedBy(){
        return $this->lastUpdatedBy;
    }
    function get_summary(){
        return $this->summary;
    }
    function get_uid(){
        return $this->uid;
    }

    function search($plate){
        $database = new Connection();

        // $db = $database->conn();

        //Query

        $sql = "SELECT * FROM car where plate = '" . $plate . "'";

        //query
        $stmt = $database->query($sql);
        $rows = $stmt->fetch();
        //fetch single row of data from query in assoc array
        if($stmt->rowCount() > 0){
            $this->set_plate($rows[0]);
            $this->set_brand($rows[1]);
            $this->set_model($rows[2]);
            $this->set_year($rows[3]);
            $this->set_color($rows[4]);
            $this->set_transmission($rows[5]);
            $this->set_employeeID($rows[6]);
            return $rows;
            $database->closeConn();

        }
        else{
            return null;
            $database->closeConn();
        }

    }

    function add($plate){
        $database = new Connection();
        $sql = "INSERT INTO car VALUES ('" . $plate . "','" . $this->brand. "','" . $this->model . "','" . $this->year . "','" . $this->color . "','" . $this->transmission . "'," . $this->employeeID . ")";
        $stmt = $database->query($sql);
        $rows = $stmt->fetch();

        $database->closeConn();

        // $stmt = $conn->query($sql);

        // $stmt->execute([$brand,$model,$year,$color,$transmission,$plate]);



    }

    function delete($plate){
        $database = new Connection();
        $sql = "DELETE FROM car WHERE plate = '" . $plate . "'";
        $stmt = $database->query($sql);
        $database->closeConn();

        // $stmt = $conn->query($sql);

        // $stmt->execute([$brand,$model,$year,$color,$transmission,$plate]);

    }

    function edit($plate,$brand,$model,$year,$color,$transmission,$employeeID){
        $database = new Connection();
        $sql = "UPDATE car SET brand = '" . $brand . "', model = '" . $model . "', year = '" . $year . "', color = '" . $color . "', transmission = '" . $transmission . "', employeeID = '" . $employeeID . "' WHERE plate = '" . $plate . "'";
        $stmt = $database->query($sql);
        $rows = $stmt->fetch();
        $database->closeConn();

        // $stmt = $conn->query($sql);

        // $stmt->execute([$brand,$model,$year,$color,$transmission,$plate]);

    }

    function processHistory($plate,$uid,$summary){
        $database = new Connection();
        $sql = "INSERT INTO processhistory (transactionNo, plate,lastUpdated,lastUpdatedBy,summary) VALUES (NULL,'" . $plate . "', NOW(),'" . $uid . "','" . $summary . "')";
            $stmt = $database->query($sql);
            $database->closeConn();
        }

    function searchHistory($searchTerm){
        $database = new Connection();
        $sql = "SELECT * FROM processhistory WHERE plate = '" . $searchTerm . "' OR lastUpdatedBy = '" . $searchTerm . "'";
        $stmt = $database->query($sql);
        $rows = $stmt->fetchAll();
        //fetch single row of data from query in assoc array
        if($stmt->rowCount() > 0){
            return $rows;
            $database->closeConn();

        }
        else{
            return null;
            $database->closeConn();
        }
    }
}
