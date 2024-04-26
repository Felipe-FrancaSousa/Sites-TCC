<?php
	@include('connect.php');

	$nome = 	$_POST['nome'];
	$email = 	$_POST['email'];
	$titulo =	$_POST['titulo'];
	$mensagem = $_POST['mensagem'];
	$tipo = 	$_POST['tipo'];

	
    if(mysqli_query($con, "INSERT INTO `tbl_feedback` (`nome`, `email`, `titulo`, `tipo`, `mensagem`) VALUES ('$nome', '$email', '$titulo', '$tipo', '$mensagem');"))
    {
        echo "Feedback enviado com sucesso!";
    }
    else
    {
        echo "Foi o else";
    }
?>