
<?php
require_once('carClass2.php');
session_start();
$nCar = new Car();

$user = $_SESSION['user'];
$process = $_GET['process'];
$plate = $_GET['plate'];
$brand = $_GET['brand'];
$model = $_GET['model'];
$year = $_GET['year'];
$color = $_GET['color'];
$transmission = $_GET['transmission'];
$employeeID = $_GET['employee'];

if($process == 0){
	$nCar->search($plate);
	$plate = $nCar->get_plate();
	$brand = $nCar->get_brand();
	$model = $nCar->get_model();
	$year = $nCar->get_year();
	$color = $nCar->get_color();
	$transmission = $nCar->get_transmission();
	$employeeID = $nCar->get_employeeID();

	if($plate == ""){
		echo "," . "," . "," . "," . "," . "," . "," . "Information not found.";
	}else{
		echo $plate . "," . $brand . "," . $model . "," . $year . "," . $color . "," . $transmission . "," . $employeeID . "," . "Information found.";
	}
}
else if($process == 1){
	$nCar->set_plate($plate);
	
	$check = $nCar->search($plate);


	if($check != null){
		$plate = $nCar->get_plate();
		$brand = $nCar->get_brand();
		$model = $nCar->get_model();
		$year = $nCar->get_year();
		$color = $nCar->get_color();
		$transmission = $nCar->get_transmission();
		$employeeID = $nCar->get_employeeID();
		echo $plate . "," . $brand . "," . $model . "," . $year . "," . $color . "," . $transmission . "," . $employeeID . "," . "Plate already registered.";
		$summary = $plate . "," . $brand . "," . $model . "," . $year . "," . $color . "," . $transmission . "," . $employeeID . "," . "Plate already registered.";
	}
	else{
		if($plate != ""){
			$nCar->set_brand($brand);
			$nCar->set_model($model);
			$nCar->set_year($year);
			$nCar->set_color($color);
			$nCar->set_transmission($transmission);
			$nCar->set_employeeID($employeeID);
			$nCar->add($plate);
			echo $plate . "," . $brand . "," . $model . "," . $year . "," . $color . "," . $transmission . "," . $employeeID . "," . "Plate registered successfully.";
			$summary = $plate . "," . $brand . "," . $model . "," . $year . "," . $color . "," . $transmission . "," . $employeeID . ",addplate";
			$nCar->processHistory($plate,$user,$summary);

		}
		else{
			echo "," . "," . "," . "," . "," . "," . "," . "Please input plate number.";
		}
	}

}
else if($process == 2){
	$nCar->edit($plate,$brand,$model,$year,$color,$transmission,$employeeID);
	echo $plate . "," . $brand . "," . $model . "," . $year . "," . $color . "," . $transmission . "," . $employeeID . "," . "Updated successfully.";
	$summary = $plate . "," . $brand . "," . $model . "," . $year . "," . $color . "," . $transmission . "," . $employeeID . ",updateinfo";
	$nCar->processHistory($plate,$user,$summary);
}

else if($process == 3){
	$summary = $plate . "," . $brand . "," . $model . "," . $year . "," . $color . "," . $transmission . "," . $employeeID . ",deleteinfo";
	$nCar->processHistory($plate,$user,$summary);
	$nCar->delete($plate);
	echo "Information Deleted." . ",";
	
}
?>
