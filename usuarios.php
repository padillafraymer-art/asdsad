<?php
include("header.php");
include("conexion.php");

?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h3 class="mt-4">Listado de usuarios</h3>
                        <a href="añadir_usuario.php"><button type="button" class="btn btn-dark">Añadir</button></a>
                         <a href="reporte.php"><button type="button" class="btn btn-dark">Reporte</button></a>
                       
                        
                        <div class="card mb-4">
                        <br>
                            
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Usuario</th>
                                            <th>Tipo</th>
                                            <th>Acciones</th>
                                            
                                        </tr>
                                    </thead>
                                   
                                    <tbody>

                                    <?php

                                    $sql = "SELECT * FROM usuarios ";
                                    $result = mysqli_query($conexion, $sql);
            
                                     while($row = mysqli_fetch_assoc($result)) { ?>
                                      <tr>
                                      <td> <?php echo $row['nombre']; ?></td>
                                      <td> <?php echo $row['usuario']; ?></td>
                                      <td> <?php echo $row['tipo']; ?></td>

                                      <td> <a href="editar_usuario.php?id_usuario=<?php echo $row['id_usuario']; ?> "> <button class="btn btn-warning">
            <i class="fas fa-edit"></i>
        </button></a>
    <a href="javascript:preguntar(<?php echo $row["id_usuario"]?>)"  > <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button></a></td>

                                      <?php


                                    }
                                      ?>
                                           
                                     </tr>
                                        
                                       
                                      
                               
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>



<?php
include("footer.php");

?>