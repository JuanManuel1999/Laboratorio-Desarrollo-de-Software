<?php 
$host = 'localhost';
$db_user = 'root';
$db_pass = '';

$database = 'bdtutoria';
$con=mysqli_connect($host, $db_user, $db_pass,$database);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA TUTORIA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-8">
                    <div class="row"> 
                        <div class="col-md-12">
						<h1>ALUMNOS NUEVOS PARA TUTORIA SEMESTRE 2022-I</h1> 
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Nro</th>
                                        <th>Codigo</th>
                                        <th>Nombre</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php 
											//Alumnos nuevos(cachimbos o que retomaron el semestre) y seran tutorados
                                            $NuevaTutoria = mysqli_query($con,"SELECT M.Codigo, M.Nombre FROM Matriculados2022I M left Join Tutorados T
                                                                                on M.Codigo=T.Codigo Where T.Codigo is NULL;");
                                            //Listar en una tabla
											$n=0;
											while($fila1 = mysqli_fetch_array($NuevaTutoria)){
												$n++;
												?>
													<tr><td><?php  echo $n?></td>    
													<td><?php  echo $fila1['Codigo']?></td>
													<td><?php  echo $fila1['Nombre']?></td>                                     
													</tr>
												
                                        		<?php 
                                            }	
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>
