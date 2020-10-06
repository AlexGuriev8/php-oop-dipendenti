<?php 

class Manager extends Employee{
    use Salary;
    private $bonus;
    private $benefits;    

    function __construct($_name, $_surname, $_role,$_bonus)
    {
        parent::__construct($_name, $_surname, $_role);
        $this->bonus = $_bonus;
    }

    // ---  get ---
    public function getBonus()
    {
        return $this->bonus;
    }


    //--- set --
    public function setBonus($_bonus)
    {
        if (!empty($_bonus)) {
            $this->bonus = $_bonus;
        } else {
            die('Non hai inserito il bonus');
        }
    }
    
}
