<?php

trait Salary
{
    public $salary;

    public function getSalary($price,$hours)
    {
        if(is_int($price) && is_int($hours)){
            return $price * $hours;
        }
        return 'Non posso fare il calcolo';
       
    }


    //--- set --
    public function setSalary($_salary)
    {
        if (!empty($_salary)) {
            $this->salary = $_salary;
        } else {
            die('Non hai inserito lo stipendio');
        }
    }
}
