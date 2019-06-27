<?
$conn=new mysqli("localhost", "registro", "", "registro") or die("ConnectionFailed");

if(isset($_POST['crear'])){
    $usuario=$_POST['usuario'];
    $contrasena=$_POST['contrasena'];
    
    $contrasenaEncriptada=password_hash($contrasena, PASSWORD_DEFAULT);
    $queryIngresarUsuario="INSERT INTO `users`(`usuario`, `contrasena`) VALUES ('$usuario','$contrasenaEncriptada')";
    $resultIngresarUsuario=mysqli_query($conn,$queryIngresarUsuario);
}
?>

<!DOCTYPE html>
<html lang="en-us">
  <head>
      <style>
          body{
              background-color:#0099ff;
          }
      </style>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Prueba Tecmi</title>
  
  </head>
  <body>
    <form action="" method="post">
        <input type="text" name="usuario" value="">
        <input type="password" name="contrasena" value="">
        <input type="submit" name="crear" value="Crear Usuario">
    </form>
  </body>
</html>
