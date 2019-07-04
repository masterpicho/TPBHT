<?php
echo("Hola");
$conn=new mysqli("localhost", "root", "", "registro") or die("ConnectionFailed");
$queryCrearTabla='CREATE TABLE users (usuario VARCHAR(50), contrasena VARCHAR(200))';
    $resultCrearTabla=mysqli_query($conn,$queryCrearTabla);
/*
$this->pdo = new PDO($GLOBALS['db_dsn'], $GLOBALS['db_username'], $GLOBALS['db_password']);

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $this->pdo->query("CREATE TABLE users (usuario VARCHAR(50) NOT NULL, contrasena VARCHAR(200) NOT NULL)");
*/
$usuario="Luis";
$contrasenaEncriptada=password_hash("Hola", PASSWORD_DEFAULT);
    $queryIngresarUsuario="INSERT INTO `users`(`usuario`, `contrasena`) VALUES ('$usuario','$contrasenaEncriptada')";
    $resultIngresarUsuario=mysqli_query($conn,$queryIngresarUsuario);

//check if form was submitted
  //$usuario = $_POST['usuario']; //get input text
 // $psw = $_POST['contrasena'];
  $query1 = "SELECT * FROM users WHERE usuario = '$usuario'";
  $result = mysqli_query($conn, $query1);
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
  if(password_verify($contrasenaEncriptada, $contrasena)){

echo("Sesion Iniciada <br>");
echo($contrasena);
  }
  
  }
  
  

?>
