<?php


include("header.php");
include("conexion.php");


?>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .error-message {
            color: red;
            font-size: 0.9em;
            margin-top: 5px;
            display: none; /* Oculto por defecto */
        }
        .success-message {
            color: green;
            font-size: 1em;
            margin-top: 15px;
            text-align: center;
            display: none;
        }
        
        button:hover {
            background-color: #0056b3;
        }
        input.invalid {
            border-color: red;
        }
        <style>
        .error {
            color: red;
        }
    </style>
    

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h3 class="mt-4">Generar Reporte de asistencias</h3>
                        <form class="row g-3 needs-validation" novalidate method="post" action="reporte.php" id="myform">
               
                <div class="col-6">
                  <label for="inputPassword4" class="form-label">Inicio</label>
                  <input type="date" class="form-control" id="inicio" name="inicio" required>
                  <span class="error" id="errorcedula"></span>
                  <div class="invalid-feedback">
                  Dato Incorrecto
                    </div>
                 </div>
                 <div class="col-6">
                  <label for="inputPassword4" class="form-label">Fin</label>
                  <input type="date" class="form-control" id="fin" name="fin">
                 
                  <div class="invalid-feedback">
                 
                    </div>
                 </div>
                 
                <br>
                <div class="text-center">
                  <div id="mensaje" style="color: red;"></div>
                  <button type="submit" class="btn btn-primary">Generar</button>
                  <button type="reset" class="btn btn-secondary">Limpiar</button>
                </div>
              </form><!-- Vertical Form -->
            </div>
            

<script>
$(document).ready(function() {
    $('#myform').on('submit', function(e) {
        e.preventDefault(); // Evita que el formulario se envíe

        // Obtener los valores de las fechas
        var fechaInicio = $('#inicio').val();
        var fechaFin = $('#fin').val();

        // Validar que la fecha de inicio no sea mayor que la fecha de cierre
        if (fechaInicio > fechaFin) {
            $('#mensaje').text('La fecha de inicio no puede ser mayor que la fecha de cierre.');
        } else {
           
            this.submit(); // Descomentar para enviar el formulario
        }
    });
});
</script>
          </main>


<?php


include("footer.php");


?>