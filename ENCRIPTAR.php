<?php
error_reporting(E_ERROR);

$mensaje = $_POST['mensaje'];
$mensaje = strtoupper($mensaje);
$tamano =  strlen($mensaje);


echo "LA PALABRA SIN ENCRIPTAR ES:";
echo "</br>";
echo "<div class='a'>$mensaje</div>";
echo "</br>";
echo "LA PALABRA ENCRIPTADA ES:", "<br>";


for ($pos=0; $pos <= $tamano ; $pos++) {
	
 $resultado1 = $mensaje[$pos];
  if ($resultado1 == "X") {
   echo " ","<span style='color:red; font:bold 36px Arial;'>A</apan>";
  }else {
   if ($resultado1 == "Y") {
   echo " ","<span style='color:red; font:bold 36px Arial;'>B</apan>";
   }else{
    if ($resultado1 == "Z") {
    echo " ","<span style='color:red; font:bold 36x Arial;'>C</apan>";
    } else {
     for ($i=65;$i<=90;$i++) {
      $letra = chr($i);
      if ($resultado1 == $letra) {
       $i = $i + 3;
       $resultado =chr($i);
       echo " ", "<span style='color:red; font:bold 25px Arial;'>$resultado</apan>";
      }
	  
     }
	 
    }
   }
  }
}

echo "</br>","</br>","</br>","</br>","</br>","</br>","</br>";
echo "<a style='top:20px; left:35%; color:#9fc30b; text-decoration: none'; href='index.php'>Atras<a/>"; 
?>