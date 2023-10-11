<?php
    $fecha = date("d-m-y");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postular</title>
<link rel="stylesheet" href="estilo_postular.css">
</head>
<body>    
    <form action="" method="post">
    <section class="">
    <h2>Bienvenido a la postulación</h2>
            <h3> Ingrese sus datos</h3>
        <input type="hidden" name="fecha" value="<?php echo $fecha;?>">

        <label for="">Fecha de postulación</label>
        <p><?php echo $fecha;?></p>
        <br>
        <label for="">Nombre:</label>
                        <input class="box" type="text" name="nombre_estudiante" placeholder="Nombre" required>
                        <br><br>
        <label for="">Nombre apoderado:</label>
                        <input class="box" type="text" name="nombre_apoderado" placeholder="Nombre apoderado" required>
                        <br><br>
        <label for="">Run apoderado:</label>
                        <input class="box" type="text" name="run_apoderado" placeholder="Run Apoderado" required>
                        <br><br>
        <label for="">run estudiante:</label>
                        <input class="box" type="text" name="run_estudiante" placeholder="Run alumno" required>
                        <br><br>
        <label for="">curso a Postular:</label>
                        <select class="box" name="curso_postulacion" required>
                            <option></option>
                            <option>pre-kinder</option>
                            <option>kinder</option>
                            <option>1° basico</option>
                            <option>2° basico</option>                
                            <option>3° basico</option>
                            <option>4° basico</option>
                            <option>5° basico</option>
                            <option>6° basico</option>
                            <option>7° basico</option>
                            <option>8° basico</option>
                            <option>1° medio</option>
                            <option>2° medio</option>
                            <option>3° medio</option>
                            <option>4° medio</option>
                        </select>
                        <br>
                        <br>
        <label for="">Comuna:</label>
                        <select class="box" name="comuna" required>
                            <option></option>
                            <option>Freirina</option>
                            <option>Vallenar</option>
                            <option>Huasco</option>
                            <option>huasco bajo</option>
                            <option>Alto del carmen</option>
                            <option>Maitencillo</option>
                        </select>
                        <br>
                        <br>
        <label for="">colegio de origen</label>
                        <input class="box" type="text" name="colegio_origen" placeholder="Colegio de origen" required>
                        <br><br>
        <label for="">genero:</label>
                        <select class="box" name="curso_postulacion" required>
                            <option></option>
                            <option>Masculino</option>
                            <option>Femenino</option>
                            <option>Otro</option>
                        </select>
                        <br><br>
        <label for="">Correo:</label>
                        <input class="box" type="email" name="correo_apoderado" placeholder="Correo apoderado" required>
                        <br><br>
        <label for="">Numero de celular</label>
                        <input class="box" type="text" name="contacto" placeholder="numero celular" required>
                        <br><br>
        <label for="">telefono fijo</label>
                        <input class="box" type="text" name="telefono" placeholder="numero telefono" required>
                        <br><br>
        <label for="">domicilio</label>
                        <input class="box" type="text" name="domicilio" placeholder="domicilio" required>
        <br>
    <input type="submit" value="postular" class="submit">      
    </section>
</form>
</body>
</html>

