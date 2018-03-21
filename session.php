<?php
include('conexion_sis.php');

//obtengo los datos de usuario

	$usuario = $_POST['usuario'];
	$pass = $_POST['pass'];
	//$pass = sha1($passuser);

  	$sql = "SELECT USUARIO,PASS,NIVEL FROM gen_usuarios WHERE USUARIO='$usuario' AND PASS='$pass'";

  	$cmd = sqlsrv_query($connn, $sql);
  	$dr = sqlsrv_fetch_array($cmd);

  		if ($dr==true) {
 				//inicializa las variables de sesión
				session_start();
				//$_SESSION['anioproceso'] = $anioproc;
				//$_SESSION['mesproceso'] = $mesproc;
				$_SESSION['nivel'] = $dr['NIVEL'];
				$_SESSION['nomusuario'] = $dr['USUARIO'];
				$_SESSION['loged'] = 'SI';
				header('Location: inicio.php');
					} else {
				header('Location: index.php');
								 }
?>
