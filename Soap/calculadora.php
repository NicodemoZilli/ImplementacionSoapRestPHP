<?php

  function calculadora ($x, $y, $op){

    if($op=='suma' || $op=='+')
      return $x + $y;
    else if($op=='resta' || $op=='-')
      return $x - $y;
    else if($op=='multiplica' || $op=='*')
      return $x * $y;
    else if($op=='divide' || $op=='/')
      return $x / $y;
    else
      return 0;
  }

 ?>
