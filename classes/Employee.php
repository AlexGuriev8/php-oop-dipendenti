<?php
require_once 'traits/Salary.php';

class Employee
{
    use Salary;
    private $name;
    private $surname;
    private $role;
    private $cf;
    private $email;
    private $phone;
    private $adress;
    private $hours;


    public function __construct($_name, $_surname, $_role)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->role = $_role;
    }

    // ---  get ---
    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }
    public function getCf()
    {
        return $this->cf;
    }
    public function getRole()
    {
        return $this->role;
    }
    public function getHours()
    {
        return $this->hours;
    }


    //--- set --- 
    public function setName($_name)
    {
        if (!empty($_name)) {
            $this->name = $_name;
        } else {
            die('Il nome non può essere vuoto');
        }
    }
    public function setSurname($_surname)
    {
        if (!empty($_surname)) {
            $this->surname = $_surname;
        } else {
            die('Il nome non può essere vuoto');
        }
    }
    public function setCF($_cf)
    {
        if (strlen($_cf)==16) {
            $this->cf = $_cf;
        } else {
            die('Il codice fiscale inserito non è corretto');
        }
    }
    public function setHours($_hours)
    {
        if ($_hours>0) {
            $this->hours = $_hours;
        } else {
            die('Inserisci il numero di ore');
        }
    }

    //--- methods --- 

    public function pricePerHour($position)
    {
        if (empty($position)) {
            die('Non è possibile calcolare la paga oraria');
        }elseif($position == 'Employee'){
            $price = 7.82;
        }elseif($position == 'Accountant'){
            $price = 8.5;
        }elseif($position == 'Consultant'){
            $price = 10.5;
        }elseif($position == 'Manager'){
            $price = 13;
        }
    return $price;
}
}
