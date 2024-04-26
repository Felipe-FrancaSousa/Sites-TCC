<?php
	@include('../../connect.php');

	session_start();

	$lista = mysqli_query($con, "SELECT * FROM `tbl_usuario`");

	$username = $_POST['username'];
	$senha = 	md5($_POST['senha']);
    $privilegio = array();

	$verifica = mysqli_query($con, "SELECT * FROM `tbl_usuario` WHERE username = '$username' AND senha = '$senha'") or die("erro ao selecionar");
    if (mysqli_num_rows($verifica)<=0){
    	echo"Login e/ou senha incorretos";
        die();
    }else{
        while($conta = mysqli_fetch_array($verifica))
        {
            array_push($privilegio, $conta['privilegio']);
        }
    	$_SESSION['username'] = $username;
        $_SESSION['privilegio'] = $privilegio;
		$_SESSION['logado'] = true;
        header("Location:../");
    }
?>