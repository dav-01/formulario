<?php
    $con=mysqli_connect('localhost','formulario') or die('Error en la conexion al servidor');

    $sql="INSERT INTO datos
    VALUES (null,'".$_POST["nombre"]."','".$_POST["apellido"]."','".$_POST["edad"]."',
    '".$_POST["sexo"]."','".$_POST["celular"]."','".$_POST["fecha"]."')";

    $resultado=mysqli_query($con, $sql) or die ('Error en el query database');

    mysqli_close($con);

    echo "los datos han sido enviados";
?>
