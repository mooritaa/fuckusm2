<?php 
//corresponde al ejercicio 32 y va con newpage1 y newpage2 :) 
 if (isset($_POST['pass'])) {
    $pass=$_POST['pass']; 
    if($pass == "quieropuntos"){
  $login = true; 
        }
    } 
 if ($login) { 
    echo "<p>Aqui empieza el arma secreta.</p>"; 
    } 
?> 
