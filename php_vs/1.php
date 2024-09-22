
<?php
    $ejercicio=$_POST['txtNum'];
    switch ($ejercicio){
        case 1:
           phpinfo();
            break;

        case 2: 
            echo "hola mundo!";
            break;

        case 3:
            echo "<title>Hola Mundo</title>"; 
            echo "<h1>Famoso scrip Hola Mundo</h1>";
            break;

        case 4:
            echo "<title>Variables</title>"; 
            $nombre="Ramon";
            echo "Hola $nombre, un gusto conocerte!";
            break;

        case 5:
            echo "<title>Variables</title>";
            $nombre="Camila";
            echo "Hola ".$nombre.", encantado de conocerte!";
            break;

        case 6:
            echo "<title>Variables</title>";
            echo "<h1>Break en la ventana del navegador </h1>";
            $Name="Raul"; 
            echo "Hola $Name, encantado de conocerte<br>"; 
            echo "Gracias por estar aqui!";
           break;

        case 7:
            echo "<title>Variables</title>";
            echo "<h1>Break en la ventana del navegador con signo \ </h1>";
            $Name = "Ana"; 
            echo "Hola $Name, encantado de conocerte<br>\n"; 
            echo "Gracias por estar aqui!\n";
            break;

        case 8:
            echo "<title>Arrays</title>";
            echo "<h1>dia de la semana elejido: <br\n></h1>";
            $dia[0]="Lunes";
            $dia[1]="Martes";
            $dia[2]="Miercoles";
            $dia[3]="Jueves";
            $dia[4]="Viernes";
            $dia[5]="Sabado";
            $dia[6]="Domingo";
            //va a mostrar el dia 5 --> sabado
            echo $dia[5];
            break;

        case 9:
            echo "<title>Arrays de manera simplificada</title>";
            echo "<h1>introduccion a los arrays, metodo corto</h1>";
            /*Este es el metodo corto para la creacion de arrays, donde el array puede estar en una linea de codigo*/
            $dia = array( "domingo", "lunes", "martes", "miercoles", "jueves", "viernes", "sabado");
            //mostrara el dia domingo
            echo $dia[0];
            break;

        case 10:
            echo "<title>Operaciones aritmeticas basicas</title>";
            echo "<h1>Ejemplo de operaciones aritmeticas en PHP</h1>";
            $a = 9;
            $b = 7;
            echo $a + $b, "<br>";
            echo $a - $b, "<br>";
            echo $a * $b, "<br>";
            echo $a / $b, "<br>";
            $a++ ;
            echo $a,"<br>";
            $b--;
            echo $b,"<br>";
            break;

        case 11:
            echo "<title>Comparaciones numericas</title>";
            echo "<h1>Ejemplo de comparaciones numericas en PHP</h1>";
            echo"<h4>si aparece 1 el resultado es verdadero, si no aparece ningun numero el resultado es falso</h4>";
            $a = 4; 
            $b = 5; 
            $c = 5; 
            echo "A = 4<br>";
            echo "B = 5<br>";
            echo "C = 5<br>";
            echo "A es igual a B --> ";
            echo $a == $b, "<br>"; 
            echo "A es diferente a B--> ";
            echo $a != $b, "<br>"; 
            echo "A es menor que B --> ";
            echo $a < $b, "<br>"; 
            echo "A es mayor que B --> ";
            echo $a > $b, "<br>"; 
            echo "A es mayor o igual a B --> ";
            echo $a >= $c, "<br>"; 
            echo "A es menor o igual que B --> ";
            echo $a <= $c, "<br>";
            break;

        case 12:
            echo "<title>Operaciones logicas</title>";
            echo "<h1>Ejemplo de operaciones logicas en PHP</h1>";
            echo"<h4>si aparece 1 el resultado coincide, si no aparece ningun numero el resultado no cumple</h4>";
            $a = 7;
            $b = 7;
            $c = 12;
            echo "A = 7<br>";
            echo "B = 7<br>";
            echo "C = 12<br>";
            echo "A es igual a B y C es mayor que B -->";
            echo ($a == $b) && ($c > $b), "<br>";
            echo "A es igual a B y B es igual a C -->";
            echo ($a == $b) || ($b == $c), "<br>";
            echo "B es menor o igual que C -->";
            echo !($b <= $c), "<br>";
            break;

        case 13:
            echo "<Combinacion de comandos, operaciones y variables</title>";
            echo "<h1>Tabla de Multiplicar del 6</h1>";
            $a = 6;
            echo "Tabla de Multiplicar del 4 ", "<br>";
            echo "4 x 1 = ", $a * 1, "<br>";
            echo "4 x 2 = ", $a * 2, "<br>";
            echo "4 x 3 = ", $a * 3, "<br>";
            echo "4 x 4 = ", $a * 4, "<br>";
            echo "4 x 5 = ", $a * 5, "<br>";
            echo "4 x 6 = ", $a * 6, "<br>";
            echo "4 x 7 = ", $a * 7, "<br>";
            echo "4 x 8 = ", $a * 8, "<br>";
            echo "4 x 9 = ", $a * 9, "<br>";
            echo "4 x 10 = ", $a * 10, "<br>";
            break;

        case 14:
            echo "<title>Redondear operaciones</title>";
            echo "<h1>Ejemplo para calculos en PHP usando variables</h1>";
            echo "<h4>Variables declaradas: <br>";
            $precioneto = 97.43;
            $iva = 0.356;
            $resultado = $precioneto * $iva;
            echo "El precio es de ";
            echo $precioneto;
            echo " y el IVA el ";
            echo $iva;
            echo "% <br>";
            echo "Resultado: " ;
            echo round($resultado,2);
            echo " con ROUND() <br>";
            echo $resultado;
            echo " normal \n";
            echo "<br><br>";
            $resultado2 = sprintf("%01.2f", $resultado);
            echo "Usando la funcion SPRINTF se ve asi: ";
            echo $resultado2;
            break;

        case 15:
            echo "<title>Uso de If</title>";
            echo "<h1>Ejemplo condicional if</h1>";
            $a = 8;
            $b = 3;
            echo "Valor de A: ",$a,"<br>";
            echo "valor de B:",$b,"<br>";
            if ($a<$b)
            {
            echo "A es menor que B";
            }
            else
            {
            echo "A no es menor que B";
            }
            break;
    
        case 16:
            echo "<title>Uso de If y Else</title>";
            echo "<h1>Ejemplo condicional if, else y una funcion de fecha</h1>";
            $dia=date("11");
            if ($dia<=10)
            {
            echo "sitio activo";
            }
            else
            {
            echo "sitio fuera de servicio";
        }
            break;

        case 17:
            echo "<title>Uso de switch</title>";
            echo "<h1>Ejemplo condicional switch</h1>";
            /*Declaramos una variable con un valor de muestra */
            $posicion = "abajo";
            echo "La variable posicion es ",$posicion;
            echo "<br>";
            switch($posicion){
            case "abajo": 
        // Primer condicion si es abajo
            echo "La variable contiene el valor de abajo";
            break;
            case "arriba": //Segunda condicion del supuesto
            echo "La variable contiene el valor de arriba";
            break;
            default: //Condicion por default o si no es ninguna
            echo "La variable contiene otro valor distinto arriba y abajo";
            }
            break;
        
        case 18:
            echo "<title>Tabla</title>";
            echo "<h3>Table seno y coseno</h3>";
            function muestra($valor) { 
                if ($valor < 0.5) 
                  $color = "red"; 
                else 
                  $color = "blue"; 
                echo "<td><font color='$color'>$valor</font></td>\n"; 
                } 
             echo "<table border=1>";
                for($x=0; $x<=2; $x+=0.01){ 
                  echo "<tr>"; 
                  muestra($x); 
                  muestra(sin($x)); 
                  muestra(cos($x)); 
                  echo "</tr>"; 
                } 
            break;
        
        case 19:
            echo "<title>Tabla</title>";
            echo "<h3>Table seno y coseno</h3>";
            function muestra($valor) { 
                if ($valor % 2) 
                    $fondo = "#eeeeee"; 
                else 
                    $fondo = "#dddddd"; 
               
                if ($valor < 0.5) 
                  $color = "red"; 
                else 
                  $color = "blue"; 
                echo "<td bgcolor='$fondo'><font color='$color'>$valor</font></td>\n"; 
                } 
            echo "<table border=1>"; 
                $nrenglon = 0; 
                for ($x=0; $x<=2; $x+=0.01){ 
                  echo "<tr>"; 
                  muestra($x); 
                  muestra(sin($x)); 
                  muestra(cos($x)); 
                  echo "</tr>"; 
                }
            break;

        case 20:
            echo "<title>Tabla</title>";
            echo "<h3>Table seno y coseno</h3>";
            function muestra($valor) { 
                global $nrenglon; 
                if ($nrenglon % 2) 
                    $fondo = "#ffff00"; 
                else 
                    $fondo = "#ffffff"; 
               
                if ($valor < 0.5) 
                  $color = "red"; 
                else 
                  $color = "blue"; 
                echo "<td bgcolor='$fondo'><font color='$color'>$valor</font></td>\n"; 
                }
                echo "<table border=1>";
                $nrenglon = 0; 
                for ($x=0; $x<=2; $x+=0.05){ 
                  echo "<tr>"; 
                  muestra($x); 
                  muestra(sin($x)); 
                  muestra(cos($x)); 
                  echo "</tr>"; 
                }  
                break;
            case 21:
                echo "<title>Ciclo while</title>";
                echo "<form action=2.php method=post> 
                   ¿Cuantas veces desea la repeticion? 
                   <input type=text name=number> 
                   <input type=submit value=Enviar>";   
                   break;
            case 22:
                echo "<title>Ciclo while</title>";
                echo "<form action=2.php method=post> 
                   ¿Cuantas veces desea la repeticion? 
                   <input type=text name=number> 
                   <input type=submit value=Enviar>";
                break;
            case 23:
                break;
            case 24:
                echo "<title>Formulario</title>";
                echo "<form action=3.php method=post> 
                Introduce tu nombre: 
                <input type=text name=nombre> 
                <input type=submit>"; 
                break;
            case 25: 
                echo "<title>Formulario</title>";
                echo "<form action=4.php method=post> 
                 <input type=radio name=gender value=0> Sr. 
                 <input type=radio name=gender value=1> Sra.<br> 
                 Tu apellido:<br> 
                 <input type=text name=lastname> 
                 <input type=submit>";  
                break;
            case 26:
                echo "<form action=4.php method=post> 
                 <input type=radio name=gender value=0> Sr. 
                 <input type=radio name=gender value=1> Sra.<br> 
                 Tu apellido:<br> 
                 <input type=text name=lastname> 
                 <input type=submit name=submitbutton value=Envialo!>";
                break;
            case 27:
                if (isset($_POST['pw'])) { 
                    $pw = $_POST['pw']; 
                    if ($pw == "magic") { 
                       header ("Location: newpage1.html"); 
                    } elseif ($pw == "abracadabra" ){ 
                       header ("Location: newpage2.html"); 
                    } else { 
                       header ("Location: sorry.html"); 
                    } 
                  }
                  echo "<form action=6.2.php method=post> 
                  <input type=text name=pw>
                  [PHP] IDSYSTEMS 2069 
                  <input type=submit value=Enviar>";
                  break; 

            default:
            echo "<h1>opcion no disponible</h1>";
            break;
    }
?>