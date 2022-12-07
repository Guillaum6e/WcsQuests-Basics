<?php 

/*require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Vehicle.php';
require_once 'Bicycle.php';*/
require_once 'Car.php';
/*require_once 'Truck.php';
require_once 'Skateboard.php';
require_once 'Moto.php';

$MotorWay=new MotorWay();
$PedestrianWay=new PedestrianWay();
$ResidentialWay=new ResidentialWay();

$Rockrider=new Bicycle();
$Punto=new Car();
$Harley=new Moto();
$Sk8=new Skateboard();
$Truck= new Truck();

var_dump($MotorWay->addVehicle($Rockrider));
var_dump($MotorWay->getCurrentVehicle());

var_dump($MotorWay->addVehicle($Punto));
var_dump($MotorWay->getCurrentVehicle());

var_dump($PedestrianWay->addVehicle($Harley));
var_dump($PedestrianWay->getCurrentVehicle());

var_dump($PedestrianWay->addVehicle($Sk8));
var_dump($PedestrianWay->getCurrentVehicle());

$ResidentialWay->addVehicle($Truck);
var_dump($ResidentialWay->getCurrentVehicle());*/

$Punto=new Car();

try { 
    $Punto->forward();
} catch (Exception $e) {
    echo $e->getMessage();
    $Punto->setHasParkBrake(false);
    echo 'parkBrake is down<br>';
} finally{
    echo "Ma voiture roule comme un donut";
}

echo $Punto->forward();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP3</title>
</head>
<body>
    <section>
        <h1>

        </h1>
    </section>
</body>
</html>