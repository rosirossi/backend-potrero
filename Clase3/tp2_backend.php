<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Clase 3</title>
  </head>
  <body>
<h1>Estructuras de control: parte 1</h1>

<h2>Ejercicios</h2>

<ol>
  <li>
    <?php
     $n1=22;

     if ($n1>0) {
       echo "$n1 es un número positivo";
     }else {
       echo "$n1 no es un número positivo";
     }
     ?>
  </li>
  <br>
  <hr>
  <li>
    <?php
     $n2=56;

     if ($n2>1 && $n2<10) {
     echo "$n2 es mayor que 1 y menor que 10";
   }else {
     echo "$n2 no es mayor que 1 y menor que 10";
   }
     ?>
  </li>
<br>
<hr>
  <li>
    <?php
     $n3=15;

     if($n3>1 || $n3<2){
       echo "$n3 es mayor que 10 o menos que 2";
     }else{
       echo "$n3 no es mayor que 10 o menor que 2";
     }
     ?>
  </li>
<br>
<hr>
  <li>
    <?php
     $numero1=8;
     $numero2=6;
     $suma=$numero1 + $numero2;
     $resta=$numero1 - $numero2;
     $multiplicacion= $numero1 * $numero2;
     $division= $numero1 / $numero2;
     $resto= $numero1 % $numero2;

    if ($numero1 > $numero2){
      echo "$numero1 + $numero2 = $suma y ";
      echo "$numero1 - $numero2 = $resta";
    } elseif ($numero2 > $numero1) {
      echo "$numero1 * $numero2 = $multiplicacion y ";
      echo "$numero1 / $numero2 = $division";
    }else {
      echo "Los números ingresados son iguales";
     }
     ?>
  </li>










</ol>









  </body>
</html>
