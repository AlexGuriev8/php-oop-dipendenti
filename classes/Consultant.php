<?php

class Consultant extends Employee
{
    use Salary;
    private $benefits;

    function __construct($_name, $_surname, $_role, $_benefits)
    {
        parent::__construct($_name, $_surname, $_role);
        $this->benefits = $_benefits;
    }

    // ---  get ---
    public function getBenefits()
    {
        return $this->benefits;
    }


    //--- set --
    public function setBenefits($_benefits)
    {
        if (!empty($_benefits)) {
            $this->benefits = $_benefits;
        } else {
            die('Non hai inserito il bonus');
        }
    }
}
