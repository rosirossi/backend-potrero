  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>TP1- BACKEND</title>
    </head>
    <body>
  <h1>TP1- BACKEND</h1>

  <h2>Camila Rossi</h2>
  <h3>Ejercicios:</h3>

  <ol>

    <li>
  <?php
  echo "Hola, mundo";
   ?>
  </li>

   <br>
   <hr>

   <li>
   <?php
  $saludo = "Hola, mundo";

  echo $saludo;
   ?>
  </li>

  <br>
  <hr>

  <li>
  <p> Variables: variable1=2, variable2=5: </p>

  <ul>

   <?php

  $variable1 = 2;
  $variable2 = 5;

  $suma = $variable1 + $variable2;

  echo $suma;
  ?>
  </ul>

  <ul>
  <?php

  $resta = $variable1 - $variable2;
  echo $resta;
  ?>
  </ul>

  <ul>
    <?php
  $multiplicacion = $variable1 * $variable2;
  echo $multiplicacion;
  ?>
  </ul>

  <ul>
  <?php
  $division = $variable1 / $variable2;
  echo $division;
  ?>
  </ul>

  <ul>
    <?php

  $resto = $variable1 % $variable2;
  echo  $resto;

    ?>
  </ul>

  </li>

  <br>
  <hr>

  <li>
  <p>Fórmula para pasar de grados Celsius a grados Fahrenheit: (0 °C × 9/5) + 32 = 32 °F:</P>

<ul>
  <?php

  $temperatura=20;

  $calculo= (20 * 9/5) + 32;
  echo $calculo;


   ?>
 </ul>
 </li>

   <br>
   <hr>

  <li>
      <p>Perímetro y área de un triángulo de base=18cm y altura=12cm:</p>
      <ul>
    <?php
  $base=18;
  $altura=12;
  $perimetro= (2*$base) + (2* $altura);
  $area= $base * $altura;

  echo $perimetro;

     ?>
</ul>

   <ul>
     <?php
  echo $area;

      ?>
  </ul>
  </li>

  <br>
  <hr>

  <li>
      <p>Perímetro y área de un círculo con un radio de 30cm:</p>

    <ul>
      <?php
  $pi= 3.141592;
  $radio=30;
  $p_circulo= 2 * $pi * $radio;
  echo $p_circulo;
       ?>
    </ul>

    <ul>
      <?php
  $a_circulo= $pi * ($radio**2);
  echo $a_circulo;
       ?>
    </ul>

  </li>
  </ol>


    </body>
  </html>
