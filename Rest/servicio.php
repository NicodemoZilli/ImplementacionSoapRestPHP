<?php
  function suma($a,$b){
    $total=array();
    $total = array('a' => "$a",'b' => "$b", 'total'=> $a+$b);
    return $total;
  }
  function multiplicacion($a,$b){
    $total=array();
    $total = array('a' => "$a",'b' => "$b", 'total'=> $a*$b);
    return $total;
  }
  function resta($a,$b){
    $total=array();
    $total = array('a' => "$a",'b' => "$b", 'total'=> $a-$b);
    return $total;
  }
  function division($a,$b){
    $total=array();
    $total = array('a' => "$a",'b' => "$b", 'total'=> $a/$b);
    return $total;
  }

  $posible_url = array("suma","multiplicacion","resta","division");
  $value= "An error has acurred";

  if(isset($_GET["action"]) && in_array($_GET["action"],$posible_url)){
    switch ($_GET["action"]) {
      case 'suma':
        $value =suma($_GET["a"], $_GET["b"]);
        break;
      case 'multiplicacion':
        $value=multiplicacion($_GET["a"], $_GET["b"]);
        break;
      case 'resta':
          $value=resta($_GET["a"], $_GET["b"]);
        break;
      case 'division':
          $value=division($_GET["a"], $_GET["b"]);
        break;
    }
  }
  exit(json_encode($value));
 ?>
