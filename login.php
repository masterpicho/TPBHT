<?
$conn=new mysqli("localhost", "mototli_japones", "Japones1209!", "mototli_japones") or die("ConnectionFailed");

if(isset($_POST['login'])){ //check if form was submitted
  $usuario = $_POST['usuario']; //get input text
  $psw = $_POST['contrasena'];
  $query1 = "SELECT * FROM users WHERE usuario = '$usuario'";
  $result = mysqli_query($conn, $query1);
  $message="";
  if(mysqli_num_rows($result)!=0){
  while($data= mysqli_fetch_assoc($result) ) {
				//	$IDUsuario = $data['ID'];
                    //$usuario = $data['nombre'];
                    $contrasena = $data['contrasena'];
                   // $nombreUsuario=$data['nombre'];
                    //$apellidoUsuario=$data['apellido'];
                //    $urf = $data['urf'];
                    //$tipo_usuario = $data['tipo'];
                   // $psw=password_verify($psw, $contrasena);
					}
  if(password_verify($psw, $contrasena)){
  //$sesionIniciada=true;
  
  //$message = "Bienvenido ".$nombre;
  //$_SESSION['IDusuario']=$IDUsuario;
//  $_SESSION['nombre']=$nombreUsuario;
  //$_SESSION['apellido']=$apellidoUsuario;
//  $_SESSION['sesioniniciada']=true;
  //$_SESSION['tipo_usuario']=$tipo_usuario;
  //$message = "Bienvenido ".$_SESSION['nombre'];
//  $_SESSION['mensajeBienvenida']=$message;
 //header("Location: pagosyadeudos.php");
 
print("Sesion Iniciada <br>");
print($contrasena);
  }
  
  }
  
  
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
        <input type="submit" name="login" value="Crear Usuario">
    </form>
  </body>
</html>