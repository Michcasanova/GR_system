<?php


    
    //incluimos nuestro archivo config
    include 'config.php'; 

    // Incluimos nuestro archivo de funciones
    include 'funciones.php';

    // Obtenemos el id del evento
    $id  = evaluar($_GET['id']);

    // y lo buscamos en la base de dato
    $bd  = $conexion->query("SELECT * FROM eventos WHERE id=$id");

    // Obtenemos los datos
    $row = $bd->fetch_assoc();

    // titulo 
    $titulo=$row['title'];

    // cuerpo
    $evento=$row['body'];

    // Fecha inicio
    $inicio=$row['inicio_normal'];

    // Fecha Termino
    $final=$row['final_normal'];
    //Camion 
    $chofer_asignado=$row['chofer_asignado'];
    //chofer
    $id_camion=$row['id_camion'];
     //chofer
     $Destino=$row['Destino'];
     //documento
     $document=$row['document'];
     $document_2=$row['document_2'];

// Eliminar evento
if (isset($_POST['eliminar_evento'])) 
{
    $id  = evaluar($_GET['id']);
    $sql = "DELETE FROM eventos WHERE id = $id";
    if ($conexion->query($sql)) 
    {
        echo "Evento eliminado";
    }
    else
    {
        echo "El evento no se pudo eliminar";
    }
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=$titulo?></title>
</head>
<body>
	 <h3><?=$titulo?></h3>
	 <hr>
     <b>Fecha inicio:</b> <?=$inicio?>
     <br>
     <br>
     <b>Fecha termino:</b> <?=$final?>
     <br>
     <br>
 	 <b>Observaciones:</b> <?=$evento?>
     <br>
     <br>
     <b>Destino:</b> <?=$Destino?>
     <br>
     <br>
     <b>Conduce:</b> <?=$chofer_asignado?>
     <br>
     <br>
     <b>Camion asinado:</b> <?=$id_camion?>
     <br>
     <br>
     <b>Carta porte :</b> <?=$document?> <!--<font  color="red" face="Comic Sans MS,arial,verdana">Es necesario enlazar Carta porte</font>-->
     <br>
     <br>
     <b>Manifiesto  :</b>  <?=$document_2?> <!--<font  color="red" face="Comic Sans MS,arial,verdana">Es necesario enlazar Manifiesto</font>-->


</body>

<form action="" method="post">
<button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Cerrar evento </button>
<!--    <button type="submit" class="btn btn-danger" name="eliminar_evento">Eliminar</button>-->
</form>
</html>
