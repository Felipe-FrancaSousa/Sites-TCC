<?php
	include('../../connect.php');
	if (isset($_POST['cadastrar'])) 
	{
		echo "entrou no if";
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$senha = md5($_POST['senha']);
		$data_nasc = $_POST['data_nasc'];

		$query_select_user = "SELECT `username` FROM `tbl_usuario` WHERE username = '$username'";
		$select_user = mysqli_query($con, $query_select_user);
		$array_user = mysqli_fetch_array($select_user, MYSQLI_BOTH);
		$logarray_user = $array_user['username'];

		$query_select_email = "SELECT `email` FROM `tbl_usuario` WHERE email = 'email'";
		$select_email = mysqli_query($con, $query_select_email);
		$array_email = mysqli_fetch_array($select_email, MYSQLI_BOTH);
		$logarray_email = $array_email['email'];
        
        

		if($logarray_user == $username)
		{
			echo "entrou no login já existe";
			echo "Esse username já existe<br>Porfavor, escolha outro";
			die();
            echo "<script>console.log('Tá errado essa merda ai');</script>";
		}
		else
		{
			if($logarray_email == $email)
			{
				echo "Entrou no email já existe";
				echo "Esse email já existe, por favor insira outro";
			}
			else
			{
				if(mysqli_query($con, "INSERT INTO `tbl_usuario` (`id`, `nome`, `email`, `username`, `senha`, `data_nasc`, `privilegio`) VALUES (NULL, '$nome', '$email', '$username', '$senha', '$data_nasc', b'0');"))
				{
					echo "entrou no cadastro";
					echo "Dados cadastrados com sucesso";
				}
				else
				{
					echo "Não foi possível cadastrar";
				}
			}
		}
		echo "<br>$nome";
		echo "<br>$email";
		echo "<br>$username";
		echo "<br>$senha";
		echo "<br>$data_nasc";
	}
?>
