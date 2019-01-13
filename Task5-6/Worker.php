<?php


class Worker extends User
{
    private $Salary;

    /**
     * @param int $Salary
     */
    public function setSalary($Salary)
    {
        $this->Salary = $Salary;
    }

    /**
     * @return int
     */
    public function getSalary()
    {
        return $this->Salary;
    }


}

