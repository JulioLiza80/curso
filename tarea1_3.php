<style>
form{
  width: 50%;
  margin: auto;
  border: 1px solid black;
  background-color: beige;
}

</style>

<?php
//formulario de entre de datos

echo "
<form action='tarea1_3.php'method='get'>
  <label for='numero'>Introduzca número</label>
  <input type='' name='numero' id='numero'>

  <input type='submit' name='enviar' value='enviar'>

</form>";


//creacion de variables necesarias
$numero;
$n;
$binario=array();


//comprobar envio y caracteres númericos

if(isset($_GET['enviar']) && is_numeric($_GET['numero'])){
  $numero=$_GET['numero'];

    //creamos una variable para guardar numero
    $n=$numero;
     
    //comenzamos a calcular el valor binario

    while($n >= 1){
          
          if($n%2==0){
             array_unshift($binario,0);// guardamos el valor en la ultima posicion de nuestro array
          }else{
           
            array_unshift($binario,1);
          }
           
          if($n==2){
            array_unshift($binario,1);
          }
          $n /=2;
        }
   
     //mostramos el numero recogido
    echo "<form>";

    echo"<h3>Numero introducido $numero</h3>";

    echo "<h3>Numero Binario: ";
    foreach($binario as $r){
        echo $r;
    }
    
    echo "</h3>";
    //creamos los checks con los valores recogidos
   
    foreach($binario as $i){
        if ($i==1){
          
         echo "<input type='checkbox' checked>";
        }else{
     
          echo " <input type='checkbox'>";  
        }
    } 
  
    echo "</form>";
  }else
  //si los datos enviados no son numericos, solicitamos el envio de nuevo

  echo "<form>Introduca un número por favor</form>"

  


?>

