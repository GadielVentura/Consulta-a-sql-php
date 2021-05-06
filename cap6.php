
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cap 6</title>
</head>
<body>

<form method="POST" action="cap6.php">
</div>
    <br>
    <div class="form-group">
    RFC: <input type="text" name="rfc" id="rfc">
  </div>
<div class="form-group">
Nombre:<input type="text" name="nombre" id="nombre">
</div>
    <br>
    <div class="form-group">
    direccion: <input type="text" name="direccion" id="direccion">
    
    <br>
    <div class="form-group">
    Telefono: <input type="text" name="telefono" id="telefono">
  </div>
    <br>
    <input type="submit" value="enviar" class="btn btn-success" name="btn1">
    <input type="submit" value="consultar" class="btn btn-success" name="btn2">

</form>
<?php include("boostrap.php");?>
<?php 

if(isset($_POST['btn1']))
{
    include("abrir_conexion.php");

    $rfc = $_POST['rfc'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];

    $query = "INSERT INTO propietario(rfc, nombre, direccion, telefono) VALUES ('$rfc','$nombre','$direccion','$telefono')";

    $resul = mysqli_query($conexion,$query);
    if(!$resul){
        die("query failed");
    }
    //include("cerrar_conexion.php");
    echo "se insertaron correctamente"; 
    
    /*
    $conexion->query("INSERT INTO $tabla_db (rfc, nombre, direccion, telefono) values ('$rfc','$nombre','$direccion','$telefono')");

    include("cerrar_conexion.php");
    echo "se insertaron correctamente"; */
}

?>
<table class="table table-bordered">
<thead>
<tr>
<th>rfc</th>
<th>nombre</th>
<th>direccion</th>
<th>telefono</th>
</tr>
</thead>
<tbody>
<?php

if(isset($_POST['btn2']))
{
    include("abrir_conexion.php");

    $rfc = $_POST['rfc'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];

    $query = "SELECT * FROM propietario";

    $resul = mysqli_query($conexion,$query);
    
    while($row=mysqli_fetch_array($resul)){ ?> 
        <tr>
        <td> <?php echo $row['rfc'];?> </td>
        <td> <?php echo $row['nombre'];?> </td>
        <td> <?php echo $row['direccion'];?> </td>
        <td> <?php echo $row['telefono'];?> </td>
        
        </tr>
<?php } ?>
<?php } ?>

                    </tbody>
                    </table> 
</body>
</html>