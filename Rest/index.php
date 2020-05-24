<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calculadora 2 Uso de REST</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="cont">
    <div class="calculadora">
    <h1>Calculadora</h1>
    <form class="" action="index.php" method="get">
      N&uacute;mero 1:<input type="number" name="a" required><br>
      N&uacute;mero 2:<input type="number" name="b" required><br>
      Operaci&oacute;n: <select name="action">
        <option value="suma">Sumar</option>
        <option value="multiplicacion">Multiplicar</option>
        <option value="resta">Restar</option>
        <option value="division">Dividir</option>
      </select><br><br>
      <input type="submit" value="Calcular">
    </form>
  </div>
    <?php
    //OPERACIÓN SUMA
      if (isset($_GET["action"]) && $_GET["action"] == "suma") {
        $calculadora = file_get_contents('http://localhost/Implementacion/Rest/servicio.php?action=suma&a='.$_GET["a"].'&b='.$_GET["b"]);
        $calculadora = json_decode($calculadora, true);
    ?>
    <div class="resultado">
      <h1>SUMA</h1>
      <table>
        <tr>
          <td>Primer n&uacute;mero:</td><td><?php echo $calculadora["a"]; ?></td>
        </tr>
        <tr>
          <td>Segundo n&uacute;mero:</td><td><?php echo $calculadora["b"]; ?></td>
        </tr>
        <tr>
          <td>Total:</td><td><?php echo $calculadora["total"]; ?></td>
        </tr>
      </table>
      </div>
    <?php
      }
      //OPERACIÓN MULTIPLICACIÓN
      if (isset($_GET["action"]) && $_GET["action"] == "multiplicacion") {
        $calculadora = file_get_contents('http://localhost/Implementacion/Rest/servicio.php?action=multiplicacion&a='.$_GET["a"].'&b='.$_GET["b"]);
        $calculadora = json_decode($calculadora, true);
     ?>
     <div class="resultado">
     <h1>MULTIPLICACI&Oacute;N</h1>
     <table>
       <tr>
         <td>Primer n&uacute;mero:</td><td><?php echo $calculadora["a"]; ?></td>
       </tr>
       <tr>
         <td>Segundo n&uacute;mero:</td><td><?php echo $calculadora["b"]; ?></td>
       </tr>
       <tr>
         <td>Total:</td><td><?php echo $calculadora["total"]; ?></td>
       </tr>
     </table>
   </div>
     <?php
      }
      //OPERACIÓN RESTA
      if (isset($_GET["action"]) && $_GET["action"] == "resta") {
        $calculadora = file_get_contents('http://localhost/Implementacion/Rest/servicio.php?action=resta&a='.$_GET["a"].'&b='.$_GET["b"]);
        $calculadora = json_decode($calculadora, true);
     ?>
     <div class="resultado">
     <h1>RESTA</h1>
     <table>
       <tr>
         <td>Primer n&uacute;mero:</td><td><?php  echo $calculadora["a"]; ?></td>
       </tr>
       <tr>
         <td>Segundo n&uacute;mero:</td><td><?php  echo $calculadora["b"]; ?></td>
       </tr>
       <tr>
         <td>Total:</td><td><?php echo  $calculadora["total"]; ?></td>
       </tr>
     </table>
     <div>
     <?php
      }
      //OPERACIÓN DIVISION
      if (isset($_GET["action"]) && $_GET["action"] == "division") {
        $calculadora = file_get_contents('http://localhost/Implementacion/Rest/servicio.php?action=division&a='.$_GET["a"].'&b='.$_GET["b"]);
        $calculadora = json_decode($calculadora, true);
     ?>
     <div class="resultado">
     <h1>DIVISI&Oacute;N</h1>
     <table>
       <tr>
         <td>Primer n&uacute;mero:</td><td><?php echo $calculadora["a"];?></td>
       </tr>
       <tr>
         <td>Segundo n&uacute;mero:</td><td><?php echo $calculadora["b"];?></td>
       </tr>
       <tr>
         <td>Total:</td><td><?php echo $calculadora["total"]; ?></td>
       </tr>
     </table>
   </div>
     <?php
    }?>
    </div;
  </body>
</html>
