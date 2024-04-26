<?php 
	require('seg.php');
?>

<html lang="pt-BR">
<head>
	<title>Conta - The Emperor Tomb</title>
	<link rel="stylesheet" href="../Estilos/comum.css">
	<link rel="stylesheet" href="../Estilos/rodape.css">
	<link rel="stylesheet" href="../Estilos/artigos.css">
	<link rel="stylesheet" href="../Estilos/elementos.css">
	
	<style>
		
		*
		{
			outline: none;	
		}
		
		@font-face
		{
			font-family: Pixel;
			src: url(../Fontes/Pixellari.ttf);
			font-weight: normal;
			font-style: normal;
		}
		
		body
		{
			font-family: Pixel;
		}
		
	</style>
	
</head>
<body>
	<nav>
        <ul>
            <img src="../Imagens/tocha.gif" alt="Tocha" class="tocha" id="esquerda">
            
            <div class="divLogo">
                <a href="../">
                    <img src="../Imagens/Logo.png" alt="Logo The Emperor Tomb">
                </a>
            </div>
                
            <img src="../Imagens/tocha.gif" alt="Tocha" class="tocha" id="direita">
        </ul>
    </nav>
	<article>
		<h1>Suas informações</h1>
		<?php
			require('../connect.php');

			$user = $_SESSION['username'];


			if(!($lista = mysqli_query($con, "Select * from `tbl_usuario` WHERE username = '$user'")))
			{
				printf("Error: %s\n", mysqli_error($con));
			}
			else
			{
				$nome = array();
				$email = array();
				$username = array();
				$data_nasc = array();

				echo "<div class = 'containerFeedbacks'>";
				echo "<table width='100%'><tr><td align='center'>";

				while($conta = mysqli_fetch_array($lista))
				{
					array_push($nome, $conta['nome']);
					array_push($email, $conta['email']);
					array_push($username, $conta['username']);
					array_push($data_nasc, $conta['data_nasc']);
				}

			   /* $nomeReverso = array_reverse($nome);
				$emailReverso = array_reverse($email);
				$usernameReverso = array_reverse($username);
				$mensagemReverso = array_reverse($data_nasc);*/

				for ($i=0; $i < count($nome); $i++) 
				{ 
						echo   "<h1>$username[$i]</h1>
								<h2>$nome[$i]</h2>
								<h3>E-mail: $email[$i]</h2>
								<h3>Data de nascimento: $data_nasc[$i]</h5>
								";
				}

				echo "</td></tr></table>";
				echo "</div>";
			}

			
		?>
		<br>
		<br>
		<h4>Em breve adicionaremos um botão para vc editar a sua conta ;&#41;</h4>
	</article>
	
    <footer>
        <section>
            <ul>
                <h3><a href="../">Página Inicial</a></h3><br>
                <li><a href="../#sobre">Sobre</a></li>
                <li><a href="../#download">Download</a></li>
                <li><a href="../#feedback">Feedback</a></li>
                <li><a href="../#ajuda">Ajuda</a></li>
            </ul>

		   	<ul>
				<h3>Sistema</h3><br>
				<li><a href='../adm/feedbacks'>Feedbacks</a></li>
				<li><a href='../adm/contas'>Contas</a></li>
				<li>&nbsp;</li>
				<li><a href="../ranking">Ranking</a></li>
			</ul>

            <ul>
                <h3>Conta</h3><br>
                <li><a href='./'>Minha Conta</a></li>
                <li><a href='./editar'>Editar Informações</a></li>
            </ul>
        </section>
        <section>
            <small>&copy; 2019 - <a>Emperor Arts</a> - Todos os direitos reservados</small>
        </section>
	</footer>
	
</body>
</html>
