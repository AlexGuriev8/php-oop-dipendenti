<?php
require_once 'classes/Employee.php';
require_once 'classes/Manager.php';
require_once 'classes/Consultant.php';


$employee = new Employee('Mario','Rossi','Employee');
$employee->setCF('ABCDEF12s98992Z1');

var_dump($employee);
echo $employee->getRole();


$manager = new Manager('Pippo','Buono','Manager','No Bonus');
$priceM = $manager->pricePerHour($manager->getRole());

$manager->setHours(133);
$manager->setBonus('Bonus da stabilire');
$hours = $manager->getHours();
 
var_dump($manager);
echo 'Stipendio: '.$manager->getSalary($priceM, $hours).'$';
