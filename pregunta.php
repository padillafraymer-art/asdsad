<?php

session_start();
$usu = $_SESSION['user'];
$pregunta = $_SESSION['pregunta'];


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Password Reset - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Recuperar Contraseña <?php  echo $usu; ?></h3></div>
                                    <div class="card-body">
                                        <div ><h5><?php echo $pregunta; ?> </h5></div>
                                        <form action="validar_res.php" method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="respuesta" type="password" placeholder="name@example.com" />
                                                <label for="inputEmail">Respuesta</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="salir.php">Volver al inicio</a>
                                               <button type="submit" class="btn btn-primary">Recuperar</button>
                                            </div>
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
            <?php include('footer.php'); ?>
