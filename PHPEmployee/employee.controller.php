<?php
  include "employee.class.php";

  $e = new Employee;

  $e->setSalary(2000);
  $e->setSales(200);
  $e->setComission(0.30);

  echo "<br>Salário fixo: R$ ".$e->getSalary().'.';
  echo "<br>Vendas: ".$e->getSales().'.';
  echo "<br>Comissão pelas vendas: R$ ".$e->getComission().'.';
  echo "<br>Comissão: R$ ".$e->totalComission().'.';
  echo "<br>Salário total: R$ ".$e->totalSalary().'.';
 ?>
