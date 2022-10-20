<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>WHILE- DO WHILE- FOR</title>
  </head>
  <body>
<h1>Tarea 3</h1>
<ol>
<li>
  <p>Números del 1 al 100.</p>

<?php
$n=1;
while ($n < 101) {
  print "<p>$n</p>\n";
  $n++;
}
 ?>
</li>

<br>
<li>
  <p>Números del 100 al 1.</p>
<?php
$n2=100;
while ($n2 >0){
  print "<p>$n2</p>\n";
  $n2--;
}
 ?>
</li>
<br>
<li>
<p>Números pares del 1 al 100.</p>
<?php

$n3=2;
do {
  print "<p>$n3</p>\n";
  $n3=$n3+2;
} while ($n3<101);
 ?>
</li>
<br>
<li>
  <p>Números impares del 1 al 100.</p>
<?php
$n4=1;
do{
  print "<p>$n4</p>\n";
  $n4=$n4+2;
} while ($n4 < 101);

 ?>

</li>
<br>
<li>
<p>Suma de números del 1 al 20.</p>
<?php
$suma=0;

for ($i=1; $i<21; $i++){
  $suma+=$i;
}
print "$suma\n";

 ?>
</li>
<br>
<li>
<p>Suma de números pares del 1 al 20.</p>
<?php
$n5=0;
for($i=2; $i<20; $i=$i+2){
  $n5=$i+$n5;
  print "$n5\n";
}
 ?>
</li>
</ol>
  </body>
</html>
