<?php
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $nacionalidad = $_POST["nacionalidad"];
    $sexo = $_POST["sexo"];
    
    echo "Su nombre es $nombre <br><br><br>";
    
    if ($sexo === 'masculino') {
        echo "Su sexo es $sexo";
    } else {
        echo "Ella tiene sexo $sexo <br><br><br>";
    }
    
    echo "Su nacionalidad es $nacionalidad";

?>

