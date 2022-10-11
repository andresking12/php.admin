<?php 
    include("conexion.php");
   

$id=$_GET['id'];

$sql="SELECT * FROM inmobiliaria WHERE id='$id'";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="titulo" placeholder="titulo" value="<?php echo $row['titulo']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="precio" placeholder="precio" value="<?php echo $row['precio']  ?>">
                                <input type="text" class="form-control mb-3" name="descripcion" placeholder="descripcion" value="<?php echo $row['descripcion']  ?>">
                                <input type="text" class="form-control mb-3" name="habitaciones" placeholder="habitaciones" value="<?php echo $row['habitaciones']  ?>">
                                <input type="text" class="form-control mb-3" name="estacionamiento" placeholder="estacionamiento" value="<?php echo $row['estacionamiento']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>