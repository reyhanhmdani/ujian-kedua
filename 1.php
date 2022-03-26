<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style1.css">
  <style>
      header {
  display: flex;
    justify-content: space-around;
    margin-bottom: 2%;
}
header div {
   
    margin-bottom: 5%;
}


  </style>
</head>
<body>
  <header>
      
  <div>
      <div>logic 1</div>
  <table border="1" cellpadding="10" cellspacing="0">
<?php
 for ($x = 1; $x <= 9; $x++ ) {
    echo "<tr>";
    for ($y = 1; $y <= 9; $y++){
   
     
      if ($x) {
          echo "<td>0</td>";
      }
    else {
      echo "<td>-</td>";
    }
    }  echo "</tr>";
  }

?>
</table >
</div>


<div>
    <div>logic 2</div>
<table border="1" cellpadding="10" cellspacing="0">
<?php
 for ($x = 1; $x <=9; $x++ ) {
    echo "<tr>";
    for ($y = 1; $y<=9; $y++){
   
      if ( $x == 1 || $y == 9 || $x == 5 || $y == 5 || $x == 9 || $y == 1){
          echo "<td>0</td>";
      }
    else {
      echo "<td>-</td>";
    }
    }
    echo "</tr>"; 

 }   
?>
</table>
</div>

<div>
    <div>logic 3</div>
<table border="1" cellpadding="10" cellspacing="0">
<?php
 for ($x = 1; $x <= 9; $x++ ) {
    echo " <tr>";
    for ($y = 1; $y <= 9; $y++){
      
     
      if ( $x >=$y) {
          echo "<td>0</td>";
      }
     
    else {
      echo "<td>-</td>";
    }
    } echo "</tr>";
  }
 
?>
</table>
</div>
</header>

<header>
<div>
    <div>logic 4</div>
<table border="1" cellpadding="10" cellspacing="0">

<?php
 for ($x = 1; $x <= 9; $x++ ) {
     echo "<tr>";
    for ($y = 1; $y <= 9; $y++){
   
     
      if ($x + $y >9 ){
        echo "<td>00</td>";
      }
    
   else { 
      echo "<td>-</td>";
  }
    }echo "</tr>";
 }

?>
</table>
</div>

<div>
    <div>logic 5</div>
<table border="1" cellpadding="10" cellspacing="0">

<?php
 for ($x = 1; $x <= 9; $x++ ) {
     echo "<tr>";
    for ($y = 1; $y <= 9; $y++){
   
     
      if ($x == $y){
        echo "<td>".(($x *2) - 1) ."</td>";
      }
      elseif ($x + $y == 10){
          echo "<td>". (($x *2) -2) ."</td>";
      }
   else { 
      echo "<td>-</td>";
  }
    }echo "</tr>";
 }

?>
</table>
</div>

<div>
    <div>logic 6</div>
<table border="1" cellpadding="10" cellspacing="0">

<?php
 for ($x = 1; $x <= 9; $x++ ) {
     echo "<tr>";
    for ($y = 1; $y <= 9; $y++){
   
     
      if ($x == $y){
        echo "<td>".(($x *2) - 1) ."</td>";
      }
      elseif ($x >= $y){
          echo "<td>A</td>";
      }
   else { 
      echo "<td>-</td>";
  }
    }echo "</tr>";
 }

?>
</table>
</div>
</header>

<header>
<div>
    <div>logic 7</div>
<table border="1" cellpadding="10" cellspacing="0">

<?php
 for ($x = 1; $x <= 9; $x++ ) {
     echo "<tr>";
    for ($y = 1; $y <= 9; $y++){
   
     
      if ($x == $y){
        echo "<td>".(($x *2) - 1) ."</td>";
      }
      elseif ($x >= $y){
          echo "<td>A</td>";
      }
      elseif ($x <= $y){
          echo "<td>B</td>";
      }
   else { 
      echo "<td>-</td>";
  }
    }echo "</tr>";
 }

?>
</table>
</div>

<div>
    <div>logic 8</div>
<table border="1" cellpadding="10" cellspacing="0">

<?php
 for ($x = 1; $x <= 9; $x++ ) {
     echo "<tr>";
    for ($y = 1; $y <= 9; $y++){
   
     
      if ($x == $y){
        echo "<td>".(($x *2) - 1) ."</td>";
      }
      elseif ($x + $y == 10){
          echo "<td>". (($x *2) -2) ."</td>";
      }
      elseif ($x > $y && $x+$y < 10 ){
          echo "<td>A</td>";
      }
      elseif ($x < $y && $x+$y > 10 ){
        echo "<td>B</td>";
    }
   else { 
      echo "<td>-</td>";
  }
    }echo "</tr>";
 }

?>
</table>
</div>

<div>
    <div>logic 9</div>
<table border="1" cellpadding="10" cellspacing="0">

<?php

 for ($x = 1; $x <= 9; $x++ ) {
  echo "<tr>";
 for ($y = 1; $y <= 9; $y++){

  
   if ($x+$y >= 10 && $y <= $x){
     echo "<td>00</td>";
   }
   elseif ($x <= 5 && $x + $y >5 && $y - $x < 5){
     echo "<td>00</td>";
   }
else { 
   echo "<td>-</td>";
}

 }echo "</tr>";
}

?>
</table>
</div>

<div>
    <div>logic 10</div>
<table border="1" cellpadding="10" cellspacing="0">

<?php

for ($x = 1; $x <= 9; $x++ ) {
    echo "<tr>";
   for ($y = 1; $y <= 9; $y++){
  
    
     if ( $x + $y > 14  ){
       echo "<td>-</td>";
     }
     elseif ( $x >= 5 && $x - $y < 5){
      echo "<td>00</td>";
     }
     elseif ($x <= 5 && $x + $y >5 && $y - $x < 5){
       echo "<td>00</td>";
     }
  else { 
     echo "<td>-</td>";
  }
  
   }echo "</tr>";
  }
  

//  for ($x = 1; $x <= 9; $x++ ) {
//     echo " <tr>";
//     for ($y = 1; $y <= 9; $y++){
      
//         if ( $x >= $y + 4 || $y + $x < 7 || $y >= $x + 4 || $x + $y > 13) {
//             echo "<td>-</td>";
//         }
//       else {
//         echo "<td>0</td>";
//       }
//       } echo "</tr>";
//     }

?>
</table>
</div>
</header>
</body>
</html>
