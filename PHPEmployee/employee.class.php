<?php
  class Employee
{
  private $salary;
  private $sales;
  private $comission;

  public function Employee ()
  {}

  public function getSalary ()
  {
    return $this->salary;
  }

  public function setSalary ($salary)
  {
    return $this->salary = $salary;
  }

  public function getSales ()
  {
    return $this->sales;
  }

  public function setSales ($sales)
  {
    return $this->sales = $sales;
  }

  public function getComission ()
  {
    return $this->comission;
  }

  public function setComission ($comission)
  {
    return $this->comission = $comission;
  }

  public function totalComission ()
  {
    return $this->sales + $this->comission;
  }

  public function totalSalary ()
  {
    return $this->salary + $this->totalComission();
  }
}
 ?>
