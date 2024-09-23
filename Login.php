<?php 
//Creamos una nueva sesion o reanudamos una existente mendiante un id de sesion proporcionado en una solicitud get o post
session_start();
if($_SERVER['REQUEST_METHOD']==='POST'){//VERIFICA SI EL FORMULARIO FUE ENVIADO SOBRE EL METODO POST
$username = $_POST['username'];
$password = $_POST['password'];
if($username ==='nombre@cesun.edu.mx'&& $password==='12345')//creamos las variables del usuario y la contraseña
{$_SESSION['loggedin']=true;//almacena la variable session en donde el usuario ya ingreso correctamente
    header('Location:taskmanager1.php');//nos redirige al archivo al task manager
    exit;
    }else{$error= "Usuario o contraseña invalidos";}//arroja un mensaje si la contraseña o el usuario son incorrectos

}else{
   $error="No se obtuvieron datos";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Iniciar Sesión</h2>
            <?php if(isset($error)): ?>
                <div class="alert alert-warning"><?php echo $error;?></div> 
            <?php endif; ?>
            <form action="Login.php" method="post">
                <div class="input-group">
                    <label for="username">Usuario</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="login-btn">Ingresar</button>
            </form>
            <div class="extra-options">
                <a href="#">¿Olvidaste tu contraseña?</a>
            </div>
        </div>
    </div>
</body>
</html>