<?php
//abrimos una sesión de inicio 
session_start();
//si la sesión está actividad a través de una contraseña, ingresamos a la subcarpeta sistema
//con location, es decir el usuario abrió sesión con su contraseña correctamente
if(!empty($_SESSION['active']))
{
    header("location: sistema/");
}else{
    //si la sesión no se ha iniciado correctamente validamos lo que se ingreso
    // en las instrucciones name de usuario y clave a través del método POST
    if(!empty($_POST))
    {
        //validamos si se ingresaron datos en los input usuario y clave
        //con la instrucción emply
        if(empty($_POST['usuario']) || empty($_POST['clave']))
        {
            echo '<script>
                alert("Ingrese Nombre de Usuario y Contraseña.");
                window.history.go(-1);
                </script>';
            exit;
        }else{
            //como ingreso datos en los inputs usuario y clave
            //llamamos a nuestro archivo cn.php para ingresar a nuestra base de datos sismos
            //a través de require_once
            require_once "cn.php";
            //pasamos a las variables $user y $pass, los datos que se ingresaron en los inputs de usuario y clave
            //a través de método POST
            $user = $_POST['usuario'];
            $pass = $_POST['clave'];
            
            //en la variable query preguntamos a la tabla usuarios si el campo run es igual a la variable $user
            //y si el campo pass es igual a la variable $pass
            $query  = mysqli_query($conexion,"SELECT * FROM usuarios WHERE run='$user' and pass='$pass'");
            //en la variable $result se almacena si encontró un dato en nuestra tabla usuarios
            $result = mysqli_num_rows($query);
            
            //si la variable $result es mayo a 0, quiere decir que encontró el usuario y password, existen
            if ($result>0) {
                //pasamos los datos que se encuentra los campos en la tabla usuarios a las variables
                //$_SESSION
                $data = mysqli_fetch_array($query);
                $_SESSION['active']   = true;                   
                $_SESSION['id']       = $data['id'];
                $_SESSION['run']      = $data['run'];
                $_SESSION['pass']     = $data['pass'];
                $_SESSION['acceso']   = $data['acceso'];
                $_SESSION['nombre']   = $data['nombre'];
                //como se encontró el usuario y la contraseña ingresamos a la subcarpeta sistema
                //es decir ingresamos a la plataforma
                header("location: sistema/");
                
            }else {
                
                echo '<script>
                    alert("Nombre de Usuario o Contraseña incorrecta...");
                    window.history.go(-1);
                    </script>';
                session_destroy();
                exit;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="sistema/img/cono.ico"> <!-- para colocar una imagen formato icono -->
    <link rel="stylesheet" href="sistema/css/estilo_login.css">
    <title>Libro de registro publico escolar</title>
</head>
<body>
    
    <div class="container">
        <div class="info">
            <p class="txt-1">Gracias por visitarnos</p>
            <br>
            <h2>Libro de Matricula online 2024</h2>
            <h3>Liceo San francisco</h3>
            <hr>
            
            <br>
            <p class="txt-2">
                El objetivo de nuestra plataforma es facilitarle a los apoderados el proceso de postulación a los apoderados a la hora de inscribir a sus pupilos.
            </p>
            <br><br><br>
            <a class="boton_postular" href="sistema/postulacion.php">Postular</a>

        </div>

        <form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <img class="imagen" src="sistema/img/liceo_footer.png" alt="">    
        <h2>Matricula 2024</h2>
            <p>
            Bienvenidos a nuestra plataforma, te ayudamos a inscribir a tu pupilo para el año 2024.
            </p>
            <div class="inputs">
                <input type="text" class="box" placeholder="Usuario" name="usuario">
                <input type="password" class="box" placeholder="Contraseña" name="clave">
                <a href="#">Olvidaste tu contraseña?</a>
                <input type="submit" value="login" class="submit">
            </div>
        </form>
    </div>
</body>
</html>