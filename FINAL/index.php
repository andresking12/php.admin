<?php 
    include("conexion.php");
    

    $sql="SELECT *  FROM departamentos";
    
   
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA ALUMNO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Registrar departamentos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="id" placeholder="id">
                                    <input type="text" class="form-control mb-3" name="titulo" placeholder="titulo">
                                    <input type="text" class="form-control mb-3" name="precio" placeholder="precio">
                                    <input type="text" class="form-control mb-3" name="descripcion" placeholder="descripcion">
                                    <input type="text" class="form-control mb-3" name="habitaciones" placeholder="habitaciones">
                                    <input type="text" class="form-control mb-3" name="estacionamiento" placeholder="estacionamiento">
                                    
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>id</th>
                                        <th>titulo</th>
                                        <th>precio</th>
                                        <th>descripcion</th>
                                        <th>habitaciones</th>
                                        <th>estacionamiento</th>
                                    </tr>
                                </thead>

                                <tbody id="tblData">
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
            <script src="javascript/consultacliente.js"></script>
    </body>
</html>