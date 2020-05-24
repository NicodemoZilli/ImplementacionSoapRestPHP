<?php

require_once('../lib/nusoap.php');

$cliente = new nusoap_client('http://localhost/Implementacion/Soap/servicio.php');
/*$resultado = $cliente->call('calculadora',
  array(  'x' => '3',
          'y' => '4',
          'op' => '*'));

echo $resultado;*/

$x=null; $y=null; $op=null;
$resultado=null;
if(isset($_POST['x']) && isset($_POST['y']) && isset($_POST['op'])){
  $x=$_POST['x'];
  $y=$_POST['y'];
  $op=$_POST['op'];

  $resultado = $cliente->call('calculadora',
    array(  'x' => $x,
            'y' => $y,
            'op' => $op));
}
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="css/index.css">
     <title>Calculadora PHP SOAP</title>
   </head>
   <body>
     <div class="overlay overlay.active">
         <div class="popup popup.active">
           <h1>Calculadora PHP con SOAP</h1>
           <form method="post">
             <div class="contenedor-inputs">
               <input type="number" name="x" required>
               <select name="op">
                 <option value="+">Suma +</option>
                 <option value="-">Resta -</option>
                 <option value="*">Multiplica *</option>
                 <option value="/">Divide /</option>
               </select>
               <input type="number" name="y" required>
               <input type="submit" name="=" value="Calcular">
             </div>
           </form>
           <?php
           if($resultado!=null){
             echo "<h2>El resultado es: ".$resultado."</h2>";
           }
            ?>
         </div>
     </div>

   </body>
 </html>
