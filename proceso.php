<?php 
$nombre_archivo = "archivo.html"; 
 if(file_exists($nombre_archivo))
    {
        unlink($nombre_archivo);
        $archivo=fopen("archivo.html", "a") or die ("Error al crear.");

$nombre=$_REQUEST['nombre'];
$mensaje=$_REQUEST['mensaje'];

fwrite($archivo, "<h1>".$nombre."</h1>");
fwrite($archivo, "\n");
fwrite($archivo, "<p>".$mensaje."</p>");
fwrite($archivo, "\n");
header('Location: index.php');
    }
    else{

$archivo=fopen("archivo.html", "a") or die ("Error al crear.");

$nombre=$_REQUEST['nombre'];
$mensaje=$_REQUEST['mensaje'];

fwrite($archivo, "<h1>".$nombre."</h1>");
fwrite($archivo, "\n");
fwrite($archivo, "<p>".$mensaje."</p>");
fwrite($archivo, "\n");

header('Location: index.php');

}
 ?>