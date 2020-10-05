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
    
}
