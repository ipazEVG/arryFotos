<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array_flores</title>
    <link rel=stylesheet href="CssArray.css">
</head>
<body>
<?php 
// Creamos un array de 3 elementos que contenga la URL de cada foto.
$imagenes["Rosa"]="img/Rosa.jpg";
$imagenes["Camelia"]="img/Camelia.jpg";
$imagenes["Margarita"]="img/margarita.jpeg";
/*Recorremos cada elemento de la array de manera secuencial con un foreach. 
Por cada elemento del array, se asigna la clave del elemento a $indice y el valor a $img.*/
 foreach($imagenes as $indice=>$img){
 // Dentro del bucle, se genera un bloque de código HTML para cada elemento del array.
    echo "<div><h1>".$indice."</h1><img src='".$img."'alt='".$indice."'></div>";}

   /* así es mas sencillo
   echo "<h1> $indice </h1>";
    echo "<img src= '$img' alt= '$indice'>";
    echo "</div>";*/

//var_dump($imagenes);// dice cada elemento del array y de que tipo es.
//echo '<br>';
//print_r($imagenes);// nos muestra como esta hecho el array por pantalla 

?>
</body>
</html>

